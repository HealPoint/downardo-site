<?php

require_once('database.php');

class ExampleCode{
		
	private $example_id;
	private $language_id;	
		
	private $language_shortcut;	
	private $code;	
		
	public function __construct($example_id, $language_id){
		$this->example_id = $example_id;
		$this->language_id = $language_id;
		$this->init();
	}
	
	private function init(){
		global $db;
		 
		$sql = "SELECT shortcut FROM examples_languages WHERE id='". $this->language_id ."' LIMIT 1";
		
		if(!$result = $db->query($sql)){
			die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
		}
		
		$row = $result->fetch_assoc();
		
		$this->language_shortcut = $row["shortcut"];
		
		$sql = "SELECT source_code FROM examples_methods WHERE example_id='". $this->example_id ."' AND language_id='". $this->language_id ."' ORDER BY rank";
		
		if(!$result = $db->query($sql)){
			die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
		}
		$i = 0;
		$codeLOCAL = array();
		while($row = $result->fetch_assoc()){
			$codeLOCAL[$i] = $row["source_code"];
			$i = $i + 1;	
		}
		
		$this->code = array();
		$this->code = $codeLOCAL;
	}
	
	public function getLanguageShort(){
		return $this->language_shortcut;
	}
	
	public function getSourceCode(){
		return $this->code;	
	}

}



?>