<?php
session_start();

$_SESSION['randNum'] = isset($_SESSION['randNum']) ? $_SESSION['randNum'] : rand(1, 100);
$_SESSION['guesses'] = isset($_SESSION['guesses']) ? $_SESSION['guesses'] : 0;

?>

<html>
<body>
<center><form action="game_check.php" method="POST">
Guess a number 1-100:<input type="text" name="userGuess"/>
<input type="submit" value="Guess"/>

</form></center>
<center><form action="game.php">
<input type="submit" value="Restart"/>
</form></center>
</body>
</html>