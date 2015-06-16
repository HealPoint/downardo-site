<?php require_once('http://downardo.com/template/head.php'); ?>


<div class='sidebar'>
    <form id='set_variables_form'>
		<label for='mass1'>Mass1:</label>
        <input id='mass1' max='50' min='1' type='range' value='10'>
		<label for='mass2'>Mass2:</label>
        <input id='mass2' max='50' min='1' type='range' value='10'>
        <label for='Theta1'>Theta1 (in deg):</label>
        <input id='Theta1' max='90' min='0' type='range' value='50'>
        <label for='Theta2'>Theta2 (in deg):</label>
        <input id='Theta2' max='90' min='0' type='range' value='65'>
        <input class='submit-btn' type='submit' value='Start Simulation'>
    </form>
</div>

<canvas class='phys-canvas' height='600' id='myCanvas' width='700'></canvas>
<script src='pendulum.js'></script>




<?php require_once('http://downardo.com/template/footer.php'); ?>