<!--Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. -->

<?php
$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}


define('ROOT', __DIR__);

define('DS', DIRECTORY_SEPARATOR);


require_once ROOT . DS . 'traits' . DS . 'traits.php';
require_once ROOT . DS . 'models' . DS . 'categories.php';
require_once ROOT . DS . 'models' . DS . 'products.php';


/*
var_dump($commerce);

var_dump($dog_categories);
var_dump($horse_categories);

*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets shop</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body class="bg-secondary">

<header>

<h1 class="text-center fw-bold text-danger py-4">PETS SHOP</h1>
</header>

<main class="pt-5">
    <section id="products">
        <div class="container">
            <div class="row row-cols-3 g-5">

                <?php foreach ($products as $product) : ?>

                    <div class="col">

                        <div class="card">

                            <img width="250" src="./models/img/pets.jpg" alt="">

                            <div class="card-body">

                                <div>Per: <?= $product->getIcon() ?></div>
                                <div><strong>Nome:</strong> <?= $product->name ?></div>
                                <div><strong>Prezzo</strong> <?= $product->price ?></div>
                                <div><strong>Animale:</strong> <?= $product->categories->animal ?></div>
                                <div><strong>Tipo:</strong> <?= $product->type ?></div>
                                <div><strong>Colore:</strong> <?= $product->color ?> </div>

                            </div>

                        </div>

                    </div>

                <?php endforeach ?>


            </div>
        </div>
    </section>
</main>
</body>

</html>