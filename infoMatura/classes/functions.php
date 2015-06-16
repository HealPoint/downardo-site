<?php
require_once('database.php');

global $db;

function getExampleList(){
	global $db;
	$sql = "SELECT id, title, shortcut FROM examples";
	
	$array = array();
	
	if(!$result = $db->query($sql)){
		die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
	}
	
	while($row = $result->fetch_array(MYSQL_ASSOC)){
		$array[] = $row;	
	}
	
	return $array;	
}

function getExampleID($short){
	global $db;
	$sql = "SELECT id FROM examples WHERE shortcut='". $short ."' LIMIT 1";
	
	if(!$result = $db->query($sql)){
		die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
	}
	
	$row = $result->fetch_assoc();
	
	return $row['id'];
}


function containsExampleShort($short){
	global $db;
	$sql = "SELECT shortcut FROM examples WHERE shortcut='". $short ."' LIMIT 1";
	
	if(!$result = $db->query($sql)){
		die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
	}
	
	$row = $result->fetch_assoc();
	
	if($short == $row['shortcut']){
		return true;	
	}else{
		return false;	
	}
	
}

function containsExampleId($id){
	global $db;
	$sql = "SELECT id FROM examples WHERE id='". $id ."' LIMIT 1";
	
	if(!$result = $db->query($sql)){
		die('Es passierte ein Fehler bei der Abfrage ['. $db->error .']');	
	}
	
	$row = $result->fetch_assoc();
	
	if($row['id'] == $id){
		return true;	
	}else{
		return false;	
	}
	
}


?>