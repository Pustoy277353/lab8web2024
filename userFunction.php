<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1-2
    echo "<p>Задание 1-2</p>";
    function getplus10($a)
    {
        $sum = $a + 10;
        echo $a . "+" . 10 . " = " . $sum;
        return $sum;
    }
    $rez = getplus10(11);
    echo "<br>";
    echo "Сумма = " . $rez;
    echo "<br>";

    //3 
    echo "<p>Задание 3</p>";
    $b = 2;
    $c = 7;

    function pythagoras($b, $c)
    {
        $gip = sqrt(pow($b, 2) + pow($c, 2));
        return $gip;
    }
    $gip = pythagoras($b, $c);
    echo "гипотенуза = " . $gip . "<br>";

    //4 
    echo "<p>Задание 4</p>";
    function calculatePayment($prise, $procent, $Years)
    {
        $monthprocent = ($procent / 100) / 12;
        $number = $Years * 12;

        $monthlyPayment = ($prise * $monthprocent) / (1 - (1 + $monthprocent) ** -$number);

        return $monthlyPayment;
    }

    $prise = 100000;
    $procent = 5;
    $Years = 20;

    $result = calculatePayment($prise, $procent, $Years);
    echo "Ежемесячный ипотечный платеж - " . number_format($result, 2) . ' руб.<br>';

    //5
    echo "<p>Задание 5</p>";
    col(12, 6, 123);
    function col()
    {
        $count = func_num_args();
        echo "аргументов в переменной - " . $count;
    }
    echo "<br>";

    //6
    echo "<p>Задание 6</p>";
    function calculate()
    {
        $args = func_get_args();
        $sum = array_sum(array_filter($args, 'is_int'));
        $counts = count($args);

        if ($counts > 0) {
            return $sum / $counts;
        } else {
            return null;
        }
    }
    echo "Среднее значение аргументов =" . calculate(10, 20, 30) . "<br>";

    //7
    echo "<p>Задание 7</p>";
    function draw(){
        $args = func_get_args();
        $max_value = max($args);
    
        echo '<div style="display: flex; align-items: flex-end;">';
    
        foreach ($args as $value) {
            $percent = ($value / $max_value) * 100;
            echo '<div style="background-color: steelblue; width: 50px; height: ' . $percent . 'px; margin: 0 10px;">
                <div>'.$value.'</div>
            </div>';
        }
    
        echo '</div>';
    }
    
    draw(30, 40, 10, 50, 20);
    

    //8
    echo "<p>Задание 8</p>";
    function op($num1, $num2, $operator)
    {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return $num1 / $num2;
            default:
                return null;
        }
    }
    $result = op(1, 5, '-');
    echo $result . "<br>";

    //9
    echo "<p>Задание 9</p>";
    function workOnce()
    {
        static $executed = false;

        if (!$executed) {
            echo "Функция выполняется только один раз.<br>";
            $executed = true;
        } else {
            echo "Функция уже была выполнена.<br>";
        }
    }
    workOnce();
    workOnce();
    ?>
</body>

</html>
