<?php
// Задание 1
$str = 'ahb acb aeb aeeb adcb axeb abba adca abea';
$strArray = str_split($str);
$regExpr = '/a.{2}b/';
$foundExpressionsArray = [];
preg_match_all($regExpr, $str, $foundExpressionsArray);
print_r($foundExpressionsArray);


// Задание 2
$str = 'a1b2c3';
/// насколько я понял, здесь нам нужно разлелиь на цифры отправить их в функцию и там уже возвести в степень
$pattern = '/[0-9]/';
$replacedString = preg_replace_callback
(
    $pattern,
    function ($matches) {
        return pow($matches[0], 3);
    },
    $str
);
echo $replacedString;

