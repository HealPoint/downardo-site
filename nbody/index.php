<?php require_once('../template/head.php'); ?>
<script>
function radioCheck(radio){
	if(radio.value==1){
		document.getElementById("amount").disabled = false;
	}else{
		document.getElementById("amount").disabled = true;	
	}
}

</script>


<h4>nBody Simulation</h4>
<br/>

<form class="fomr-horizontal" onInput="amountOut.value=amountOf.value" method="get" action="http://downardo.com/nbody/nbody.html">

Type of Simulation:<br/>
<label>
<input type="radio" name="inputTypeOf" id="inputTypeOf1" value="1" onclick="radioCheck(this);"/>
Random System
</label>
<br/>
<label>
<input type="radio" name="inputTypeOf" id="inputTypeOf2" value="2" onclick="radioCheck(this);" checked />
Binary System
</label>
<br/>

Amount of objects(only random):
<input type="range" name="amountOf" min="2" max="1500" value="100" style="width: 30%;" disabled="true" id="amount"/>
Amount: <output name="amountOut">100</output>

<br/>

<input type="submit" value="Begin simulation" class="btn btn-default"/>


</form>



<br/>
<br/>
<br/>



<?php require_once('../template/footer.php'); ?>