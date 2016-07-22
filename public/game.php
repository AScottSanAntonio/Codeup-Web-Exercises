<?php
session_start();

$_SESSION['randNum'] = isset($_SESSION['randNum']) ? $_SESSION['randNum'] : rand(1, 100);
$_SESSION['guesses'] = isset($_SESSION['guesses']) ? $_SESSION['guesses'] : 0;

?>

<html>
<head>
    <style>
        #restart {
            position: absolute;
            top: 350px;
            left: 134px;
        }

        #guessBlock {
            text-align: center;
            position: absolute;
            top: 308px;
            left: 20px;
            border: 1px solid black;
            text-indent: 2px;
        }

        #firstDisplay {
            width: 300px;
            height: 300px;
            background-image: url("css/img/mimic.png");
            background-repeat: no-repeat;
            background-size: 100%;
        }

    </style>
</head>
<body>
<div id = "firstDisplay">
<center><form id = "guessBlock" action="game_check.php" method="POST">
Guess a number 1-100, or the Mimic eats you...<br><input type="text" name="userGuess"/>
<input type="submit" value="Guess"/>

</form></center>
<center><form action="game.php">
<input id = "restart" type="submit" value="Restart"/>
</form></center>
</div>
</body>
</html>