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
	echo '<p>'.'string 1 == integer 1'.'</p>'; // output
} else {
	echo '<p>'.'string 1 != integer 1'.'</p>';
}

if ($a === 1) {
	echo '<p>'.'string 1 === integer 1'.'</p>';
} else {
	echo '<p>'.'string 1 !== integer 1'.'</p>'; // output
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
	56,
	new \DateTime,
]; // indexed array

echo '<p>'.$array[1].'</p>'; // b

// associated array
$array = [
	'a' => 'apple',
	'b' => 'boy',
	'c jkjaklsdf -' => 'cat',
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
for ($i = 0; $i < count($foreachArray); $i++) {
	echo $foreachArray[$i]; // abc
}

var array = [];

/*
If you have learned javascript, you will know that in javascripti we can write:
array.forEach((value, key) => {

})
*/

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
