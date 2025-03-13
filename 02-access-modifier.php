<?php 
// access modifier
class Car {
	public $name = "Volvo";
	public $model = "453";

	protected function start(){
		echo 'Car is runing!';
	}
}

// create instance 
$mycar = new Car();

echo $mycar->name;
echo $mycar->start();


// What is access modifier
// public, private & protected