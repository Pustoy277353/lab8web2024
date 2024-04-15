<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [
        [
            'name' => 'Мишка',
            'price' => 1000,
            'description' => 'Отличный компаньён для снов.'
        ],
        [
            'name' => 'Зайчик',
            'price' => 800,
            'description' => 'Прекрасное украшение для комнаты.',
        ],
        [
            'name' => 'Слоник',
            'price' => 900,
            'description' => 'Лучшая игрушка для детей',
        ],
    ];

    foreach ($products as $product) {
        include 'goods.php';
    }

    ?>
</body>

</html>