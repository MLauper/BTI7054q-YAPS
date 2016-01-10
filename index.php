<?php
require_once('./controller/Controllers.php');
require_once('./view/Views.php');
require_once('./model/Models.php');

session_start();

$pageId = isset($_GET["pageId"]) ? strip_tags($_GET["pageId"]) : "Shop";
$langId = isset($_COOKIE["langId"]) ? strip_tags($_COOKIE["langId"]) : "en";

$model = new Model();
$controller = new Controller($model);
if (isset($_GET['action'])){
    $controller->{strip_tags($_GET['action'])}();
}
if (isset($_GET["keyword"])){
    $pageId="ShopSearchView";
}
switch($pageId){
    case "Shop":
        $category = isset($_GET["category"]) ? strip_tags($_GET["category"]) : "Virtual Machines";
        $view = new ShopView($model, $category);
        break;
    case "ShopDetail":
        $articleId = isset($_GET["articleId"]) ? strip_tags($_GET["articleId"]) : -1;
        $view = new ShopDetailsView($model, $articleId);
        break;
    case "Account":
        $view = new AccountView($model);
        break;
    case "Register":
        $view = new RegisterView($model);
        break;
    case "Login":
        $view = new LoginView($model);
        break;
    case "ShoppingCart":
        $view = new ShoppingCartView($model);
        break;
    case "Checkout":
        $view = new CheckoutView($model);
        break;
    case "orderDetails":
        $view = new OrderDetailsView($model);
        break;
    case "Payment":
        $view = new PaymentView($model);
        break;
    case "ShopSearchView":
        $keyword = isset($_GET["keyword"]) ? strip_tags($_GET["keyword"]) : "";
        $view = new ShopSearchView($model, $keyword);
        break;
    default:
        $view = new invalidPageIdView($pageId);
}

$view->render();