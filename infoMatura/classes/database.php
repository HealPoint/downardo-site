<?php

require_once('config.php');
$db = new mysqli($db_host, $db_user, $db_password, $db_database);

if($db->connect_errno > 0){
  die('Konnte nicht zur Datenbank verbinden! -> [' . $db->connect_erro . ']');
}

?>
