<?php  
session_start();
if(isset($_POST['reset'])) {
		if($_POST['reset'] == 'counter') {
			unset($_SESSION['view_count']);
		}
}
$sessionId = session_id();
$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;
$viewCount++;
$_SESSION['view_count'] = $viewCount;
var_dump($_SESSION['view_count']);
?>
<form method = "POST">
	<button type = "submit" name = "reset" value = "counter">Reset Counter</button>
</form>


