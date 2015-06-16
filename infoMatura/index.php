<?php require_once('http://downardo.com/template/head.php'); ?>
<?php require_once('classes/functions.php'); ?>

<h2>Informatik Matura Beispiele</h2>
<hr/>
<h5>Dieses Projekt wird ermöglicht durch die Hilfe von <a target="_blank" href="http://reisenbauer.com">Andreas Reisenbauer</a></h5><br/>
<h4>Eine Liste von Beispielen:</h4><br/>
<ol>
<?php
$rows = getExampleList();
foreach($rows AS $row){
	echo '<li><a target="_blank" href="http://downardo.com/infoMatura/example.php?id='.$row["shortcut"].'">'.$row["title"].'</a></li>';	
}

?>
</ol>
<br/>

<?php require_once('http://downardo.com/template/footer.php'); ?>