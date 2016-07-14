<?php 
 	function emptymyVowels() {
 		$derp = ['a','b','c','d','e','f','g','h','i'];
		$vowels = ['a','e','i','o','u'];
		$length = count($derp);
		$xcount = 0;
 		for($count = 0; $count < $length; $count++) {
 			$remaining = str_replace($vowels, "", $derp[$count]);
 			echo "{$remaining}<br />";
 			$xcount++;
 		}
 	}
 	emptymyVowels();
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Emptying my vowels.</title>
 </head>
 <body>
 	
 
 </body>
 </html>