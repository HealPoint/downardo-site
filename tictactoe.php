<?php require_once('http://downardo.com/template/head.php'); ?>
<link rel="stylesheet" href="http://downardo.com/tictactoe.css">

<br/>
<center>



<h2> Tic Tac Toe </h2><br/>
<h3 id="stats">Wins: 0 Loses: 0 Ties: 0</h3>
<br/>

<div id="pitch-out" class="">

<table id="pitch">
<tr class="row">
<td id="a1"></td>
<td id="a2"></td>
<td id="a3"></td>
</tr>
<tr class="row">
<td id="b1"></td>
<td id="b2"></td>
<td id="b3"></td>
</tr>
<tr class="row">
<td id="c1"></td>
<td id="c2"></td>
<td id="c3"></td>
</tr>
</table>
</div>
<br/>
<p>
<button id="restart" class="btn btn-default">Restart</button>
</p>
</center>
<br/>



<script>

// VARIABLES

var human = 'x'; // turn = 0
var computer = 'o'; // turn = 1
var compMove;
var turn = 0; // toggles btw 0 and 1 for switching turns

var wins = 0;
var loses = 0;
var ties = 0;

var boardCheck; // function to check value in each cell
var a1 = ""; // value within each cell
var a2 = "";
var a3 = "";
var b1 = "";
var b2 = "";
var b3 = "";
var c1 = "";
var c2 = "";
var c3 = "";
var checkWin; // function that checks the board for winning combo
var xWin = false; // true if X wins 
var oWin = false; // true if O wins 
var winAlert; // function that declares winner and restarts game

var newGame;
var clearBoard;


 
var newGame = function () {

    a1 = $('#a1').html("");
    b1 = $('#b1').html("");
    c1 = $('#c1').html("");
    a2 = $('#a2').html("");
    b2 = $('#b2').html("");
    c2 = $('#c2').html("");
    a3 = $('#a3').html("");
    b3 = $('#b3').html("");
    c3 = $('#c3').html("");
	a1 = $('#a1').text("");
    b1 = $('#b1').text("");
    c1 = $('#c1').text("");
    a2 = $('#a2').text("");
    b2 = $('#b2').text("");
    c2 = $('#c2').text("");
    a3 = $('#a3').text("");
    b3 = $('#b3').text("");
    c3 = $('#c3').text("");


    $('td').one('click', function (event) {
        if (turn == 0) {
			boardCheck();
			if($(this).text() == ""){
				$(this).text(human);
				boardCheck();
				checkWin();
				turn == 1;
				compMove();
				boardCheck();
			checkWin();
			}
        }
    });
};

$(document).ready(function () {
    newGame();
});

// COMP MOVE AI DETECTS IF THERE ARE TWO IN A ROW NEXT TO AN EMPTY CELL AND PLACES MOVE THERE
var compMove = function () {
    if (a1 == "" && ((a3 == "x" && a2 == "x") || (c3 == "x" && b2 == "x") || (c1 == "x" && b1 == "x"))) {
        $('#a1').text("o");
        turn = 0;
    } else {
      if (a2 == "" && ((a1 == "x" && a3 == "x") || (c2 == "x" && b2 == "x"))) {
        $('#a2').text("o");
        turn = 0;
        }
        else{
        if (a3 == "" && ((a1 == "x" && a2 == "x") || (c1 == "x" && b2 == "x") || (c3 == "x" && b3 == "x"))) {
            $('#a3').text("o");
            turn = 0;
        }
            else{
            if (c3 == "" && ((c1 == "x" && c2 == "x") || (a1 == "x" && b2 == "x") || (a3 == "x" && b3 == "x"))) {
                $('#c3').text("o");
                turn = 0;
        }
                else{
                if (c1 == "" && ((c3 == "x" && c2 == "x") || (a3 == "x" && b2 == "x") || (a1 == "x" && b1 == "x"))) {
                    $('#c1').text("o");
                    turn = 0;
        }
                    else{
                    if (c2 == "" && ((c3 == "x" && c1 == "x") || (a2 == "x" && b2 == "x"))) {
                        $('#c2').text("o");
                        turn = 0;
        }
                        else{
                        if (b1 == "" && ((b3 == "x" && b2 == "x") || (a1 == "x" && c1 == "x"))) {
                            $('#b1').text("o");
                            turn = 0;
        }
                            else{
                            if (b3 == "" && ((a3 == "x" && c3 == "x") || (b2 == "x" && b1 == "x"))) {
                                $('#b3').text("o");
                                turn = 0;
        }
                                else{
                                if (b2 == "" && ((a3 == "x" && c1 == "x") || (c3 == "x" && a1 == "x") || (b3 == "x" && b1 == "x") || (c2 == "x" && a2 == "x"))) {
                                    $('#b2').text("o");
                                    turn = 0;
        }
                                   else{ // IF NO OPP TO BLOCK A WIN, THEN PLAY IN ONE OF THESE SQUARES
                                    if (b2 == "") {
                                        $('#b2').text("o");
                                        turn = 0;
                                       
                                    }
                                        else{
                                        if (a1 == "") {
                                            $('#a1').text("o");
                                            turn = 0;
                                            
                                    }
                                            else{
                                            if (c3 == "") {
                                            $('#c3').text("o");
                                            turn = 0;
                                          
                                    } 
                                                else {
                                                if (c2 == "") {
                                            $('#c2').text("o");
                                            turn = 0;
                                          
                                    }
                                                    else{
                                                    if (b1 == "") {
                                            $('#b1').text("o");
                                            turn = 0;
                                          
                                    }
                                                    }
                                                }
                                            }
                                   
                                    
                                        }
                                   }
                                }
                            }
                        }
                    }
                }
            }
        }
    }   
};


