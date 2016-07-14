<?php  
	if (isset($_GET['counter'])) {
		$counter = $_GET ['counter'];
	} else {
		$counter = 0;
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>GetPost</title>
	</head>
		<body>
		<h1 id = "countdisplay"> Score: <?php echo $counter; ?></h1>
		
			<button id = "btnU">
				<a href = "?counter=<?= $counter +1 ?>">
					Up
				</a>
			</button>

			<button id = "btnD">
				<a href = "?counter=<?= $counter -1 ?>">
					Down
				</a>
			</button>
		


	</body>
</html>