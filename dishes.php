<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dish.css">
</head>
<body>
	<?php 	session_start();
	if(empty($_SESSION['email']))
{
	  echo "<script>window.location.href='register.php';</script>";

} ?>

		<div class="header">
			<h1>
				<font color="white">EVEN</font><font color="black">TRO</font>
			</h1>
		</div>

	<div class="grid-container">

		<div class="foods">
			<div class="Thai">
					<img src="thai1.jpg" id="thai">
			</div>
			<div class="content">
				<h2>Thai</h2>
				<p>
					<table>
						<tr>
							<td>
									<li>Tom Yum Goong</li>
									<li>Som Tum</li>
									<li>Tom kha kai</li>
									<li>Gaeng Daeng</li>
									<li>Pad Thai</li>
							</td>
							<td>
									<li>Khao Pad</li>
									<li>Pad Krapow Moo Saap</li>
									<li>Gaeng keow Wan Kai</li>
									<li>Yam Nua</li>
									<li>Kai Med Ma Muang</li>
								</td>
						</tr>
					</table>

					<h5>Pakage:  INR	</h5>
				</p>
				<form method="post" onsubmit="return valid1()">
					<input type="text" id="guestno1" name="guestno" placeholder="No of guest">
					<input type="submit" name="thai" value="Select">
				</form>
			</div>
		</div>

		<div class="foods">
			<div class="chin">
					<img src="chin1.jpg" id="chin">
			</div>
			<div class="content">
				<h2>Chinese</h2>
				<p>
					<table>
						<tr>
							<td>
									<li>Dim Sums</li>
									<li>Hot & Sour Soup</li>
									<li>Quick Noodles</li>
									<li>Szechwan Chilli Chicken</li>
									<li>Spring Rolls</li>
							</td>
							<td>
									<li>Stir Fried Tofu Rice</li>
									<li>Shitake Fried Rice</li>
									<li>Chicken Chestnuts</li>
									<li>Date Pancakes</li>
									<li>Wok Tossed Veggies</li>
								</td>
						</tr>
					</table>

					<h5>Pakage:  INR	</h5>
				</p>
				<form method="post" onsubmit="return valid2()">
					<input type="text" id="guestno2" name="guestno" placeholder="No of guest">
					<input type="submit" name="chin" value="Select">
				</form>
			</div>
		</div>

		<div class="foods">
			<div class="northind">
					<img src="ni1.jpg" id="northind">
			</div>
			<div class="content">
				<h2>North Indian</h2>
				<p>
					<table>
						<tr>
							<td>
									<li>Aloo Somosa</li>
									<li>Chole Bhature</li>
									<li>Dahi Bhalla</li>
									<li>Rogan Josh</li>
									<li>Stuffed Bati</li>
							</td>
							<td>
									<li>Chicken Dum Biryani</li>
									<li>Nihari Gosht</li>
									<li>Butter Chicken</li>
									<li>Malai ki Kheer</li>
									<li>Almood Malai Kulfi</li>
								</td>
						</tr>
					</table>

					<h5>Pakage:  INR	</h5>
				</p>
				<form method="post" onsubmit="return valid3()">
					<input type="text" id="guestno3" name="guestno" placeholder="No of guest">
					<input type="submit" name="ni" value="Select">
				</form>
			</div>
		</div>
		
		<div class="foods">
			<div class="southind">
					<img src="si1.jpeg" id="southind">
			</div>
			<div class="content">
				<h2>South Indian</h2>
				<p>
					<table>
						<tr>
							<td>
									<li>Dosa</li>
									<li>Sambar</li>
									<li>Idli</li>
									<li>Rasam</li>
							</td>
							<td>
									<li>Uttapam</li>
									<li>Vada</li>
									<li>Dhokla</li>
									<li>Pav bhaji</li>
								</td>
						</tr>
					</table>

					<h5>Pakage:  INR	</h5>
				</p>
				<form method="post" onsubmit="return valid4()">
						<input type="text" id="guestno4" name="guestno" placeholder="No of guest">
						<input type="submit" name="si" value="Select">
				</form>
			</div>
		</div>

		<div class="foods">
			<div class="bengali">
					<img src="ben1.jpg" id="ben">
			</div>
			<div class="content">
				<h2>Bengali</h2>
				<p>
					<table>
						<tr>
							<td>
									<li>Bhapaa Aloo</li>
									<li>Chingri Malai Curry</li>
									<li>Sorsebata Ilish Mach</li>
									<li>Bangali Lamb Curry</li>
									<li>Doi Maach</li>
							</td>
							<td>
						
									<li>Baigun Bhajja</li>
									<li>Dhokkar Dalsna</li>
									<li>Chor Chori</li>
									<li>Patishapta</li>
									<li>Sandesh</li>
								</td>
						</tr>
					</table>

					<h5>Pakage:  INR	</h5>
				</p>
				<form method="post" onsubmit="return valid5()">
					<input type="text" id="guestno5" name="guestno" placeholder="No of guest">
						<input type="submit" name="ben" value="Select">
				</form>
			</div>
		</div>


	</div>
<script type="text/javascript" src="dish.js"></script>


<?php 
	$thai=100;
	$chinese=200;
	$nIndian=300;
	$sIndian=400;
	$bengali=600;
	$default=0;

	if (isset($_POST['ben'])) {
		$id=5;
		$noguest=$_POST['guestno'];
		$_SESSION['guest']=$noguest;
		$_SESSION['dishName']="Bengali";
		$_SESSION['dishId']=$id;
		$_SESSION['dishPrice']=$bengali;
		echo "<script>window.location.href='book.php';</script>";
	}
	else if (isset($_POST['si'])) {
		$id=4;
		$noguest=$_POST['guestno'];
		$_SESSION['dishPrice']=$sIndian;
		$_SESSION['dishName']="South Indian";
		$_SESSION['dishId']=$id;
		$_SESSION['guest']=$noguest;
    	echo "<script>window.location.href='book.php';</script>";
	}
	else if (isset($_POST['ni'])) {
		$id=3;
		$noguest=$_POST['guestno'];
		$_SESSION['guest']=$noguest;
		$_SESSION['dishName']="North Indian";
		$_SESSION['dishId']=$id;
		$_SESSION['dishPrice']=$nIndian;
    	echo "<script>window.location.href='book.php';</script>";
	}
	else if (isset($_POST['chin'])) {
		$id=2;
		$noguest=$_POST['guestno'];
		$_SESSION['guest']=$noguest;
		$_SESSION['dishName']="Chinese";
		$_SESSION['dishId']=$id;
		$_SESSION['dishPrice']=$chinese;
    	echo "<script>window.location.href='book.php';</script>";

	}
	else if (isset($_POST['thai'])) {
		$id=1;
		$noguest=$_POST['guestno'];
		$_SESSION['guest']=$noguest;
		$_SESSION['dishName']="Thai";
		$_SESSION['dishId']=$id;
		$_SESSION['dishPrice']=$thai;
    	echo "<script>window.location.href='book.php';</script>";
	}
	else{
		$_SESSION['dishPrice']=$default;
		$_SESSION['guest']=0;
		$_SESSION['dishName']="No Dish Selected";
	}
 ?>
</body>
</html>