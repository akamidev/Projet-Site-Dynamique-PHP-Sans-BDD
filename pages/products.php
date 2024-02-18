<?php
include 'data.php'; // Assurez-vous que le chemin vers le fichier est correct
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
        <h2>Produits</h2>
        <section class="container"> 
            <table>
                <?php
                $count = 0;
                foreach ($products as $product) { // Boucle foreach pour parcourir le tableau $products
                    if ($count % 5 == 0) { // Vérifie si le compteur est un multiple de 5
                        echo '<tr>'; // Début d'une nouvelle ligne du tableau
                    }
                    echo '<td class="product">';
                    echo "<img src='./img/{$product['denomination']}.jpg' alt='{$product['denomination']}'><br>"; // Affiche l'image du produit
                    echo "<p class='price'>{$product['denomination']} - {$product['prix']} €</p>"; // Affiche le nom et le prix du produit
                    if ($product['promotion']) { // Vérifie si le produit est en promotion
                        echo "<p class='sales'>Promotion</p>"; // Affiche le texte "Promotion"
                    }
                    echo '</td>';
                    if ($count % 5 == 4 || $count == count($products) - 1) { // Vérifie si le compteur est un multiple de 5 ou si c'est le dernier produit
                        echo '</tr>'; // Fin de la ligne du tableau
                    }
                    $count++; // Incrémente le compteur
                }
                ?>
            </table>
        </section>
    </main>
</body>

</html>