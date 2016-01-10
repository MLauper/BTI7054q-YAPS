<?php

class Model
{
    private $db;

    public function __construct()
    {
        require_once("./db/con_settings.php");
        $this->db = new mysqli($db_host, $db_user, $db_pw, $db_name);
        if ($this->db->connect_errno > 0) {
            die("Unable to connect to database [" . $this->db->connect_error . "]");
        }
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function getCategoryList()
    {
        // Public Data, No Input
        if (!$result = $this->db->query("SELECT * FROM categories")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }

        $categoryList = [];
        while ($category = $result->fetch_assoc()) {
            $categoryList[] = $category;
        }

        $result->close();

        return $categoryList;
    }

    public function getProductList()
    {
        // Public Data, No Input
        if (!$result = $this->db->query("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id;")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }

        $productList = [];
        while ($product = $result->fetch_assoc()) {
            $productList[] = $product;
        }

        $result->close();

        return $productList;
    }

    public function getProductByKeyword($keyword)
    {
        // Public Data, input
        $keyword = "%$keyword%";
        if (!$stmt = $this->db->prepare("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id WHERE product_name_en LIKE ?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('s', $keyword)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        // insecure:
        /*if(!$result = $this->db->query("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id WHERE product_name_en LIKE \"%".$keyword."%\";")){
            die("Thee was an error running the query [".$this->db->error."]");
        }*/

        $productList = [];
        while ($product = $result->fetch_assoc()) {
            $productList[] = $product;
        }

        $result->close();

        return $productList;
    }

    public function getProductsWithSpecialPrice()
    {
        // Public Data, No Input
        if (!$result = $this->db->query("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id WHERE products.product_special_price >= 0;")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }

        $productList = [];
        while ($product = $result->fetch_assoc()) {
            $productList[] = $product;
        }

        $result->close();

        return $productList;
    }

    public function getProductListByCategory($category)
    {
        // Public Data, No Input
        if (!$result = $this->db->query("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id WHERE categories.category_name_en=\"" . $category . "\";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }

        $productList = [];
        while ($product = $result->fetch_assoc()) {
            $productList[] = $product;
        }

        $result->close();

        return $productList;
    }

    public function getProductById($articleId)
    {
        // Public Data, input
        if (!$stmt = $this->db->prepare("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id  WHERE product_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('i', $articleId)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if(!$result = $this->db->query("SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.category_id  WHERE product_id=".$articleId.";")){
            die("Thee was an error running the query [".$this->db->error."]");
        }*/

        $product = $result->fetch_assoc();

        $result->close();

        return $product;
    }

    public function getUserById($userId)
    {
        // Private Data, Input
        if (!isset($_SESSION["userId"]) || $_SESSION["userId"] != $userId) {
            exit();
        }
        if (!$stmt = $this->db->prepare("SELECT * FROM users WHERE user_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('i', $userId)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if(!$result = $this->db->query("SELECT * FROM users WHERE user_id=".$userId.";")){
            die("Thee was an error running the query [".$this->db->error."]");
        }*/

        $user = $result->fetch_assoc();

        $result->close();

        return $user;
    }

    public function getProductAddonsByProductId($articleId)
    {
        // Public Data, Input
        if (!$stmt = $this->db->prepare("SELECT * FROM productAddons LEFT JOIN productaddons_products ON productaddons.productAddon_id = productaddons_products.productAddon_id LEFT JOIN products ON productaddons_products.product_id = products.product_id  WHERE products.product_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('i', $articleId)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("SELECT * FROM productAddons LEFT JOIN productaddons_products ON productaddons.productAddon_id = productaddons_products.productAddon_id LEFT JOIN products ON productaddons_products.product_id = products.product_id  WHERE products.product_id=" . $articleId . ";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $productAddons = [];
        while ($productAddon = $result->fetch_assoc()) {
            $productAddons[] = $productAddon;
        }

        $result->close();

        return $productAddons;
    }

    public function getAddonById($addon_id)
    {
        // Public Data, Input
        if (!$stmt = $this->db->prepare("SELECT * FROM productAddons WHERE productAddons.productAddon_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('i', $addon_id)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("SELECT * FROM productAddons WHERE productAddons.productAddon_id=" . $addon_id . ";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $productAddon = $result->fetch_assoc();

        $result->close();

        return $productAddon;
    }

    public function createUser($username, $password, $firstname, $lastname, $address, $zip, $city, $country, $salt, $email)
    {
        // Private Data, Input
        if (!$stmt = $this->db->prepare("INSERT INTO `libvirtshop`.`users` (user_username, user_password,  user_firstname, user_lastname, user_address, user_zip, user_city, user_country, user_salt, user_email)
    VALUE
    (?,?,?,?,?,?,?,?,?,?);")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('sssssissss', $username, $password, $firstname, $lastname, $address, $zip, $city, $country, $salt, $email)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("INSERT INTO `libvirtshop`.`users` (user_username, user_password,  user_firstname, user_lastname, user_address, user_zip, user_city, user_country, user_salt, user_email)
    VALUE
    (\"$username\", \"$password\", \"$firstname\", \"$lastname\", \"$address\", \"$zip\", \"$city\", \"$country\", \"$salt\", \"$email\");")
        ) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        return;
    }

    public function getUserByUsername($username)
    {
        // Private Data, Input
        if (!$stmt = $this->db->prepare("SELECT * FROM users WHERE user_username=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('s', $username)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("SELECT * FROM users WHERE user_username=\"$username\";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $user = $result->fetch_assoc();

        $result->close();

        return $user;
    }

    public function addProductOrder($userId, $order, $date, $shipment, $present, $payment)
    {
        if (!isset($_SESSION["userId"]) || $_SESSION["userId"] != $userId) {
            exit();
        }
        // Private Data, Input
        if (!$stmt = $this->db->prepare("INSERT INTO orders (user_id, `order`, order_date, order_shipment, order_present, order_payment) VALUE (?, ?, ?, ?, ?, ?);")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('isssss', $userId, $order, $date, $shipment, $present, $payment)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("INSERT INTO orders (user_id, `order`, order_date, order_shipment, order_present, order_payment) VALUE ($userId, \"$order\", \"$date\", \"$shipment\", \"$present\", \"$payment\");")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $order = $this->db->insert_id;

        return $order;
    }

    public function getOrdersByUserId($userId)
    {
        if (!isset($_SESSION["userId"]) || $_SESSION["userId"] != $userId) {
            exit();
        }
        // Private Data, Input
        if (!$stmt = $this->db->prepare("SELECT * FROM orders WHERE user_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('i', $userId)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("SELECT * FROM orders WHERE user_id=" . $userId . ";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $orders = [];
        while ($order = $result->fetch_assoc()) {
            $orders[] = $order;
        }

        $result->close();

        return $orders;
    }

    public function getOrdersByOrderId($orderId)
    {
        if (!isset($_SESSION["userId"])) {
            exit();
        } else {
            $userId = $_SESSION["userId"];
        }
        // Private Data, Input
        if (!$stmt = $this->db->prepare("SELECT * FROM orders WHERE order_id=? AND user_id=?;")) {
            die("Thee was an error preparing the query [" . $this->db->error . "]");
        }
        if (!$stmt->bind_param('ii', $orderId, $userId)) {
            die("Thee was an error binding the parameters [" . $this->db->error . "]");
        }
        if (!$stmt->execute()) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }
        $result = $stmt->get_result();
        //Insecure:
        /*if (!$result = $this->db->query("SELECT * FROM orders WHERE order_id=" . $orderId . ";")) {
            die("Thee was an error running the query [" . $this->db->error . "]");
        }*/

        $order = $result->fetch_assoc();

        $result->close();

        return $order;
    }
}