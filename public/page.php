<?php  
require 'php/db_connect.php';


$sql = "SELECT * FROM national_parks;";
$sql .= "LIMIT 4 OFFSET 3;";
$stmt = $dbc->query('SELECT * FROM national_parks');







?>


<!DOCTYPE html>
<html>
<head>
	<title>Parks Page</title>
</head>
<body>
	<ul>
		<li><?php print_r($stmt->fetch(PDO::FETCH_ASSOC));; ?></li>
		<li><?php print_r($stmt->fetch(PDO::FETCH_ASSOC));; ?></li>
		<li><?php print_r($stmt->fetch(PDO::FETCH_ASSOC));; ?></li>
	</ul>
</body>
</html>