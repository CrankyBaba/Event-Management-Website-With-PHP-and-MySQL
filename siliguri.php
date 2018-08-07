<!DOCTYPE html>
<?php 
//I dont know how i fixed it but please dont mess with this shit!!!!
		$con=mysqli_connect("localhost","root","","eventro");
		session_start();
		if(empty($_SESSION['email']))
{
	  echo "<script>window.location.href='register.php';</script>";

}

							$cin=15000;
							$forresta=18000;
							$raj=16000;
							$mount=19000;
							$savoke=20000;
							$default=0;
							if (isset($_POST['cin'])) {
								$id=5;  
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
 									$qer=mysqli_query($con,"select checkin,checkout from evbook ");
									$res=mysqli_fetch_assoc($qer);
									$begin = new DateTime( $res['checkin'] );
									$end   = new DateTime( $res['checkout'] );
									for($i = $begin; $i <= $end; $i->modify('+1 day')){
    									$data[]= $i->format("Y-m-d");
									}
									while($res=mysqli_fetch_assoc($qer)) {
										$locArray[]=$res['elid'];

									}
									if (in_array($checkIn, $data)&&in_array($id, $locArray)) {
										echo "<script>alert('uavailable');</script>";
									}
									else if(in_array($checkOut, $data)&&in_array($id, $locArray)){
										echo "<script> alert('unavailable')</script>";
										$_SESSION['locPrice']=$default;
									}
						        else{
						        	$_SESSION['locPrice']=$cin;
						        	$_SESSION['locName']="The Cindrerella Hotel";
						        	$_SESSION['checkin']=$checkIn;
						        	$_SESSION['checkout']=$checkOut;
						        	$_SESSION['locId']=$id;
						        	$_SESSION['days']=$diff;
									// header("Location:book.php");
									echo "<script>window.location.href='dishes.php';</script>";

								}

							}
							else if (isset($_POST['forresta'])) {
								$id=6;
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1; 									
								$qer=mysqli_query($con,"select checkin,checkout from evbook ");
									$res=mysqli_fetch_assoc($qer);
									$begin = new DateTime( $res['checkin'] );
									$end   = new DateTime( $res['checkout'] );
									for($i = $begin; $i <= $end; $i->modify('+1 day')){
    									$data[]= $i->format("Y-m-d");
									}
									while($res=mysqli_fetch_assoc($qer)) {
										$locArray[]=$res['elid'];

									}
									if (in_array($checkIn, $data)&&in_array($id, $locArray)) {
										echo "<script>alert('uavailable');</script>";
									}
									else if(in_array($checkOut, $data)&&in_array($id, $locArray)){
										echo "<script> alert('unavailable')</script>";
										$_SESSION['locPrice']=$default;
									}
								else
								{
									$_SESSION['locPrice']=$forresta;
									$_SESSION['locName']="The Forresta";
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['locId']=$id;
									$_SESSION['days']=$diff;
						    		// header("Location:book.php");
						    		echo "<script>window.location.href='dishes.php';</script>";

									}
							}
							else if (isset($_POST['raj'])) {
								$id=7;
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
 									$qer=mysqli_query($con,"select checkin,checkout from evbook ");
									$res=mysqli_fetch_assoc($qer);
									$begin = new DateTime( $res['checkin'] );
									$end   = new DateTime( $res['checkout'] );
									for($i = $begin; $i <= $end; $i->modify('+1 day')){
    									$data[]= $i->format("Y-m-d");
									}
									while($res=mysqli_fetch_assoc($qer)) {
										$locArray[]=$res['elid'];

									}
									if (in_array($checkIn, $data)&&in_array($id, $locArray)) {
										echo "<script>alert('uavailable');</script>";
									}
									else if(in_array($checkOut, $data)&&in_array($id, $locArray)){
										echo "<script> alert('unavailable')</script>";
										$_SESSION['locPrice']=$default;
									}
								else
								{
									$_SESSION['locPrice']=$raj;
									$_SESSION['locName']="Rajdarbar";
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['locId']=$id;
									$_SESSION['days']=$diff;
						    		// header("Location:book.php");
						    		echo "<script>window.location.href='dishes.php';</script>";

									}
							}
							else if (isset($_POST['mount'])) {
								$id=8;
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
 									$qer=mysqli_query($con,"select checkin,checkout from evbook ");
									$res=mysqli_fetch_assoc($qer);
									$begin = new DateTime( $res['checkin'] );
									$end   = new DateTime( $res['checkout'] );
									for($i = $begin; $i <= $end; $i->modify('+1 day')){
    									$data[]= $i->format("Y-m-d");
									}
									while($res=mysqli_fetch_assoc($qer)) {
										$locArray[]=$res['elid'];

									}
									if (in_array($checkIn, $data)&&in_array($id, $locArray)) {
										echo "<script>alert('uavailable');</script>";
									}
									else if(in_array($checkOut, $data)&&in_array($id, $locArray)){
										echo "<script> alert('unavailable')</script>";
										$_SESSION['locPrice']=$default;
									}
								else
								{
									$_SESSION['locPrice']=$mount;
									$_SESSION['locName']="Mount Milestone";
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['locId']=$id;
									$_SESSION['days']=$diff;
						    		// header("Location:book.php");
						    		echo "<script>window.location.href='dishes.php';</script>";

									}
							}

							// else if($_SESSION['dishPrice']==0){
							// 	// header("Location:dish.php");
							// 	echo "<script>window.location.href='dishes.php';</script>";

							// }
							

							else{
								$_SESSION['locPrice']=$default;
							}
		?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
