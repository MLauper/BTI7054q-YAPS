<?php
function t($key, $lang)
{
    $texts = array(
        'page' => array(
            'en' => 'Page',
            'de' => 'Seite'
        ),
        'buyNow' => array(
            'en' => 'Add to Shopping Cart',
            'de' => 'Einkaufen'
        ),
        'specialTitle' => array(
            'en' => 'SPECIAL PRICE: ',
            'de' => 'SPEZIALANGEBOT: '
        ),
        'price' => array(
            'en' => 'Price: CHF ',
            'de' => 'Preis: CHF '
        ),
        'instead' => array(
            'en' => ' instead of CHF ',
            'de' => ' anstelle von CHF '
        ),
        'shop' => array(
            'en' => 'Shop',
            'de' => 'Shop'
        ),
        'account' => array(
            'en' => 'Account',
            'de' => 'Benutzer'
        ),
        'register' => array(
            'en' => 'Register Now',
            'de' => 'Jetzt Registrieren'
        ),
        'cart' => array(
            'en' => 'Shopping Cart',
            'de' => 'Einkaufswagen'
        ),
        'productDetails' => array(
            'en' => 'Prduct Details - ',
            'de' => 'Produktebeschreibung - '
        ),
        'numberOfItems' => array(
            'en' => 'Number of items to buy: ',
            'de' => 'Anzahl Einheiten: '
        ),
        'unknownProduct' => array(
            'en' => 'Unknown Product',
            'de' => 'Unbekanntes Produkt'
        ),
        'unknownProductDescription' => array(
            'en' => 'The requested product currently not available.',
            'de' => 'Das ausgewählte Produkt ist im Moment leider nicht verfügbar.'
        ),
        'invalidPageId' => array(
            'en' => 'Invalid Page ID',
            'de' => 'Ungueltige Page ID'
        ),
        'invalidPageIdDescription' => array(
            'en' => 'The page ID you requested does not exist',
            'de' => 'Die aufgerufene Seiten ID existiert nicht'
        ),
        'username' => array(
            'en' => 'Username: ',
            'de' => 'Benutzername: '
        ),
        'password' => array(
            'en' => 'Password: ',
            'de' => 'Passwort: '
        ),
        'firstname' => array(
            'en' => 'Fist Name: ',
            'de' => 'Vorname: '
        ),
        'lastname' => array(
            'en' => 'Last Name: ',
            'de' => 'Nachname: '
        ),
        'street' => array(
            'en' => 'Street and Number: ',
            'de' => 'Strasse und Nummer: '
        ),
        'zip' => array(
            'en' => 'Zip code: ',
            'de' => 'PLZ: '
        ),
        'city' => array(
            'en' => 'City: ',
            'de' => 'Ort: '
        ),
        'country' => array(
            'en' => 'Country: ',
            'de' => 'Land: '
        ),
        'login' => array(
            'en' => 'Login',
            'de' => 'Anmelden'
        ),
        'switzerland' => array(
            'en' => 'Switzerland',
            'de' => 'Schweiz'
        ),
        'germany' => array(
            'en' => 'Germany',
            'de' => 'Deutschland'
        ),
        'logout' => array(
            'en' => 'Logout',
            'de' => 'Abmelden'
        ),
        'articleId' => array(
            'en' => 'No. ',
            'de' => 'No. '
        ),
        'articleDesc' => array(
            'en' => 'Article Description',
            'de' => 'Aritkel Beschreibung'
        ),
        'price' => array(
            'en' => 'Price',
            'de' => 'Preis'
        ),
        'remove' => array(
            'en' => 'Remove',
            'de' => 'Entfernen'
        ),
        'quantity' => array(
            'en' => 'Quantity: ',
            'de' => 'Anzahl: '
        ),
        'pricePerUnit' => array(
            'en' => 'Price Per Unit: CHF ',
            'de' => 'Preis pro Stück: CHF '
        ),
        'total' => array(
            'en' => 'Total:',
            'de' => 'Total:'
        ),
        'checkout' => array(
            'en' => 'Checkout',
            'de' => 'Einkauf abschliessen'
        ),
        'currentOrders' => array(
            'en' => 'Current Orders',
            'de' => 'Aktuelle Aufträge'
        ),
        'accountDetails' => array(
            'en' => 'Account Details',
            'de' => 'Benutzerinformationen'
        ),
        'update' => array(
            'en' => 'Update',
            'de' => 'Aktualisieren'
        ),
        'order' => array(
            'en' => 'Order No: ',
            'de' => 'Auftrag Nummer '
        ),
        'userId' => array(
            'en' => 'User ID:',
            'de' => 'Benutzer ID:'
        ),
        'shipment' => array(
            'en' => 'Shipment:',
            'de' => 'Lieferung:'
        ),
        'standardShiping' => array(
            'en' => 'Standard',
            'de' => 'Standard'
        ),
        'fastShiping' => array(
            'en' => 'Fast',
            'de' => 'Schnell'
        ),
        'present' => array(
            'en' => 'Present ',
            'de' => 'Geschenk '
        ),
        'orderDate' => array(
            'en' => 'Order Date: ',
            'de' => 'Bestelldatum: '
        ),
        'orderShipment' => array(
            'en' => 'Shipment: ',
            'de' => 'Lieferung: '
        ),
        'orderPresent' => array(
            'en' => 'Present: ',
            'de' => 'Geschenk: '
        ),
        'yes' => array(
            'en' => 'Yes',
            'de' => 'Ja'
        ),
        'no' => array(
            'en' => 'No',
            'de' => 'Nein'
        ),
        'confirmation' => array(
            'en' => 'Confirmation',
            'de' => 'Bestaetigung'
        ),
        'confirmationDescription' => array(
            'en' => 'You are about to buy the following items.',
            'de' => 'Sie sind dabei die folgenden Positionen zu bestellen.'
        ),
        'next' => array(
            'en' => 'Next',
            'de' => 'Weiter'
        ),
        'confirm' => array(
            'en' => 'Confirm',
            'de' => 'Bestaetigen'
        ),
        'cancel' => array(
            'en' => 'Cancel',
            'de' => 'Abbrechen'
        ),
        'confirmOrder' => array(
            'en' => 'Order Confirmation',
            'de' => 'Bestellbestaetigung'
        ),
        'confirmOrderDescription' => array(
            'en' => 'You confirm your order by clicking confirm.',
            'de' => 'Sie bestaetigen ihre Bestellung durch klich auf Bestaetigen.'
        ),
        'paymentMethod' => array(
            'en' => 'Payment Method: ',
            'de' => 'Bezahlmethode: '
        ),
        'creditCard' => array(
            'en' => 'Credit Card',
            'de' => 'Kreditkarte'
        ),
        'bill' => array(
            'en' => 'Bill',
            'de' => 'Rechnung'
        ),
        'creditCardNumber' => array(
            'en' => 'Credit Card Number',
            'de' => 'Kreditkarten Nummer'
        ),
        'email' => array(
            'en' => 'E-Mail: ',
            'de' => 'E-Mail: '
        ),
        'searchSomething' => array(
            'en' => 'Search Something...',
            'de' => 'Suche etwas...'
        )

    );
    return isset($texts[$key][$lang]) ? $texts[$key][$lang] : "[$key]";
}

