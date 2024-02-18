<?php
include 'data.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<main>
    <h1>Bienvenue sur notre site !</h1>
    <h2>Catégories</h2>
    <section class="container">
        <div class='categories'>
            <?php
            //Je regroupe les produits par catégorie
            $categories = [];
            foreach ($products as $product) {
                $categories[$product['categorie']][] = $product;
            }

            //Je boucle sur chaque catégorie
            foreach ($categories as $categorie => $products) {
                echo "<h3>$categorie</h3>";
                echo "<div class='products'>";
                //Je boucle sur chaque produit de la catégorie
                foreach ($products as $product) {
                    echo "<div class='product-categorie'>";
                    echo "<img src='./img/{$product['denomination']}.jpg' alt='{$product['denomination']}'><br>";
                    echo "<p class='price'>{$product['denomination']} - {$product['prix']} €</p>";
                    if ($product['promotion']) {
                        echo "<p class='sales'>Promotion</p>";
                    }
                    echo "</div>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </section>
</main>
</body>
</html>