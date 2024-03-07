<?php

function Task1()
{
    echo "\n" . "Задание 1";

    /* Imagine a lot of code here */
    $very_bad_unclear_name = "15 chicken wings";


// Write your code here:
    $order = &$very_bad_unclear_name;  // нужно сделать присваивание по ссылке
    $order .= " " . "no chiks";

    echo "\n" . $order;
// Don't change the line below
    echo "\nYour order is: $very_bad_unclear_name.";
}

function Task2()
{
    echo "\n" . "Задание 2";
    $number = 228;
    echo "\n" . "number " . $number;
    $number_float = 228.777;
    echo "\n" . "Float Number " . $number_float;
    echo "\n" . +12;

    $last_month = 1187.23;
    $this_month = 1089.98;
    $difference = $last_month - $this_month;
    echo "\n" . $difference;
}

function Task11()
{
    echo "\n" . "Задание 11";
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo "\n" . $days_per_language;
}

function Task12()
{
    echo "\n" . "Задание 12";

    echo "\n" . 8 ** 2;
}

function Task13()
{
    echo "\n" . "Задание 13";

    $my_num = 20;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;
    echo "\n" . $answer;
}

function getDiv($number)
{
    $arrDiv = [];
    $count = 0;
    for ($divisionNumber = 1; $divisionNumber <= $number; $divisionNumber++) {
        if ($number % $divisionNumber == 0) {
            $arrDiv[$count++] = $divisionNumber;
        }
    }
    return $arrDiv;
}

function sumArrayUp10($arr)
{
    $sumNumberArray = 0;
    $countNumbers = 0;
    foreach ($arr as $item) {
        if (!($sumNumberArray > 10)) {
            $sumNumberArray += $item;
            $countNumbers++;
        }
    }
    return $countNumbers;
}


function Task14()
{
    echo "\n" . "Задание 14";

    $a = 10;
    $b = 3;
    $resultOfDivision = $a % $b;
    echo "\n" . $resultOfDivision;
    if ($a % $b === 0) {
        $resultOfDivision = $a / $b;
        echo "\n" . "Делится ";
    } else {
        echo "\n" . "Не делится ";
    }
    echo $resultOfDivision;

    $st = pow(2, 10);
    $stSqrt = sqrt(245); //
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $sumOfArray = 0;
    foreach ($arr as $item) {
        $sumOfArray += pow($item, 2);
    }
    $sqrtOfSumArray = sqrt($sumOfArray);
    echo "\n" . "Корень из суммы квадратов его элементов: " . $sqrtOfSumArray;
    $stSqrt = sqrt(379);
    echo "\n" . round($stSqrt, 0)
        . " " . round($stSqrt, 1)
        . " " . round($stSqrt, 2);

    $fl = floor(sqrt(587));
    $cl = ceil(sqrt(587));
    $resultArray = [
        'floor' => $fl,
        'ceil' => $cl,
    ];
    $arr = [4, -2, 5, 19, -130, 0, 10];
    $maxNum = max($arr);
    $minNum = min($arr);
    echo "\n" . rand(1, 100);
    $arr = []; /// заполняем 10-ю случайными числами
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = rand();
    }
    /*
    $a = 10;
    $b = 3;
    */
    abs($a - $b);
    $arr = [1, 2, -1, -2, 3, -3];
    $arrAbs = [];
    $i = 0;
    foreach ($arr as $item) { // делаем отрицательные числа положительными
        $arrAbs[$i++] = abs($item);
    }
    $number = 30;
    // находим делители числа $number
    $arrDiv = getDiv($number);
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // находим колличество элементов, которое нужно сложить и записываем их в переменную $resultOfSum
    $resultOfSum = sumArrayUp10($arr);
    echo "\n" . $resultOfSum;
}

function printStringReturnNumber()
{
    echo "\n" . "строка";
    return 1234123;
}

function Task15()
{
    echo "\n" . "Задание 15";
    $my_num = printStringReturnNumber();
    echo "\n" . $my_num;
}

function increaseEnthusiasm($str)
{
    return $str . "!";
}

function repeatThreeTimes(string $str): string
{
    return str_repeat($str, 3);
}

function cut(string $str, int $number = 10): string
{
    return substr($str, 0, $number);
}

function outArrayRecursion(array $arr, int $position = 0)
{
    echo $arr[$position++] . " ";
    if ($position < sizeof($arr)) {
        outArrayRecursion($arr, $position);
    }
}


function toIntArray(array $array): array
{
    $integerArray = [];
    $count = 0;
    foreach ($array as $item) {
        $integerArray[$count++] = (int)$item;
    }
    return $integerArray;
}

function sumNumOfNumbers(int $number): int
{
    $numberStringArray = str_split($number);
    $arrSumOfNumber = toIntArray($numberStringArray);
    $sumOfNumber = array_sum($arrSumOfNumber);
    while ($sumOfNumber > 9) {
        $sumOfNumber = array_sum(toIntArray(str_split($sumOfNumber)));
    }
    return $sumOfNumber;
}


function Task16()
{
    echo "\n" . "Задание 16";
    echo "\n" . increaseEnthusiasm("amogus");
    echo "\n" . repeatThreeTimes("amogus");
    echo "\n" . increaseEnthusiasm(repeatThreeTimes("Здравствуйте, товарищи"));
    echo "\n" . cut("Hello, comrads", 3);
    echo "\n";
    outArrayRecursion([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]); // вывдоим последовательно массив
    echo "\n" . sumNumOfNumbers(35); // сумма цифр числа
}


function arrayFill(string $item, int $countOfItems): array
{
    $arrayWithElements = [];
    for ($i = 0; $i < $countOfItems; $i++) {
        $arrayWithElements[$i] = $item;
    }
    return $arrayWithElements;
}

function Task17()
{
    echo "\n Задание 17";
    echo "\n";
    var_dump(fillArrayByElements("x", 5));
    echo "\n";
    var_dump(arrayFill('x', 5));
}

function Task18()
{

}

function fillArrayByElements(string $element, int $count): array
{
    $arrayFilled = [];
    for ($i = 0; $i < $count; $i++) {
        $times = $i + 1;
        $arrayFilled[$i] = str_repeat($element, $times);
    }
    return $arrayFilled;
}

function Task19()
{
    echo "\n" . "Задание 19";
    echo "\n";
    $arr = fillArrayByElements("x", 20);
    foreach ($arr as $item) {
        echo $item . " \n";
    }
}

function Task20()
{
    echo "\n" . "Задание 20";
    $arr = [1, 2, 1, 2, 3, 3]; // 12/6 = 2 среднее арифметическое
    echo "\n" . array_sum($arr) / sizeof($arr);
    echo "\n" . array_sum(range(1, 100));
    echo "\n";
    print_r(array_map("sqrt", $arr)); // получаем массив с квадратными корнями
    print_r(array_combine(range('a', 'z'), range(1, 26))); // получаем ассациативный массив
    $str = '1234567890';
    $strSum = array_sum(str_split($str,2)); // разбиваем строку на подстроки длиной 2 и суммируем их
    echo "\n" . $strSum;
}

Task1();
Task2();
Task11();
Task12();
Task13();
Task14();
Task15();
Task16();
Task17();
Task18();
Task19();
Task20();

