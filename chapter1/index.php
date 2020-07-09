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

$string = 'this is string';
$string = "this is string with variable >> \"$string\" ";

$main = 'main string';
$concanatedString = 'prefix_' . $main . '_suffix';

$integer = 5;
$anotherInteger = 6;
$sumUp = $integer + $anotherInteger; // 11

define('A_PHP_CONTANT', 'this is constant');
?>
<p>String: <?= $string ?></p>
<p>Concanated string: <?= $concanatedString ?></p>
<p>Constant: <?= A_PHP_CONTANT ?></p>