<?php
// This is comment
/* This is multiple line block
comment
*/


/*
Chapter 1 - Syntax
- Comment 注释
- Variable 变数
- String 字串
- Concatenated string 串联字串
- Integer 数字
- Operator 运算符
- Constant 固定值
*/

$variable;

echo 'echo some text'; 

$string = "this is $variable string";
$string = "this is string with variable >> \"$string\" ";

$main = 'main string';
$concanatedString = 'prefix_' . $main . '_suffix';

$str1 = '5';
$str2 = '6';

echo $str1 + $str2; // 11
echo $str1 . $str2; // 56

$integer = 5;
$anotherInteger = 6;
$sumUp = $integer + $anotherInteger; // 11

define('A_PHP_CONTANT', 'this is constant');
?>
<p>String: <?= $string ?></p>
<p>Concanated string: <?= $concanatedString ?></p>
<p>Constant: <?= A_PHP_CONTANT ?></p>