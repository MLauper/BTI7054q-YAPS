function getProducts(){
    var req = new XMLHttpRequest();

    req.onreadystatechange = function() {
        if (this.readyState == 4)
            if (req.status == 200) {
                var products = req.responseText;
                var products = JSON.parse(products);
                console.debug(products);
                var productsHTML ="";

                for (var k in products){
                    productsHTML = productsHTML
                        .concat("<div class='article'><img src='./images/vm.png' class='img-zoom' height='100' width='100'>")
                        .concat("<a class='BuyButton' href='?pageId=Shop&action=quickAddItem&articleId=")
                        .concat(products[k].product_id.toString())
                        .concat("'>")
                        .concat(buyNow)
                        .concat("</a>")
                        .concat("<a href='./?pageId=ShopDetail&articleId=")
                        .concat(products[k].product_id)
                        .concat("'><h3>")
                        .concat(products[k].product_name_en)
                        .concat("</h3></a><p>")
                        .concat(products[k].product_description_en)
                        .concat("</p><p>Price:")
                        .concat(products[k].product_price)
                        .concat("</p></div>");

                    console.log(products[k].product_name_en);
                }
                var productHTML = "<h1>lol</h1>";
                document.getElementById("mainArticles").innerHTML = productsHTML;
            }
    };
    req.open("GET", "search.php?keyword=".concat(keyword), true);
    req.send();
}

var app = angular.module('registrationForm', []);
app.controller('validationController', function($scope) {
    $scope.user = '';
    $scope.email = '';
});