class Header
{
    public static function render()
    {
        echo "<div class='header'>";
        echo "<img class=\"logo\" src=\"./images/Logo.png\">";
        echo "<span class='langSelector'>
                    <a href=\"?action=setLangDe\">Deutsch</a>
                    <br />
                    <a href=\"?action=setLangEn\">English</a>
                </span>";
        echo "</div>";
    }
}

class Menu
{
    private $langId;
    private $activeMenu;

    public function __construct($activeMenu)
    {
        $this->langId = $GLOBALS["langId"];
        $this->activeMenu = $activeMenu;
    }

    public function render()
    {
        $classShop = "";
        $classAccount = "";
        $classShoppingCart = "";
        $classLogin = "";
        $classRegister = "";
        switch ($this->activeMenu) {
            case 'Shop':
                $classShop = "activeMenu";
                break;
            case 'Account':
                $classAccount = "activeMenu";
                break;
            case 'ShoppingCart':
                $classShoppingCart = "activeMenu";
                break;
            case 'Register':
                $classRegister = "activeMenu";
                break;
            case 'Login':
                $classLogin = "activeMenu";
                break;
        }

        echo "
        <div class=\"menu\">
            <span class=\"leftmenu\">
                <a href=\"?pageId=Shop\" class=\"$classShop\">" . t('shop', $this->langId) . "</a>
            </span>
            <span class=\"rightmenu\">";
        if (isset($_SESSION['userId'])) {
            echo "<a href=\"?pageId=Account\" class=\"$classAccount\">" . $_SESSION['username'] . "</a><span> | </span>";
            echo "<a href=\"?pageId=Shop&action=logoutUser\">" . t('logout', $this->langId) . "</a>";
        } else {
            echo "<a href=\"?pageId=Register\" class=\"$classRegister\">" . t('register', $this->langId) . "</a><span> | </span>";
            echo "<a href=\"?pageId=Login\" class=\"$classLogin\">" . t('login', $this->langId) . "</a>";
        }
        echo "<span> | </span>
                <a href=\"?pageId=ShoppingCart\" class=\"$classShoppingCart\">" . t('cart', $this->langId);
        if (isset($_SESSION['shoppingCart']) && count($_SESSION['shoppingCart']) > 0) {
            echo " (" . count($_SESSION['shoppingCart']) . ")";
        }
        echo "</a>
            </span>
        </div>";
    }
}