</head>
<body>
	

		<div class="header">
			<h1>
				<font color="white">EVEN</font><font color="black">TRO</font>
				<a style="float: right; font-size: 25px;" href="logout.php">LogOut</a>
			</h1>
		</div>
		<div class="location">
			<a href="kolloc.php"><input type="submit" value="back" name="back"></a>
			Our Services at Siliguri
		</div>

	<div class="grid-container">

		<div class="banquate">
			<div class="cinimg">
					<img src="cinderella1.jpg" id="cinimg">
			</div>
			<div class="content">
				<h2>The Cindrerella Hotel</h2>
				<p>Address:<br>
					3rd,Sevoke Road,<br>
					Ward No 42,<br>
					Siliguri, West Bengal 734008
					<h5>Reservation price : 320,000 INR	</h5>
				</p>
				<form onsubmit="return valid1()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="cin" value="Select">
				</form>
			</div>
		</div>

		<div class="banquate">
			<div class="forrestaimg">
					<img src="forresta1.jpg" id="forrestaimg">
			</div>
			<div class="content">
				<h2>The Forresta</h2>
				<p>Address:<br>
					Eastern ypass,<br>
					Don Bosco Colony<br>
					Siliguri,West Bengal 734004
					<h5>Reservation price : 320,000 INR	</h5>
				</p>
				<form onsubmit="return valid2()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="forresta" value="Select">
				</form>
			</div>
		</div>

		<div class="banquate">
			<div class="rajimg">
					<img src="raajdarbar1.jpg" id="rajimg">
			</div>
			<div class="content">
				<h2>Rajdarbar Banquet</h2>
				<p>Address:<br>
					Hill Cart Road,Ward No 1,<br>
					Mahananda Bridge,Gurung Basty<br>
					Siliguri, West Bengal 734003
				<h5>Reservation price : 280,000 INR</h5>
				</p>
				<form onsubmit="return valid3()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="raj" value="Select">
				</form>
			</div>
		</div>

		<div class="banquate">
			<div class="mountimg">
					<img src="mount1.jpg" id="mountimg">
			</div>	
			<div class="content">
				<h2>Mount Milestone Banquets</h2>
				<p>Address:<br>
					Opposite of Bhaktinagar P.S,<br>
					Check post, Sevoke Road,<br>
					Siliguri, West Bengal 734001
				<h5>Reservation price : 250,000 INR</h5>
				</p>
				
				<form onsubmit="return valid4()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="mount" value="Select">
				</form>
			</div>
		</div>

	<!-- 	<div class="banquate">
			<div class="content">
				<div class="sevokeimg">
					<img src="sevoke1.jpg" alt="Avatar" id="sevokeimg" width="100%">
				</div>
					<h2>Hotel Sevoke Valley Residency</h2>
					<p>Address:<br>
						Sishir Bhaduri Srani,Khudirampally<br>
						Ward 11,Hakim Para,<br>
						Siliguri, West Bengal 734001
						<h5>Reservation price : 250,000 INR</h5>
					</p>
					<form onsubmit="return valid4()" method="post">
						<select id="opt4" name="savokeopt">
							<option value="0">Days</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<input type="submit" name="savoke" value="Select">
					</form>
		</div>-->


	</div> <script type="text/javascript" src="siliguri.js"></script>

<!-- DO NOT MESS WITH THIS SHIT!! WARNING!!! -->
		<div>


	</div>
</body>
</html>