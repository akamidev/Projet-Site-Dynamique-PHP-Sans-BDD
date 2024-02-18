<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include 'data.php'; // Inclut le fichier data.php qui contient les données nécessaires
    
    ?>


    <nav>
        <ul>
            <?php
            foreach ($links as $text => $page) { // Pour chaque élément du tableau $links, assigne la clé à $text et la valeur à $page
                echo "<li><a href='index.php?pg=$page'>$text</a></li>"; // Affiche un élément de liste avec un lien qui utilise la valeur de $page et le texte de $text
            }
            ?>
        </ul>
    </nav>
</body>

</html>