<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="confirmation.css">
	<title>Confirm</title>
</head>
<body>

<div class="branding">
    <h1>birthday</h1>   
</div>
<form method="post">
	<a href="try.php">BACK</a>
	<input type="submit" name="b" value="continue">
</form>

<?php 

session_start();
$birthday="True";
$id=1;
	
	$default="False";
if (isset($_POST['b'])) {
		$_SESSION['eventSelected']=$birthday;
		$_SESSION['eventName']="Birthday";
		$_SESSION['eventId']=$id;
		echo "<script>window.location.href='try.php';</script>";
		
	}

		


 ?>
</body>
</html>