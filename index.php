<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    
    // Vérification des pages autorisées
    $allowed_pages = ['home', 'products', 'sales', 'categories', 'contact', 'login'];
    $param = isset($_GET["pg"]) ? $_GET["pg"] : 'home';

    // Si la page demandée n'est pas autorisée, rediriger vers la page d'accueil
    if (!in_array($param, $allowed_pages)) {
        $param = 'home';
    }

    // inclusion de la barre de navigation du site
    include './pages/nav.php';


    // inclusion de home.php
    include './pages/' . $param . '.php';


    // inclusion du pied de page du site
    include './pages/footer.php';




    
    ?>
</body>

</html>