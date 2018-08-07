<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="confirmation.css">
	<title>party</title>
</head>
<body>

<div class="branding">
    <h1>party</h1>   
</div>
<form method="post">
	<a href="try.php">BACK</a>
	<input type="submit" name="b" value="continue">
</form>
<?php 

session_start();
$party="True";
$id=3;
	
	$default="False";
if (isset($_POST['b'])) {
		$_SESSION['eventSelected']=$party;
		$_SESSION['eventName']="Party";
		$_SESSION['eventId']=$id;
		echo "<script>window.location.href='try.php';</script>";
		
	}

		


 ?>
</body>
</html>