<?php require_once('http://downardo.com/template/head.php'); ?>

<style>
.done{
	text-decoration: line-through;	
}
</style>


<h3>Movies to watch this year</h3>
<br/>
<table class="table table-bordered">
<tr>
<th>#</th>
<th>Movie Title</th>
</tr>
<?php 

$file = file("moviesToWatch.txt");
$i = 1;
foreach($file AS $output){
	$part = explode("||", $output);	
	echo '<tr class="tableBorder">';
	echo '<td class="tableBorder">'.$i.'</td>';
	echo '<td class="'.$part[1].'">'.$part[0].'</td>';
	echo '</tr>';
	$i++;
}


?>
</table>



<?php require_once('http://downardo.com/template/footer.php'); ?>