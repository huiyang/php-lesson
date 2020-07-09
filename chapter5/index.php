<?php
/*
Chapter 5: Class inheritance
- inheritance, extends
- trait
- static method
*/

trait CanMeow {
	public function meow() {
		echo 'meow!';
	}
}

class Animal {
	public function getName() {
		return 'animal';
	}
}

class Cat extends Animal {
	use CanMeow;
	
	public function getName() {
		return 'cat';
	}
	
	public static function staticMeow() {
		echo 'meow (static)';
	}
}

$animal = new Animal;
$cat = new Cat;

echo $cat->getName().' is a '.$animal->getName(); // cat is a animal

echo '<br/>';

$cat->meow();

echo '<br/>';

Cat::staticMeow(); // static method should not same name as non static method