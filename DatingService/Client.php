<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Age groups
// 18-29 group1
// 30-39: Group 2
// 40-49: Group 3
// 50+ : Group 4

function __autoload($class_name){
	include $class_name . '.php';
}

class Client{
	// $hotDate is component instance
	private $hotDate;

	public function __construct(){
		$this->hotDate = new Female();
		$this->hotDate->setAge("Age Group 4");
		echo $this->hotDate->getAge();
		$this->hotDate = $this->wrapComponent($this->hotDate);
		echo $this->hotDate->getFeature();
	}

	private function wrapComponent(IComponent $component){
		$component = new ProgramLang($component);
		$component->setFeature("php");
		$component = new Hardware($component);
		$component->setFeature("lin");
		$component = new Food($component);
		$component->setFeature("veg");
		return $component;
	}
}

$worker = new Client();