boardCheck = function () {
    a1 = $('#a1').html();
    a2 = $('#a2').html();
    a3 = $('#a3').html();
    b1 = $('#b1').html();
    b2 = $('#b2').html();
    b3 = $('#b3').html();
    c1 = $('#c1').html();
    c2 = $('#c2').html();
    c3 = $('#c3').html();
};

checkWin = function () {
    if ((a1 == a2 && a1 == a3 && (a1 == "x")) || //first row
    (b1 == b2 && b1 == b3 && (b1 == "x")) || //second row
    (c1 == c2 && c1 == c3 && (c1 == "x")) || //third row
    (a1 == b1 && a1 == c1 && (a1 == "x")) || //first column
    (a2 == b2 && a2 == c2 && (a2 == "x")) || //second column
    (a3 == b3 && a3 == c3 && (a3 == "x")) || //third column
    (a1 == b2 && a1 == c3 && (a1 == "x")) || //diagonal 1
    (a3 == b2 && a3 == c1 && (a3 == "x")) //diagonal 2
    ) {
        xWin = true;
		wins = wins + 1;
        winAlert();

    } else {
        if ((a1 == a2 && a1 == a3 && (a1 == "o")) || //first row
        (b1 == b2 && b1 == b3 && (b1 == "o")) || //second row
        (c1 == c2 && c1 == c3 && (c1 == "o")) || //third row
        (a1 == b1 && a1 == c1 && (a1 == "o")) || //first column
        (a2 == b2 && a2 == c2 && (a2 == "o")) || //second column
        (a3 == b3 && a3 == c3 && (a3 == "o")) || //third column
        (a1 == b2 && a1 == c3 && (a1 == "o")) || //diagonal 1
        (a3 == b2 && a3 == c1 && (a3 == "o")) //diagonal 2
        ) {
            oWin = true;
			loses = loses + 1;
            winAlert();

        } else {
            if (((a1 == "x") || (a1 == "o")) && ((b1 == "x") || (b1 == "o")) && ((c1 == "x") || (c1 == "o")) && ((a2 == "x") || (a2 == "o")) && ((b2 == "x") || (b2 == "o")) && ((c2 == "x") || (c2 == "o")) && ((a3 == "x") || (a3 == "o")) && ((b3 == "x") || (b3 == "o")) && ((c3 == "x") || (c3 == "o"))) {
                alert("It's a tie!");
				ties = ties + 1;
				clearBoard();
            }
        }
    }
	
	
	//Print Stats
	$('#stats').text("Wins: " + wins + " Loses: " + loses + " Ties: " + ties);
	
};


var winAlert = function () {
    if (xWin == true) {
        alert("You won!");
        clearBoard();
    } else {
        if (oWin == true) {
            alert("Sorry, you lose!");
            clearBoard();
        }
    }
};

// NEWGAME BUTTON CLEARS THE BOARD, RESTARTS GAME, AND RESETS THE WINS
$('#restart').click(function (event) {
	clearBoard();
});

var clearBoard = function(){
	xWin = false;
    oWin = false;
    newGame();
    a1 = $('#a1').html("");
    b1 = $('#b1').html("");
    c1 = $('#c1').html("");
    a2 = $('#a2').html("");
    b2 = $('#b2').html("");
    c2 = $('#c2').html("");
    a3 = $('#a3').html("");
    b3 = $('#b3').html("");
    c3 = $('#c3').html("");
	a1 = $('#a1').text("");
    b1 = $('#b1').text("");
    c1 = $('#c1').text("");
    a2 = $('#a2').text("");
    b2 = $('#b2').text("");
    c2 = $('#c2').text("");
    a3 = $('#a3').text("");
    b3 = $('#b3').text("");
    c3 = $('#c3').text("");
//    location.reload(); // WITHOUT THIS, THERE'S A BUG WHICH PLACES MULTIPLE 0'S ON ALL GAMES AFTER THE FIRST

}

</script>







<?php require_once('http://downardo.com/template/footer.php'); ?>