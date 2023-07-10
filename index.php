<?php
    // IMPORTO I FILE PHP DELLE CLASSI
    require_once __DIR__."/models/Prodotti.php";
    require_once __DIR__."/models/Cibo.php";
    require_once __DIR__."/models/Accessori.php";
    require_once __DIR__."/models/Giochi.php";

    // CREO LE ISTANZE DELLA SOTTO-CLASSE "CIBO"
    $cibo1 = new Cibo("https://m.media-amazon.com/images/I/71fwkZg9m6L.jpg", "Royal Canin Mini Adult", "Cane");
    $cibo2 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "Cane");
    $cibo3 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "Gatto");
    $cibo4 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in Fiocchi", "Pesce");

    // ASSEGNAZIONI VALORI PROPRIETA ALLE ISTANZE DELLA SOTTO-CLASSE "CIBO"
    $cibo1->setPrice(43.99);
    $cibo1->setNetWeight(545);
    $cibo1->setIngredients(["Prosciutto", "Riso"]);

    $cibo2->setPrice(44.99);
    $cibo2->setNetWeight(600);
    $cibo2->setIngredients(["Manzo", "Cereali"]);

    $cibo3->setPrice(34.99);
    $cibo3->setNetWeight(400);
    $cibo3->setIngredients(["Tonno", "Pollo", "Prosciutto"]);

    $cibo4->setPrice(2.95);
    $cibo4->setNetWeight(30);
    $cibo4->setIngredients(["Pesci e sottoprodotti di pesci", "Cereali", "Lieviti", "Alghe"]);

    // CREO LE ISTANZE DELLA SOTTO-CLASSE "ACCESSORI"
    $accessorio1 = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "Uccello", "Legno");
    $accessorio2 = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro EasyCrystal", "Pesce", "Materiale espanso");

    // ASSEGNAZIONI VALORI PROPRIETA ALLE ISTANZE DELLA SOTTO-CLASSE "ACCESSORI"
    $accessorio1->setPrice(184.99);
    $accessorio2->setPrice(2.29);
    $accessorio1->setSizes("M: L 83 x P 67 x H 153 cm");

    var_dump($accessorio1);
    var_dump($accessorio2);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Head Title -->
        <title>php-oop-2</title>
    </head>
    <body>
    </body>
</html>