class CategoryMenu
{
    private $model;
    private $activeCategory;
    private $langId;

    public function __construct(Model $model, $activeCategory)
    {
        $this->model = $model;
        $this->activeCategory = $activeCategory;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        echo "
        <div class=\"categorySelector\">";
        $del = "";
        foreach ($this->model->getCategoryList() as $category) {
            echo $del;
            if ($this->activeCategory == $category["category_name_en"]) {
                echo "<a class=\"activeCategory\" href=\"?pageId=Shop&category=" . $category["category_name_en"] . "\">" . $category["category_name_$this->langId"] . "</a>";
            } else {
                echo "<a href=\"?pageId=Shop&category=" . $category["category_name_en"] . "\">" . $category["category_name_$this->langId"] . "</a>";
            }
            $del = " | ";
        }

        echo "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
<script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
<style>
    .ui-autocomplete-loading {
        background: white url(\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/images/ui-anim_basic_16x16.gif\") right center no-repeat;
    }
</style>
<script>
    $(function() {
        $( \"#searchField\" ).autocomplete({
            source: \"search.php\",
            minLength: 1,
            select: function( event, ui ) {
                console.log(event);
                console.log(ui);
                url = \"./?keyword=\";
                url = url.concat(ui.item.label);
                window.location.href = url;
            }
        });
    });
</script>

";

        echo "<form id='searchForm' action='./?pageId=ShopSearchView' method='get'><input id='searchField' name='keyword' class='searchBox' value='";
        if (isset($_GET["keyword"])){
            echo strip_tags($_GET["keyword"]);
        } else {
            echo t('searchSomething',$this->langId);
        }
        echo "'></form>";
        echo "</div>";

    }
}

class ShopView
{
    private $model;
    private $category;
    private $langId;

    public function __construct(Model $model, $category)
    {
        $this->model = $model;
        $this->category = $category;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu('Shop', $this->langId);
        $categoryMenu = new CategoryMenu($this->model, $this->category, $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
                       <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
            <script>
  $(document).ready(function(){
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
  });
</script>

        </head>";

        echo "<body>";

        $header->render();
        $menu->render();
        $categoryMenu->render();

        foreach ($this->model->getProductsWithSpecialPrice() as $product) {
            echo "
            <div class=\"article specialArticle\">
                     <img src=\"./images/vm.png\" class='img-zoom' height=\"100\" width=\"100\">
                     <a class=\"BuyButton\" href='?pageId=Shop&category=" . $this->category . "&action=quickAddItem&articleId=" . $product["product_id"] . "'>" . t('buyNow', $this->langId) . "</a>
                     <a href=\"./?pageId=ShopDetail&articleId=" . $product["product_id"] . "\"><h3>" . t('specialTitle', $this->langId) . $product["product_name_$this->langId"] . "</h3></a>
                     <p>" . $product["product_description_$this->langId"] . "</p>
                     <p>" . t('price', $this->langId) . number_format($product["product_special_price"], 2, '.', '') . t('instead', $this->langId) . number_format($product["product_price"], 2, '.', '') . "</p>
            </div>";
        }

        foreach ($this->model->getProductListByCategory($this->category) as $product) {
            echo "
            <div class=\"article\">
                     <img src=\"./images/vm.png\" class='img-zoom' height=\"100\" width=\"100\">
                     <a class=\"BuyButton\" href='?pageId=Shop&category=" . $this->category . "&action=quickAddItem&articleId=" . $product["product_id"] . "'>" . t('buyNow', $this->langId) . "</a>
                     <a href=\"./?pageId=ShopDetail&articleId=" . $product["product_id"] . "\"><h3>" . $product["product_name_en"] . "</h3></a>
                     <p>" . $product["product_description_$this->langId"] . "</p>
                     <p>" . t('price', $this->langId) . number_format($product["product_price"], 2, '.', '') . "</p>
            </div>";
        }


        echo "
            </body>
        </html>";

    }
}

class ShopSearchView
{
    private $model;
    private $category;
    private $keyword;
    private $langId;

