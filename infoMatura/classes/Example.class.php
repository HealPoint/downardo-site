<?php
require_once('database.php');
require_once('ExampleCode.class.php');


class Example{
	
	private $id;
	private $title;
	private $shortcut;
	private $information;
	
	private $democode;
	
	private $js;
	private $php;
	private $java;
	private $vb;
	private $py;
	
	public function __construct($id){
		$this->id = $id;
		$this->init();
	}
	
	private function init(){
		global $db;
		$sql = "SELECT title, shortcut, information, demo_code FROM examples WHERE id='" . $this->id . "' LIMIT 1";
		
		if(!$result = $db->query($sql)){
			die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
		}
		
		$row = $result->fetch_assoc();
		
		$this->title = $row["title"];
		$this->shortcut = $row["shortcut"];
		$this->information = $row["information"];
		$this->demo_code = $row["demo_code"];
		
		$this->js = new ExampleCode($this->id, 1);
		$this->php = new ExampleCode($this->id, 2);
		$this->java = new ExampleCode($this->id, 3);
		$this->vb = new ExampleCode($this->id, 4);
		$this->py = new ExampleCode($this->id, 5);
		
	}
	
	public function getJS(){
		return $this->js;	
	}
	
	public function getPHP(){
		return $this->php;	
	}
	
	public function getJava(){
		return $this->java;	
	}
	
	public function getVB(){
		return $this->vb;	
	}
	
	public function getPY(){
		return $this->py;	
	}
	
	public function getID(){
		return $this->id;	
	}
	
	public function getTitle(){
		return $this->title;	
	}
	
	public function getShortCut(){
		return $this->shortcut;	
	}
	
	public function getInformation(){
		return $this->information;	
	}
	
	public function getDemo(){
		return $this->demo_code;	
	}
}


?>