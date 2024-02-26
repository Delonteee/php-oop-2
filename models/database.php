<?php 
require_once __DIR__ . './product.php';
require_once __DIR__ . './food.php';
require_once __DIR__ . './categories.php';

$dogCategory = new Category('dog');
$catCategory = new Category('cat');

$foods = [
    $purina_dog_pro_plan = new food(
        'Purina Dog Pro Plan Veterinary Diets HA Hypoallergenic',
        'Purina',
        'dog',
        '17,89',
        'Alimento dietetico completo per cuccioli e cani adulti',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-10-18t091325.241_1.jpg?width=700&height=700&store=default&image-type=image',
        $dogCategory,
        '2024-12-12',
        'ingredienti vari',
        'no allergie',
        25
    ),
    $oasy_caprice_cat_adult_mousse = new food(
        'Oasy Caprice Cat Adult Mousse Grain Free 85 gr - confezione da 18',
        'Oasy',
        'cat',
        '12,06',
        'Alimento completo per gatti, disponibile in pratiche lattine da 85 g',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-10-25t135718.171.jpg?width=700&height=700&store=default&image-type=image',
        $catCategory,
        '2024-12-12',
        'ingredienti vari',
        'no allergie',
        'not-int'
    ),

];

$toys = [
    $scratching_post= new toy(
        'Tiragraffi per gatti Madrid PetUp',
        'PetUp',
        'cat',
        '38,90',
        'Lavabile',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2024-01-12t185358.085.png?width=700&height=700&store=default&image-type=image',
        $catCategory,
        'Corda, pelo sintetico',
        'Il tiragraffi Madrid con gioco appeso a una corda con piattaforma PetUp è un accessorio ideale dove il tuo micio potrà farsi le unghie, grattarsi e divertirsi',
        'Tutte le taglie',
    ),

    $corda = new toy(
        'Corda in cotone per cani Cotonosso Maniglia Nodi PetUp',
        'PetUp',
        'dog',
        '3,19',
        'Lavabile',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2024-01-12t175646.620.png?width=700&height=700&store=default&image-type=image',
        $dogCategory,
        'Corda',
        'La Corda Cotonosso Maniglia Nodi PetUp è il gioco robusto e resistente ideale per il tira e molla con il tuo fidato amico peloso',
        'S - M - L - XL',
    ),
];
    
$petbeds = [
    $petit_sofa = new petbed(
        'Petit Sofà Dreamaway Boston Fabotex',
        'Fabotex',
        'dog',
        '44,99',
        'Lavabile',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-12-04t160617.675.png?width=700&height=700&store=default&image-type=image',
        $dogCategory,
        'Spugna',
        'Grande',
    ),
    $petit_sofa = new petbed(
        'Cuccia per gatti Igloo Black Cat Ferribiella',
        'Ferribiella',
        'cat',
        '34,49',
        'Lavabile',
        'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-09-13t111415.604_1.jpg?width=700&height=700&store=default&image-type=image',
        $catCategory,
        'Poliestere',
        'Piccolo',
    ),
];