    public function __construct(Model $model, $keyword)
    {
        $this->model = $model;
        $this->category = "";
        $this->keyword = $keyword;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu('Shop', $this->langId);
        $categoryMenu = new CategoryMenu($this->model, $this->category, $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
                       <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
                       <script src=\"../static/scripts.js\"></script>
            <script>
  $(document).ready(function(){
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
  });
</script>
</script>
        </head>";

        echo "<body onload='getProducts()'>";

        $header->render();
        $menu->render();
        $categoryMenu->render();

        foreach ($this->model->getProductsWithSpecialPrice() as $product) {
            echo "
            <div class=\"article specialArticle\">
                     <img src=\"./images/vm.png\" class='img-zoom' height=\"100\" width=\"100\">
                     <a class=\"BuyButton\" href='?pageId=Shop&category=" . $this->category . "&action=quickAddItem&articleId=" . $product["product_id"] . "'>" . t('buyNow', $this->langId) . "</a>
                     <a href=\"./?pageId=ShopDetail&articleId=" . $product["product_id"] . "\"><h3>" . t('specialTitle', $this->langId) . $product["product_name_$this->langId"] . "</h3></a>
                     <p>" . $product["product_description_$this->langId"] . "</p>
                     <p>" . t('price', $this->langId) . number_format($product["product_special_price"], 2, '.', '') . t('instead', $this->langId) . number_format($product["product_price"], 2, '.', '') . "</p>
            </div>";
        }

        echo "
            <script>
                 lang = '" . $this->langId . "';
                 buyNow = '" . t('buyNow', $this->langId) . "';
                 keyword = '";
        if (isset($_GET["keyword"])){
            echo strip_tags($_GET["keyword"]);
        }
        echo "';";
        echo "</script>";

        echo "<div id='mainArticles' class=\"article\"></div>";

        echo "
            </body>
        </html>";

    }
}

class ShoppingCartView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu('ShoppingCart', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        echo "<table class='shoppingCartTable'>
  <colgroup>
       <col span=\"1\" style=\"width: 5%;\">
       <col span=\"1\" style=\"width: 80%;\">
       <col span=\"1\" style=\"width: 15%;\">
    </colgroup>
    <tr>
        <th>" . t('articleId', $this->langId) . "</th>
        <th>" . t('articleDesc', $this->langId) . "</th>
        <th>" . t('price', $this->langId) . "</th>
    </tr>";

        if (!empty($_SESSION["shoppingCart"])) {
            $totalPrice = 0;
            foreach ($_SESSION["shoppingCart"] as $cartId => $article) {
                $product = $this->model->getProductById($article["articleId"]);
                $price = $product["product_price"];
                echo "
                <tr>";
                echo "<td>";
                echo $product["product_id"];
                echo "</td>";

                echo "<td><b>";
                echo $product["product_name_$this->langId"];
                echo " (" . t('quantity', $this->langId) . $article["quantity"];
                echo "; " . t('pricePerUnit', $this->langId) . number_format($product["product_price"], 2, '.', '') . ")";
                echo "</b><br />";
                echo "<div class='shoppingCartTableRemove'><a href=\"?pageId=ShoppingCart&action=quickRemoveItem&cartId=" . $cartId . "\">" . t('remove', $this->langId) . "</a></div>";
                echo $product["product_description_$this->langId"];
                if (!empty($article["addonIds"])) {
                    foreach ($article["addonIds"] as $addonEntry) {
                        $addon = $this->model->getAddonById($addonEntry["addon_id"]);
                        echo "<div class=\"productAddonMin\">";
                        echo $addon["productAddon_description_" . $this->langId];
                        echo " (" . t('quantity', $this->langId) . $addonEntry["quantity"];
                        echo "; " . t('pricePerUnit', $this->langId) . number_format($addon["productAddon_price"], 2, '.', '') . ")";
                        echo "</div>";

                        $price += $addonEntry["quantity"] * $addon["productAddon_price"];
                    }
                }
                echo "</td>";

                echo "<td>";
                $price *= $article["quantity"];
                echo "CHF " . number_format($price, 2, '.', '');
                $totalPrice += $price;
                echo "</td>";
                echo "</tr>";
            }
            echo "<tr><td></td><td>" . t('total', $this->langId) . "</td><td>CHF " . number_format($totalPrice, 2, '.', '') . "</td>";
        }
        echo "</table>";

        echo "<div class=\"article\"><a class=\"BuyButton\" href='?pageId=Checkout'>" . t('checkout', $this->langId) . "</a></div>";

        echo "
            </body>
        </html>";

    }
}

class OrderDetailsView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {

        if (!isset($_SESSION["userId"])) {
            header("Location: ?pageId=Login");
            exit();
        }

