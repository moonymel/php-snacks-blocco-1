<?php 

    $partite = [
        [
            'squadra_casa' => 'Estra Pistoia',
            'squadra_ospite' => 'Givova Scafati Basket',
            'punti_casa' => '78',
            'punti_ospite' => '71'
        ],
        [
            'squadra_casa' => 'Happy Casa Brindisi',
            'squadra_ospite' => 'Generazione Vincente Napoli Basket',
            'punti_casa' => '77',
            'punti_ospite' => '80'
        ],
        [
            'squadra_casa' => 'Carpegna Prosciutto Pesaro',
            'squadra_ospite' => 'EA7 Emporio Armani Milano',
            'punti_casa' => '65',
            'punti_ospite' => '85'
        ],
        [
            'squadra_casa' => 'NutriBullet Treviso Basket',
            'squadra_ospite' => 'Banco di Sardegna Sassari',
            'punti_casa' => '77',
            'punti_ospite' => '70'
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Partite 17° giornata:</h1>
    <ul>
        <?php foreach($partite as $partita) { ?>
            <li>
                <?php echo $partita['squadra_casa'].' - '.$partita['squadra_ospite'].' | '.$partita['punti_casa'].'-'.$partita['punti_ospite'] ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>