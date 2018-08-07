<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>
<?php session_start();
						 if(empty($_SESSION['email']))
{
	  echo "<script>window.location.href='register.php';</script>";

} ?>
	<div class="header">
			<h1>
				<font color="white">EVEN</font><font color="black">TRO</font>
				<a style="float: right; font-size: 25px;" href="logout.php">LogOut</a>
			</h1>
		</div>
	<div>
		<div><h3>You're almost done!</h3></div>
		<center>
		<div class="form">
			<form method="post">
				<div class="container">
					<h1>Your Event: <?php 

						if($_SESSION['eventSelected']=="False"){
							echo "<a href='try.php'>Select Event</a>";
						}else{
							echo $_SESSION['eventName'];
						}

						?>
						
					</h1>
					<h2>Banquate hall choosed: <?php echo $_SESSION['locName']?></h2>
					Dish choosed: <?php 
						if($_SESSION['dishPrice']==0){
							echo "<a href='dishes.php'>Select Dish</a>";
						}
						else{
							echo $_SESSION['dishName'];
						}

					?><br>
					Total no of guest: <?php echo $_SESSION['guest']?><br>
					Location price: <?php echo $_SESSION['locPrice']?><br>
					Number Of Days: <?php echo $_SESSION['days']?><br>
					 <?php 
					 if($_SESSION['dishPrice']==0){
							echo "<a href='dishes.php'>Select dish</a>";
						}else{

							$grandTot=$_SESSION['locPrice']*$_SESSION['dishPrice']*$_SESSION['guest']*$_SESSION['days'];
							echo "Grand Total: ".$grandTot;
						}

					?><br>
				</div>

				<div class="container">
						<center>Customer details<font color="orange">*</font></center>
						<div>
							<input type="email" name="email" value="<?php echo $_SESSION['email'];?>" disabled>
						</div>
						<div>
							<input type="text" name="fnm" placeholder="Full Name*" required>
						</div>
						<div>
							<select required>
								<option value="91">+91</option>
								<option value="2">+1</option>
								<option value="1">+92</option>
							</select>
							<input type="text" name="phno" required>
						</div>
				</div>
				<div class="container">
					<center>optional</center>
						<div>
							<input type="text" name="sreq" placeholder="Special Request?"><br>
							<h6>E.g. dietary requirements, disabilities, etc.</h6>
						</div>
						<div>
							<input type="text" name="promo" placeholder="Have a promo code?">
						</div>
				</div>
						<div class="tmc">
							<input type="checkbox" required>I agree to Eventro's <a href="">terms & condition</a> and <a href="">privacy policy.</a>
						</div>
						<div>
							<input type="submit" name="book" value="Reserve Now">
						</div>
				
			</form>
		</div></center>
	</div>
	<?php 

		if(isset($_POST['book']))
{
	$locationName=$_SESSION['locName'];
	$phno=$_POST['phno'];
	$locId=$_SESSION['locId'];
	$dishId=$_SESSION['dishId'];
	$guest=$_SESSION['guest'];
	$price=$grandTot;
	$email=$_SESSION['email'];
	$checkin=$_SESSION['checkin'];
	$checkout=$_SESSION['checkout'];

	//change 4th parameter to database name
	$con=mysqli_connect("localhost","root","","eventro");
	//change table names
	$qer=mysqli_query($con,"insert into evbook values(NULL,'$locationName','$email','$phno','$locId','$dishId','$guest','$checkin','$checkout','$price')");

	if($qer)
	{
		 echo "<script>alert('Hurray!!! Booking Successful. Dont Miss The Event.');</script>";
	
		echo "<script>window.location.href='try.php';</script>";
		
		exit;
	}
	
	else
	{
		echo "<script>alert('unsuccessfull booking');</script>";
	}
}


	 ?>
</body>

<footer>
	l
</footer>
</html>