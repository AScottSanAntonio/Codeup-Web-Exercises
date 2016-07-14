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
	<title>Ping</title>
</head>
<body>

			<button id = "btnU">
				<a href = "pong.php?counter=<?= $counter +1 ?>&data">
					Hit
				</a>
			</button>

			<button id = "btnD">
				<a href = "pong.php">
					Miss
				</a>
			</button>



</body>
</html>