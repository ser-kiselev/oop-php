<?php 

class Person {
	public $name;
	public $speciality;
	public $age;

	public function __construct($name, $spec, $age){
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
	}

	public function greeting(){
		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
	}
}

$person1 = new Person('Peter', 'Programmer', 28);
$person1->greeting();

echo "<br><br>";

$person2 = new Person('Jane', 'Web-designer', 24);
$person2->greeting();

?>