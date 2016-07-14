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

<button id = "btnU">
				<a href = "ping.php?counter=<?= $counter +1 ?>&data=miss ">
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