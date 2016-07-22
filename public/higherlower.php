<?php

    include('config.php');
    if(!$_SESSION['username']) {
        header("Location: index.php");
    }

    Menu();
    isOnline();

    $num1 = rand(1, 100);

    if(isset($_POST)) {
        if($_POST['higher']) {
            $num2 = rand(1, 100);
            $oldNum = intval($_POST['num1']);
                if($num2 > $oldNum) {
                    echo "You win! Your number:".$oldNum." , and the new number is: ".$num2;
                }
        }
    }

    ?>
<html>
<head>
    <title> Gamble </title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <form method="POST">
        <input type="Hidden" value="<?= $num1 ?>" name="num1"><?= $num1 ?><br>
        <input type="Submit" name="higher" value="Higher">
        <input type="Submit" name="lower" value="Lower">
    </form>
</body>
</html>