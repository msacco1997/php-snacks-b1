<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60 -->



<?php
$partite = [
[
'casa' => 'Basket Milano',
'ospite' => 'Basket Roma',
'punti_casa' => 45,
'punti_ospite' => 21
],
[
'casa' => 'Basket Perugia',
'ospite' => 'Basket Ternana',
'punti_casa' => 36,
'punti_ospite' => 02
],
[
'casa' => 'Basket Bari',
'ospite' => 'Basket Lecce',
'punti_casa' => 48,
'punti_ospite' => 59
],
[
'casa' => 'Basket Torino',
'ospite' => 'Basket Bologna',
'punti_casa' => 62,
'punti_ospite' => 64
],
[
'casa' => 'Basket Foggia',
'ospite' => 'Basket Brescia',
'punti_casa' => 30,
'punti_ospite' => 42
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snak1</title>
</head>
<body>

    <?php
        
        for($i = 0; $i < count($partite); $i++){
    ?>
    <span class="width"><?php echo $partite[$i]['casa']. ' - ' .$partite[$i]['ospite']. ' | ' .$partite[$i]['punti_casa']. ' - ' .$partite[$i]['punti_ospite']; ?></span> <br>
            <?php
        }
    ?>
</body>
</html>

<style lang="css">
.width{
    width: 500px;
}
</style>