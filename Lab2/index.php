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

}

Task1();
Task2();
Task11();
Task12();
Task13();
Task14();

