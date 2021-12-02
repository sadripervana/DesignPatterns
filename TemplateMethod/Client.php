<?php 
function __autoload($classname){
	include $classname . '.php';
}

class Client
{
	function __construct(){
		$caption = "Modigliani painted elongated faces.";
		$mo = new ConcreteClass();
		$mo->templateMethod("modig.php", $caption);
	}
}
$worker = new Client();

 ?>