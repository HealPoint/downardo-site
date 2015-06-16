<?php require_once('http://downardo.com/template/head.php'); ?>
<?php require_once('http://downardo.com/template/highLighter.php'); ?>
<?php require_once('classes/Example.class.php'); ?>
<?php require_once('classes/ExampleCode.class.php'); ?>
<?php require_once('classes/functions.php'); ?>

<?php
if(!empty($_GET['id']) && containsExampleShort($_GET['id'])){
	$obj = new Example(getExampleID($_GET['id']));
		
?>




<h2><?php $obj->getTitle();?></h2>
<hr/>
<br/>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Informationen
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	<?php echo $obj->getInformation(); ?>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Demo
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      <?php echo $obj->getDemo(); ?>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          JavaScript
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      	<?php
		$js = $obj->getJS();
		$i = 1;
		foreach($js->getSourceCode() AS $code){
			echo '<br/>Methode '. $i . ': <br/>';
			echo '<script type="syntaxhighlighter" class="brush:'.$js->getLanguageShort().'">';
			echo $code;
			echo '</script>';
			echo '<br/><br/>';
			$i = $i + 1;			
		}
		
		
		?>
     </div> 
   </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          PHP
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      	<?php
		$php = $obj->getPHP();
		$i = 1;
		foreach($php->getSourceCode() AS $code){
			echo '<br/>Methode '. $i . ': <br/>';
			echo '<script type="syntaxhighlighter" class="brush:'.$php->getLanguageShort().'">';
			echo $code;
			echo '</script>';
			echo '<br/><br/>';
			$i++;			
		}
		?>
     </div> 
   </div>
  </div>
  
  
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          Java
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
      <?php
		$java = $obj->getJava();
		$i = 1;
		foreach($java->getSourceCode() AS $code){
			echo '<br/>Methode '. $i . ': <br/>';
			echo '<script type="syntaxhighlighter" class="brush:'.$java->getLanguageShort().'">';
			echo $code;
			echo '</script>';
			echo '<br/><br/>';
			$i++;
		}
		?>
        
     </div> 
   </div>
  </div>
  
  
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          Visual Basic
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
      	<?php
		$vb = $obj->getVB();
		$i = 1;
		foreach($vb->getSourceCode() AS $code){
			echo '<br/>Methode '. $i . ': <br/>';
			echo '<script type="syntaxhighlighter" class="brush:'.$vb->getLanguageShort().'">';
			echo $code;
			echo '</script>';
			echo '<br/><br/>';
			$i++;
		}
		?>
     </div> 
   </div>
  </div>
  
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          Python
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
      	<?php
		$py = $obj->getPY();
		$i = 1;
		foreach($py->getSourceCode() AS $code){
			echo '<br/>Methode '. $i . ': <br/>';
			echo '<script type="syntaxhighlighter" class="brush:'.$py->getLanguageShort().'">';
			echo $code;
			echo '</script>';
			echo '<br/><br/>';
			$i++;
		}
		?>
     </div> 
   </div>
  </div>
  
  </div>
<script type="text/javascript">
     SyntaxHighlighter.all()
</script>

<?php 
} ?>

<?php require_once('http://downardo.com/template/footer.php'); ?>
<?php require_once('http://downardo.com/template/highLighter.php'); ?>