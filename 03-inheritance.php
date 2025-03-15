<?php 

class Man {
	public function sayHello(){
		echo "Hello Abdullah!";
	}
}

// create instance
// $man = new Man();

// $man->sayHello();

class Abdullah extends Man{

}

// create instance of abdullah 
$abdullah = new Abdullah();

$abdullah->sayHello();