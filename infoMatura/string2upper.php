<?php require_once('http://downardo.com/template/head.php'); ?>
<?php require_once('http://downardo.com/template/highLighter.php'); ?>
<h2>String2UpperCase</h2>
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
      	Irgendwelche Informationen ...................................................
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
      Input-Text:<br/>
      <textarea id="inputText" style="resize:none; width:100%; height:100px;">
      
      </textarea>
      <br/>
      <br/>
      <br/>
      Output-Text:<br/>
      <textarea id="outputText" style="resize:none; width:100%; height:100px;">
      
      </textarea>
      
      	<script type="text/javascript">
		
		function convert(){
			var text = document.getElementById("inputText").value;
			var newText = "";
			
			for(var i=0;i<text.length;i++){
				var char = text[i];
				var charCode = char.charCodeAt(0);
				
				if((97<=charCode && charCode<=122) || (charCode == 228 || charCode == 246 || charCode == 252)){
					char = 	String.fromCharCode((charCode-32));
				}
				
				newText = newText + char;
			}
			
			document.getElementById("outputText").value = newText;
		}
		
		setInterval(function () {convert();}, 500);
		</script>
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
      	Methode 1(einfache Methode):<br/>
        <script type="syntaxhighlighter" class="brush:js">
			var string = "Hello World!";
            var newString = "";
            
            newString = string.toUpperCase();
		</script>
        <br/>
        <br/>
        Methode 2:<br/>
        <script type="syntaxhighlighter" class="brush:js">
        	function convert(text){
				var newText = "";
				
				for(var i=0;i<text.length;i++){
					var char = text[i];
					var charCode = char.charCodeAt(0);
					
					if((97<=charCode && charCode<=122) || (charCode == 228 || charCode == 246 || charCode == 252)){
						char = 	String.fromCharCode((charCode-32));
					}
					
					newText = newText + char;
				}
				
				return newText;
			}
		
        </script>
        
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
      	Methode 1(einfache Methode):<br/>
        <script type="syntaxhighlighter" class="brush:php">
			$str = "Hello World!";
			$str = strtoupper($str);
		</script>
        <br/>
        <br/>
        Methode 2:<br/>
        <script type="syntaxhighlighter" class="brush:php">
        	function convert($text){
				$newText = "";
				
				for($i=0;$i<strlen($text);$i++){
					$char = $text[i];
					$charCode = ord($char);
					
					if((97<=$charCode && $charCode<=122) || ($charCode == 228 || $charCode == 246 || $charCode == 252)){
						char = 	chr(($charCode-32));
					}
					
					newText .= char;
				}
				
				return $newText;
			}
		
        </script>
        
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
      	Methode 1(einfache Methode):<br/>
        <script type="syntaxhighlighter" class="brush:java">
			String text = "Hello World!";
			String newText = text.toUpperCase();
		</script>
        <br/>
        <br/>
        Methode 2:<br/>
        <script type="syntaxhighlighter" class="brush:java">
			public static String toUpperCase(String text){
				String newText = "";
					for (int i = 0; i< text.length(); i++){
						char textChar = text.charAt(i);
						
						if ((97<=textChar && textChar<=122) || (textChar == 228 || textChar == 246 || textChar == 252)){
							textChar = (char)( (textChar - 32) ); 
						}
						
					newText = newText + Character.toString(textChar);
				}	
					
				return newText;
			}
        </script>
        
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
      	Methode 1:<br/>
      	<script type="syntaxhighlighter" class="brush:vb">
			dim a,b as string
			a=Text1.text
			b=Ucase(a)
			Text2.text=b
		</script>
        <br/><br/>
        Methode 2:<br/>
        <script type="syntaxhighlighter" class="brush:vb">
			a$=text1.text
			text2.text=ucase(a$)
		</script>
     </div> 
   </div>
  </div>
  
  </div>
<?php require_once('http://downardo.com/template/footer.php'); ?>
<script type="text/javascript">
     SyntaxHighlighter.all()
</script>