<?php
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function __autoload($class_name) {
	include $class_name . '.php';
}

class Client {
	private $market;
	private $manage;
	private $engineer;

	public function __construct()
	{
		$this->makeConProto();

		$Tess = clone $this->market;
		$Jacob = clone $this->market;
		$this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "tess.png");
		$this->setEmployee($Jacob, "Jacob Jones", 102, "jj101-2234", "jacob.png");
		$this->showEmployee($Jacob);

		$Ricky = clone $this->manage;
		$this->setEmployee($Ricky, "Ricky Perez", 302, "op301-1278", "olivia.png");
		$this->showEmployee($Ricky);

		$John = clone $this->engineer;
		$this->setEmployee($John, "John Jackson", 301, "jj302-1454", "john.png");
		$this->showEmployee($John);
	}

	private function makeConProto(){
		$this->market = new Marketing();
		$this->manage = new Management();
		$this->engineer = new Engineering();
	}

	private function showEmployee(IAcmePrototype $employeeNow){
		$px = $employeeNow->getPic();
		echo "<img src=$px width='150' height='150'><br/>";
		echo $employeeNow->getName() . "<br/>";
		echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br/>";
		echo $employeeNow->getID() . "<p/>";
	}
	private function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px){
		$employeeNow->setName($nm);
		$employeeNow->setDept($dp);
		$employeeNow->setID($id);
		$employeeNow->setPic("pix/$px");
	}
}
$worker = new Client();

 ?>
