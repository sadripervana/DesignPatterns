<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class CloneMe {
	public $name;
	public $picture;
	abstract function __clone();
}

class Person extends CloneMe {
	public function __construct(){
		$this->picture = "cloneMan.png";
		$this->name = "Original";
	}

	public function display(){
		echo "<img src='$this->picture'";
		echo "<br>$this->name <p/>";
	}

	function __clone(){}
}

$worker = new Person();
$worker ->display();
$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
 ?>