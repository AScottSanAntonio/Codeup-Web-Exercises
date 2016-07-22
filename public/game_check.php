<?php
session_start();

$randNum = $_SESSION['randNum'];
$userGuess=$_POST["userGuess"];
$low = "You guessed too low!";
$high = "You guessed too high!";
$correct = "Congratulations You're right!!!";

if ($userGuess<$randNum) {
        ?> <img src = "css/img/youdied.jpg"> <?php echo $low ?> <?php
        $_SESSION['guesses']++;
        }
    if ($userGuess>$randNum) {
        ?> <img src = "css/img/youdied.jpg"> <?php echo $high ?> <?php
        $_SESSION['guesses']++;
        }
    if ($userGuess==$randNum) {
        unset($_SESSION["randNum"], $_SESSION['guesses']) ?> <img src = "css/img/victory.png"><br> <?php echo $correct ?> <?php
    } else {
        echo "\n Uh oh, ";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
<a href = "game.php">Try Again</a><br>





</body>
</html>
