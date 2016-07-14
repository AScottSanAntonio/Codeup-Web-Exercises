<?php  
function pageController () {
		$data = [];
	if (isset($_GET['counter'])) {
		$data['counter'] = $_GET ['counter'];
		
	} else {
		$data['counter'] = 0;
		
	}

	return $data;

}
	extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
</head>
<body>
		<h1 id = "display"> 
			<?= $counter; ?>
		</h1>
		<h2>PONG</h2>

			<button id = "btnU">
				<a href = "ping.php?counter=<?= $counter +1 ?>">
					Hit
				</a>
			</button>

			<button id = "btnD">
				<a href = "ping.php">
					Miss
				</a>
			</button>



</body>
</html>