        $header = new Header();
        $menu = new Menu('ShoppingCart', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        $user = $this->model->getUserById($_SESSION["userId"]);

        echo "<h1>" . t('order', $this->langId) . strip_tags($_GET["order"]) . "</h1>";

        $orderDB = $this->model->getOrdersByOrderId(strip_tags($_GET["order"]));
        $order = unserialize($orderDB["order"]);

        echo "<p>" . t('orderDate', $this->langId) . $orderDB["order_date"] . "</p>";
        echo "<p>" . t('paymentMethod', $this->langId);
        if ($orderDB["order_payment"] == "bill") {
            echo t('bill', $this->langId);
        } elseif ($orderDB["order_payment"] == "creditCard") {
            echo t('creditCard', $this->langId);
        }
        echo "</p>";
        echo "<p>" . t('orderShipment', $this->langId) . $orderDB["order_shipment"] . "</p>";
        echo "<p>" . t('orderPresent', $this->langId);
        if ($orderDB["order_present"]) {
            echo t('yes', $this->langId);
        } else {
            echo t('no', $this->langId);
        }
        echo "</p>";

        echo "<table class='shoppingCartTable'>
  <colgroup>
       <col span=\"1\" style=\"width: 5%;\">
       <col span=\"1\" style=\"width: 80%;\">
       <col span=\"1\" style=\"width: 15%;\">
    </colgroup>
    <tr>
        <th>" . t('articleId', $this->langId) . "</th>
        <th>" . t('articleDesc', $this->langId) . "</th>
        <th>" . t('price', $this->langId) . "</th>
    </tr>";

        if (!empty($order)) {
            $totalPrice = 0;
            foreach ($order as $cartId => $article) {
                $product = $this->model->getProductById($article["articleId"]);
                $price = $product["product_price"];
                echo "
                <tr>";
                echo "<td>";
                echo $product["product_id"];
                echo "</td>";

                echo "<td><b>";
                echo $product["product_name_$this->langId"];
                echo " (" . t('quantity', $this->langId) . $article["quantity"];
                echo "; " . t('pricePerUnit', $this->langId) . number_format($product["product_price"], 2, '.', '') . ")";
                echo "</b><br />";
                echo $product["product_description_$this->langId"];
                if (!empty($article["addonIds"])) {
                    foreach ($article["addonIds"] as $addonEntry) {
                        $addon = $this->model->getAddonById($addonEntry["addon_id"]);
                        echo "<div class=\"productAddonMin\">";
                        echo $addon["productAddon_description_" . $this->langId];
                        echo " (" . t('quantity', $this->langId) . $addonEntry["quantity"];
                        echo "; " . t('pricePerUnit', $this->langId) . number_format($addon["productAddon_price"], 2, '.', '') . ")";
                        echo "</div>";

                        $price += $addonEntry["quantity"] * $addon["productAddon_price"];
                    }
                }
                echo "</td>";

                echo "<td>";
                $price *= $article["quantity"];
                echo "CHF " . number_format($price, 2, '.', '');
                $totalPrice += $price;
                echo "</td>";
                echo "</tr>";
            }
            echo "<tr><td></td><td>" . t('total', $this->langId) . "</td><td>CHF " . number_format($totalPrice, 2, '.', '') . "</td>";
        }
        echo "</table>";


        echo "
            </body>
        </html>";

    }
}

class ShopDetailsView
{
    private $model;
    private $articleId;
    private $langId;

