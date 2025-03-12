<?php 

class Car {
	public $name = 'Volvo';
	public $model = '34534';
	public $color = 'black';

	function start(){
		echo "From inside the start method";
	}

	function stop(){

	}
};

// create instance of object
$mycar = new Car();


echo $mycar->model;
echo "<br/>";
echo $mycar->start();


/*

What is OOP 
What is object
What is property 
What is method
How ot create object
How to create instance of an object
How to access the properties and methods
Keywords: class, public, new

 */