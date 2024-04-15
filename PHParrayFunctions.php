<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Задание 1</p>
    <?php
    $arr = array("first" => 45, "second" => 76, "third" => 12);

    $resArr = array_values($arr);

    print_r($resArr);
    ?>

    <p>Задание 2</p>
    <?php
    $resArr = array_keys($arr);

    print_r($resArr);
    ?>
    <p>Задание 3</p>
    <?php
    $arr2 = [45, "тест", 100];
    unset($arr2[0]);
    print_r($arr2); echo "<br>";
    array_push($arr2, "тест2");
    print_r($arr2);
    ?>

    <p>Задание 4</p>
    <?php
    print_r(array_reverse($arr))
    ?>
    <p>Задание 5</p>
    <?php
    $arr4 = array(45, 76, 12, 12, 45, 12);
    print_r(array_unique($arr4)); echo "<br>";
    print_r(count(array_unique($arr4)));
    ?>
</body>

</html>