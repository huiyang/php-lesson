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

interface Buyable {
	public function getSku();
}

class Book implements Buyable {
	public function getSku() {

	}
}

class Course implements Buyable {
	public function getSku() {

	}
}

class Quotation {

}

$products = [
	new Course,
	new Book,
	new Course,
	new Quotation,
];

foreach ($buyable as $buyableObject) {
	if ($buyableObject instanceof Course || $buyableObject instanceof Book || $buyableObject instanceof Laptop) {
		// buy($buyableObject);
	}

	if ($buyableObject instanceof Buyable) {
		// Cart::addItemBySku($buyableObject->getSku());
	} else {
		// do something else;

	}
}


class Tiger extends Animal implements Moveable {
	use CanMeow;
	// use CanEat;
	// use CanMove;
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