    public function __construct(Model $model, $articleId)
    {
        $this->model = $model;
        $this->articleId = $articleId;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {

        $product = $this->model->getProductById($this->articleId);
        $productAddons = $this->model->getProductAddonsByProductId($this->articleId);
        $header = new Header();
        $menu = new Menu('Shop', $this->langId);
        $categoryMenu = new CategoryMenu($this->model, $product["category_name_en"], $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();
        $categoryMenu->render();

        if ($this->articleId == -1 || empty($product)) {
            echo "<h1>" . t('unknownProduct', $this->langId) . "</h1>
                <p>" . t('unknownProductDescription', $this->langId) . "</p>";
            echo "
                </body>
            </html>";
            return;
        }

        echo "
            <div class=\"articleDetails\">
                <h1>" . t('productDetails', $this->langId) . $product["product_name_$this->langId"] . "</h1>
                <p>" . $product["product_description_$this->langId"] . "</p>";

        echo "<form method='post' action=\"?pageId=Shop&category=" . $product['category_name_en'] . "&action=buyItem\">";
        if (!empty($productAddons)) {
            foreach ($productAddons as $productAddon) {
                echo "<div class=\"productAddon\">";
                echo "<span class=\"productAddon\">Addon: " . $productAddon["productAddon_description_$this->langId"] . "</span>";
                echo "<input class=\"productAddonForm\" type=\"number\" value=\"0\" name=\"addon_" . $productAddon["productAddon_id"] . "\">";
                echo "<br /></div>";
            }
        }

        echo "<input type='hidden' name=productId value=" . $product["product_id"] . ">";
        echo "<div class=\"productAddon\">";
        echo "<span class=\"productAddon\">" . t('numberOfItems', $this->langId) . "</span>";
        echo "<input class=\"productAddonForm\" type=\"number\" value=\"1\" name=\"quantity\">";
        echo "<br /></div>";


        echo "<input type=\"submit\" class=\"BuyButton\" value=\"" . t('buyNow', $this->langId) . "\">
            </form>
            </div>";


        echo "
            </body>
        </html>";

    }
}

class RegisterView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu('Register', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
             <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
             <script src=\"../static/scripts.js\"></script>
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        echo "<h1>" . t('register', $this->langId) . "</h1>";

        echo "
    <form ng-app=\"registrationForm\" ng-controller='validationController' name='registrationForm' novalidate class='registrationForm' action='./?pageId=Account&action=registerUser' method='post'>
        <p class='registrationFormDescription'>" . t('username', $this->langId) . "<input ng-model=\"user.name\" required type='text' class='registrationFormField' name='username' /></p>
        <p class='registrationFormDescription'>" . t('password', $this->langId) . "<input ng-model=\"user.password\" required type='password' ng-minlength='7' class='registrationFormField' name='password' /> </p>
        <p class='registrationFormDescription'>" . t('email', $this->langId) . "<input ng-model=\"user.email\" required type='email' class='registrationFormField' name='email' /> </p>
        <p class='registrationFormDescription'>" . t('firstname', $this->langId) . "<input ng-model=\"user.firstname\" required type='text' class='registrationFormField' name='firstname' /> </p>
        <p class='registrationFormDescription'>" . t('lastname', $this->langId) . "<input ng-model=\"user.lastname\" required type='text' class='registrationFormField' name='lastname' /> </p>
        <p class='registrationFormDescription'>" . t('street', $this->langId) . "<input ng-model=\"user.street\" required type='text' class='registrationFormField' name='address' /> </p>
        <p class='registrationFormDescription'>" . t('zip', $this->langId) . "<input ng-model=\"user.zip\" ng-minlength='4' ng-maxlength='4' required type='number'  class='registrationFormField' name='zip' /> </p>
        <p class='registrationFormDescription'>" . t('city', $this->langId) . "<input ng-model=\"user.city\" required type='text' class='registrationFormField' name='city' /> </p>
        <p class='registrationFormDescription'>" . t('country', $this->langId) . "<select ng-model=\"user.country\" required class='registrationFormField' name='country' >
            <option value='ch'>" . t('switzerland', $this->langId) . "</option><option value='de'>" . t('germany', $this->langId) . "</option>
        </p><br />
        <input type=\"submit\" class='BuyButton registrationFormField' value=\"" . t('register', $this->langId) . "\"/>
    </for   m>
";


        echo "
            </body>
        </html>";

    }
}

class CheckoutView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {

        if (!isset($_SESSION["userId"])) {
            header("Location: ?pageId=Login");
            exit();
        }

        $header = new Header();
        $menu = new Menu('Register', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        echo "<h1>" . t('checkout', $this->langId) . "</h1>";

        $totalPrice = 0;
        if (!empty($_SESSION["shoppingCart"])) {
            foreach ($_SESSION["shoppingCart"] as $cartId => $article) {
                $product = $this->model->getProductById($article["articleId"]);
                $price = $product["product_price"];
                if (!empty($article["addonIds"])) {
                    foreach ($article["addonIds"] as $addonEntry) {
                        $addon = $this->model->getAddonById($addonEntry["addon_id"]);
                        $price += $addonEntry["quantity"] * $addon["productAddon_price"];
                    }
                }
                $price *= $article["quantity"];
                $totalPrice += $price;
            }
        }

        $user = $this->model->getUserById($_SESSION["userId"]);

        echo "<form class='checkoutForm' action='./?pageId=Payment&action=saveCheckout' method='post'>
            <p class='checkoutFormDescription'>" . t('firstname', $this->langId) . "<input type='text' class='checkoutFormField' name='firstname' value=\"" . $user["user_firstname"] . "\"/> </p>
            <p class='checkoutFormDescription'>" . t('lastname', $this->langId) . "<input type='text' class='checkoutFormField' name='lastname' value='" . $user["user_lastname"] . "' /> </p>
            <p class='checkoutFormDescription'>" . t('email', $this->langId) . "<input type='text' class='checkoutFormField' name='email' value='" . $user["user_email"] . "'/> </p>
            <p class='checkoutFormDescription'>" . t('street', $this->langId) . "<input type='text' class='checkoutFormField' name='address' value='" . $user["user_address"] . "'/> </p>
            <p class='checkoutFormDescription'>" . t('zip', $this->langId) . "<input type='text'  class='checkoutFormField' name='zip' value='" . $user["user_zip"] . "'/> </p>
            <p class='checkoutFormDescription'>" . t('city', $this->langId) . "<input type='text' class='checkoutFormField' name='city' value='" . $user["user_city"] . "'/> </p>
            <p class='checkoutFormDescription'>" . t('country', $this->langId) . "<select class='checkoutFormField' name='country' value='" . $user["user_country"] . "'>
                <option value='ch'>" . t('switzerland', $this->langId) . "</option><option value='de'>" . t('germany', $this->langId) . "</option></select>
                </p>
            <p class='checkoutFormDescription'>" . t('shipment', $this->langId) . "<input class='checkoutFormField' name='shipment' type='radio' id='standard' value='" . t('standardShiping', $this->langId) . "'><label class='checkoutLabels' for=\"stadard\">" . t('standardShiping', $this->langId) . "</label>
            <input class='checkoutFormField' name='shipment' type='radio' id='fast' value='" . t('fastShiping', $this->langId) . "'><label class='checkoutLabels' for=\"stadard\">" . t('fastShiping', $this->langId) . "</label>
            <p class='checkoutFormDescription'>" . t('present', $this->langId) . "<label class='checkoutLabels' for='present'><input class='checkoutFormField' name='present' type='checkbox'>" . t('present', $this->langId) . "</label>
    <br />


    <input type=\"submit\" class='BuyButton checkoutFormField' value=\"" . t('next', $this->langId) . "\"/>
</form>
";


        echo "
            </body>
        </html>";

    }
}

class PaymentView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {

