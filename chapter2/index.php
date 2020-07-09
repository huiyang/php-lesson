<?php
/*
Chapter 2

- Comparison operators 比较运算符
- Function 函数
- Array 阵列
- Foreach loop 循环

*/

$a = '1';
if ($a == 1) {
	echo '<p>'.'string 1 == integer 1'.'</p>';
} else {
	echo '<p>'.'string 1 != integer 1'.'</p>';
}

if ($a === 1) {
	echo '<p>'.'string 1 === integer 1'.'</p>';
} else {
	echo '<p>'.'string 1 !== integer 1'.'</p>';
}

add(5, 3); // Add 2 digits

function add($int1, $int2) {
	echo '<p>' . $int1 . ' + '. $int2 . ' = ' . ($int1 + $int2) . '</p>';
}

// Array

$array = []; // empty array

$array = [
	'a',
	'b',
	'c',
]; // indexed array

echo '<p>'.$array[1].'</p>'; // b

$array = [
	'a' => 'apple',
	'b' => 'boy',
	'c' => 'cat',
];

echo '<p>'.$array['b'].'</p>'; // boy

$array = [
	[
		'a' => 'apple',
		'b' => 'boy',
		'c' => 'cat',
	],
	[
		'a' => 'aaa',
		'b' => 'bbb',
		'c' => 'ccc',
	]
]; // multi dimension array

echo $array[0]['b']; // boy
echo $array[1]['b']; // bbb

$foreachArray = [
	'a',
	'b',
	'c',
];
foreach($foreachArray as $value) {
	echo $value; // abc
}

$foreachArray = [
	'a' => 'apple',
	'b' => 'boy',
	'c' => 'cat',
];
foreach($foreachArray as $key => $value) {
	echo $key . = 'for ' . $value . ', '; // a for apple, b for boy, c for cat, 
}

//
$oldStyle = array('a', 'b', 'c');
$newStyle = ['a', 'b', 'c'];
// $oldStyle == $newStyle

// no need to close <?php