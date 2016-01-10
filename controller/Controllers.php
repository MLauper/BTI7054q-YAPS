<?php
class Controller {
    private $model;
    public function __construct($model){
        $this->model = $model;
    }

    public function setLangDe(){
        setcookie ('langId', 'de');
        $GLOBALS['langId'] = 'de';
    }
    public function setLangEn(){
        setcookie ('langId', 'en');
        $GLOBALS['langId'] = 'en';
    }
    public function registerUser(){
        if (
            !isset($_POST['username']) || empty($_POST['username']) ||
            !isset($_POST['firstname']) || empty($_POST['firstname']) ||
            !isset($_POST['lastname']) || empty($_POST['lastname']) ||
            !isset($_POST['address']) || empty($_POST['address']) ||
            !isset($_POST['zip']) || empty($_POST['zip']) ||
            !isset($_POST['city']) || empty($_POST['city']) ||
            !isset($_POST['country']) || empty($_POST['country']) ||
            !isset($_POST["email"]) || empty($_POST["email"]) ||
            !isset($_POST['password']) || empty($_POST['password'])
        ){
            header("Location: ?pageId=Register");
            exit();
        }

        $passwordSalt = bin2hex(openssl_random_pseudo_bytes(8));
        $passwordSaltedHash = hash('ripemd128', strip_tags($_POST['password']).$passwordSalt);

        $this->model->createUser(strip_tags($_POST['username']),$passwordSaltedHash,strip_tags($_POST['firstname']),strip_tags($_POST['lastname']),strip_tags($_POST['address']),strip_tags($_POST['zip']),strip_tags($_POST['city']),strip_tags($_POST['country']),$passwordSalt,strip_tags($_POST["email"]));
    }
    public function loginUser() {
        if(!isset($_POST['username'])){return;}

        $user = $this->model->getUserByUsername(strip_tags($_POST['username']));
        $passwordSaltedHash = hash('ripemd128', strip_tags($_POST['password']).$user["user_salt"]);

        if ($passwordSaltedHash == $user["user_password"]){
            $_SESSION['userId'] = $user["user_id"];
            $_SESSION['username'] = $user["user_username"];
            $_COOKIE['username'] = $user["user_username"];
        }
        else
        {
            header("Location: ?pageId=Login");
            exit();
        }
    }
    public function logoutUser(){
        $_SESSION = array();
        setcookie(session_name(),'',1);
        session_destroy();
    }

    public function quickAddItem(){
        $_SESSION['shoppingCart'][] = array("articleId" => strip_tags($_GET['articleId']),"quantity"=>1,"addonIds" => array());
    }

    public function quickRemoveItem(){
        if(isset($_SESSION['shoppingCart'][strip_tags($_GET["cartId"])])){
            unset($_SESSION['shoppingCart'][strip_tags($_GET["cartId"])]);
        }
    }

    public function buyItem(){
        $product = $this->model->getProductById(strip_tags($_POST["productId"]));
        $productAddons = $this->model->getProductAddonsByProductId(strip_tags($_POST["productId"]));
        $addons = array();
        foreach ($productAddons as $productAddon) {
            if (strip_tags($_POST["addon_".$productAddon["productAddon_id"]]) != 0){
                $addons[] = array("addon_id"=>$productAddon["productAddon_id"], "quantity" => strip_tags($_POST["addon_".$productAddon["productAddon_id"]]));
            }
        }
        $_SESSION['shoppingCart'][] = array("articleId" =>strip_tags($_POST['productId']),"quantity"=>strip_tags($_POST['quantity']),"addonIds" => $addons);
    }

    public function checkout() {
        print(strip_tags($_POST["paymentMethod"]));
        $this->model->addProductOrder($_SESSION["userId"], serialize($_SESSION["shoppingCart"]), date("d.m.y"), $_SESSION["order_shipment"], $_SESSION["order_present"], strip_tags($_POST["paymentMethod"]));
        $_SESSION["shoppingCart"] = array();

        $mailMessage = "New Order Received!";
        $mailMessage = wordwrap($mailMessage, 70);

        mail($_SESSION["order_email"], 'Order Confirmation', $mailMessage);
        mail('shop@example.com', 'New Order', $mailMessage);
    }

    public function saveCheckout(){
        if (!isset($_POST["shipment"])){
            header("Location: ?pageId=Checkout");
            exit();
        }
        if (isset($_POST["present"])){
            $present = true;
        }else {
            $present = false;
        }
        $_SESSION["order_shipment"] = strip_tags($_POST["shipment"]);
        $_SESSION["order_present"] = $present;
        $_SESSION["order_email"] = strip_tags($_POST["email"]);
    }
}