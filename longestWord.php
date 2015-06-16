<?php require_once('template/head.php'); ?>
<div id="article">
<h1><b>Longest word</b></h1>
<hr/>
<p>
The longest English word has 189.819 letters and would take you three hours and thirty minutes to pronouce it. It's the correct chemical name of Titin. Titin is a giant protein.
</p>
<p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/NFR-ADakI-c" frameborder="0" allowfullscreen></iframe>

</p>
<p>

<a data-toggle="collapse" href="#word" aria-expanded="false" aria-controls="word">
<i class="fa fa-down"></i><b><h2>The word:</h2></b>
</a>
<div class="collapse" id="word">
<div class="well">
<?php include('longestWord.txt'); ?>
</div>
</div>





</p>








</div>
<?php require_once('template/footer.php'); ?>