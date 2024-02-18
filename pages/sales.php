<?php
include 'data.php'; // J'inclus le fichier data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<main>
    <h1>Bienvenue sur notre site !</h1>
    <h2>Promotions</h2>
    <section class="container">
        <table>
            <?php
            $count = 0;
            foreach ($products as $product) { // Boucle foreach pour parcourir le tableau $products
                if ($product['promotion']) { // Je vérifie si le produit a une promotion
                    if ($count % 5 == 0) {
                        echo '<tr>'; // Début d'une nouvelle ligne du tableau
                    }
                    echo '<td class=sales-product>';
                    echo "<img src='./img/{$product['denomination']}.jpg' alt='{$product['denomination']}'>";
                    echo "<br>";
                    echo "<p class='denomination'>{$product['denomination']}</p>";
                    echo "<p class='price'>";
                    echo "<span class='promo'>{$product['prix']} €</span>"; // J'affiche le prix barré
                    echo " - <span class='new-price'>" . $product['prix'] * 0.7 . " €</span>"; // Je calcule le prix avec la promotion
                    echo "</p>";
                    echo "<p class='sales'>Promotion</p>";
                    echo '</td>';
                    if ($count % 5 == 4) {
                        echo '</tr>'; // Fin de la ligne du tableau
                    }
                    $count++;
                }
            }
            if ($count % 5 != 0) {
                echo '</tr>'; // Ferme la dernière ligne du tableau si elle n'est pas complète
            }
            ?>
        </table>
    </section>
</main>
</body>
</html>