        if (!isset($_SESSION["userId"])) {
            header("Location: ?pageId=Login");
            exit();
        }

        $header = new Header();
        $menu = new Menu('Register', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
            <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
            <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>

        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        echo "<h1>" . t('confirmation', $this->langId) . "</h1>";

        echo "<p>" . t('confirmationDescription', $this->langId) . "</p>";

        echo "<table class='shoppingCartTable'>
  <colgroup>
       <col span=\"1\" style=\"width: 5%;\">
       <col span=\"1\" style=\"width: 80%;\">
       <col span=\"1\" style=\"width: 15%;\">
    </colgroup>
    <tr>
        <th>" . t('articleId', $this->langId) . "</th>
        <th>" . t('articleDesc', $this->langId) . "</th>
        <th>" . t('price', $this->langId) . "</th>
    </tr>";

        if (!empty($_SESSION["shoppingCart"])) {
            $totalPrice = 0;
            foreach ($_SESSION["shoppingCart"] as $cartId => $article) {
                $product = $this->model->getProductById($article["articleId"]);
                $price = $product["product_price"];
                echo "
                <tr>";
                echo "<td>";
                echo $product["product_id"];
                echo "</td>";

                echo "<td><b>";
                echo $product["product_name_$this->langId"];
                echo " (" . t('quantity', $this->langId) . $article["quantity"];
                echo "; " . t('pricePerUnit', $this->langId) . number_format($product["product_price"], 2, '.', '') . ")";
                echo "</b><br />";
                echo $product["product_description_$this->langId"];
                if (!empty($article["addonIds"])) {
                    foreach ($article["addonIds"] as $addonEntry) {
                        $addon = $this->model->getAddonById($addonEntry["addon_id"]);
                        echo "<div class=\"productAddonMin\">";
                        echo $addon["productAddon_description_" . $this->langId];
                        echo " (" . t('quantity', $this->langId) . $addonEntry["quantity"];
                        echo "; " . t('pricePerUnit', $this->langId) . number_format($addon["productAddon_price"], 2, '.', '') . ")";
                        echo "</div>";

                        $price += $addonEntry["quantity"] * $addon["productAddon_price"];
                    }
                }
                echo "</td>";

                echo "<td>";
                $price *= $article["quantity"];
                echo "CHF " . number_format($price, 2, '.', '');
                $totalPrice += $price;
                echo "</td>";
                echo "</tr>";
            }
            echo "<tr><td></td><td>" . t('total', $this->langId) . "</td><td>CHF " . number_format($totalPrice, 2, '.', '') . "</td>";
        }
        echo "</table>";

        echo "<form id='paymentForm' class='paymentForm' action='./?pageId=Account&action=checkout' method='post'>
            <p class='paymentFormDescription'>" . t('paymentMethod', $this->langId) . "<select class='paymentFormField' name='paymentMethod'>
                <option value='creditCard'>" . t('creditCard', $this->langId) . "</option><option value='bill'>" . t('bill', $this->langId) . "</option></select>
                </p>
            <p class='paymentFormDescription'>" . t('creditCardNumber', $this->langId) . "<input type='text' class='paymentFormField' name='creditCardNumber'/> </p>
    <br />

</form>
";

        echo "<div class='confirmDialog' id=\"dialog-confirm\" title=\"" . t('confirmOrder', $this->langId) . "\">
            <p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>" . t('confirmOrderDescription', $this->langId) . "</p>
        </div>";
        echo "<div class='article'><a class=\"BuyButton\" onclick='$(function() {
            $( \"#dialog-confirm\" ).dialog({
                resizable: false,
                height:400,
                modal: true,
                buttons: {
                    \"" . t('confirm', $this->langId) . "\": function() {
                        document.getElementById(\"paymentForm\").submit();
                    },
                    \"" . t('cancel', $this->langId) . "\": function() {
                        $( this ).dialog( \"close\" );
                    }
                }
            });
        });'>" . t('buyNow', $this->langId) . "</a></div>";


