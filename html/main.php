<?php include_once('./products.php') ?>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FlexFlowTest</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <h1>
        The LibVirt Shop
    </h1>
    <nav>
        <div><a href="./Shop">Shop</a></div>
        <div><a href="./VMManagement">VM Management</a></div>
        <div><a href="./AcccountManagement">Account Management</a></div>
    </nav>
</header>
<main>
    <?php
    foreach ($products as $product) {
        echo "<div class= \"product\" id=\"product1\"><p>Buy $product</p><br/>";
        echo "<p>50.- CHF</p></div>";
    }
    ?>
    <div class="product" id="product1"><p>Buy Product 1</p><br/>

        <p>50.- CHF</p></div>

    <div class="product" id="product2"><p>Buy Product 2</p><br/>

        <p>50.- CHF</p></div>

    <div class="product"><p>Buy Product 3</p><br/>

        <p>50.- CHF</p></div>



    <aside>
        <p id="Warenkorb">Warenkorb</p>
    </aside>
</main>

<footer>
    <a href="./Kontakt">Kontakt</a>
</footer>
</body>
</html>