        echo "
            </body>
        </html>";

    }
}

class AccountView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {

        if (!isset($_SESSION["userId"])) {
            header("Location: ?pageId=Login");
            exit();
        }

        $header = new Header();
        $menu = new Menu('Register', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        $user = $this->model->getUserById($_SESSION["userId"]);

        echo "<h1>" . t('currentOrders', $this->langId) . "</h1>";

        $orders = $this->model->getOrdersByUserId($_SESSION["userId"]);

        if (!empty($orders)) {
            foreach ($orders as $order) {
                echo "<p><a href='?pageId=orderDetails&order=" . $order["order_id"] . "'>" . t('order', $this->langId) . "" . $order["order_id"] . "</a></p>";
            }
        }

        echo "<h1>" . t('accountDetails', $this->langId) . "</h1>";

        echo "<form class='accountForm' action='./?pageId=Account&action=account' method='post'>
            <p class='accountFormDescription'>" . t('userId', $this->langId) . "<input type='text' class='accountFormField' name='userId' value=\"" . $user["user_id"] . "\" readonly/> </p>
            <p class='accountFormDescription'>" . t('firstname', $this->langId) . "<input type='text' class='accountFormField' name='firstname' value=\"" . $user["user_firstname"] . "\"/> </p>
            <p class='accountFormDescription'>" . t('lastname', $this->langId) . "<input type='text' class='accountFormField' name='lastname' value='" . $user["user_lastname"] . "' /> </p>
            <p class='accountFormDescription'>" . t('street', $this->langId) . "<input type='text' class='accountFormField' name='address' value='" . $user["user_address"] . "'/> </p>
            <p class='accountFormDescription'>" . t('zip', $this->langId) . "<input type='text'  class='accountFormField' name='zip' value='" . $user["user_zip"] . "'/> </p>
            <p class='accountFormDescription'>" . t('city', $this->langId) . "<input type='text' class='accountFormField' name='city' value='" . $user["user_city"] . "'/> </p>
            <p class='accountFormDescription'>" . t('country', $this->langId) . "<select class='accountFormField' name='country' value='" . $user["user_country"] . "'>
        <option value='ch'>" . t('switzerland', $this->langId) . "</option><option value='de'>" . t('germany', $this->langId) . "</option>
    </p><br />
    <input type=\"submit\" class='BuyButton accountFormField' value=\"" . t('update', $this->langId) . "\"/>
</form>
";


        echo "
            </body>
        </html>";

    }
}

class LoginView
{
    private $model;
    private $langId;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu('Login', $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();

        echo "<h1>" . t('login', $this->langId) . "</h1>";

        echo "<form class='registrationForm' action='./?pageId=Shop&action=loginUser' method='post'>
    <p class='registrationFormDescription'>" . t('username', $this->langId) . "<input type='text' class='registrationFormField' name='username' /> </p>
    <p class='registrationFormDescription'>" . t('password', $this->langId) . "<input type='password' class='registrationFormField' name='password' /> </p>

    <input type=\"submit\" class='BuyButton registrationFormField' value=\"" . t('login', $this->langId) . "\"/>
</form>
";


        echo "
            </body>
        </html>";

    }
}

class invalidPageIdView
{
    private $pageID;
    private $langId;

    public function __construct($pageID)
    {
        $this->pageID = $pageID;
        $this->langId = $GLOBALS["langId"];
    }

    public function render()
    {
        $header = new Header();
        $menu = new Menu(null, $this->langId);

        echo "
        <!DOCTYPE HTML>
        <html>
        <head>
		  <meta charset=\"UTF-8\">
		  <title>Webshop</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"./static/style.css\" />
        </head>";

        echo "<body>";

        $header->render();
        $menu->render();


        echo "
                <h1>" . t('invalidPageId', $this->langId) . "</h1>
                <p>" . t('invalidPageIdDescription', $this->langId) . " [" . $this->pageID . "].</p>";


        echo "
            </body>
        </html>";

    }
}