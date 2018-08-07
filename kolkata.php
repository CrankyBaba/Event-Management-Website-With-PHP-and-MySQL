<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
</head>
<body>




	<!-- iNSERT DATE INPUT TAGS IN ALL THE LISTINGS 
			BEFORE THE SUBMIT BUTTON
			NUMBER1 IS FOR EXAMPLE. DO IT FOR ALL LISTINGS
			AND COPY IT TO SILIGURI
			AND PLS STYLE THOSE DATE FILEDS TOO.
	 -->




<?php 
session_start();
	if(empty($_SESSION['email']))
{
	  echo "<script>window.location.href='register.php';</script>";

}
$con=mysqli_connect("localhost","root","","eventro"); ?>
		<div class="header">
			<h1>
				<font color="white">EVEN</font><font color="black">TRO</font>
				<a style="float: right; font-size: 25px;" href="logout.php">LogOut</a>
			</h1>
		</div>
		<div class="location">
			<a href=""><input type="submit" name="back" value="back"></a>
			Our Services at Kolkata
		</div>

	<div class="grid-container">
		
		<div class="banquate">
			<div class="myrahimg">
					<img src="myrah1.jpg" id="myrahimg">
			</div>
			<div class="content">
				<h2>Myrah Banquets</h2>
				<p>Address:<br>
					164, Prasad Square,<br>
					Acharya Jagadish Chandra Bose,<br>
					Kolkata, West Bengal 700014
					<h5>Reservation price : 320,000 INR	</h5>
				</p>
				<form onsubmit="return valid1()" method="POST">
						<input type="date" name="ckin"> to <input type="date" name="ckout">
						<input type="submit" name="myrah" value="Select">
					
				</form>
			</div>
		</div>

		<div class="banquate">
			<div class="lonimg">
					<img src="longia1.jpg" id="longimg">
			</div>
			<div class="content">
				<h2>Longia Banquet</h2>
				<p>Address:<br>
					36 PWD Road,Longia Tower,<br>
					Debigarh,U B Colony,Ariadaha,<br>
					Kolkata,West Bengal 700035
					<h5>Reservation price : 320,000 INR	</h5>
				</p>
				<form onsubmit="return valid2()" method="post">

					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="longia" value="Select">
				</form>
			</div>
		</div>



		<div class="banquate">
			<div class="khuimg">
					<img src="khushali1.jpg" id="khuimg">
			</div>
			<div class="content">
				<h2>Khushali@29</h2>
				<p>Address:<br>
					29, Jessore Rd, K.B.Sarani,<br>
					Amarpalli, South Dum Dum,<br>
					Kolkata, West Bengal 700028
				<h5>Reservation price : 280,000 INR</h5>
				</p>
				<form onsubmit="return valid3()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="khushali" value="Select">
				</form>
			</div>
		</div>

		<div class="banquate">
			<div class="filiimg">
					<img src="filigree1.jpg" id="filigreeimg">
			</div>	
			<div class="content">
				<h2>Filigree Banquets</h2>
				<p>Address:<br>
					Raghunathpur Road,<br>
					Raghunathpur, Baguiati,<br>
					Kolkata, West Bengal 700059
				<h5>Reservation price : 250,000 INR</h5>
				</p>
				<form onsubmit="return valid4()" method="post">
					<input type="date" name="ckin"> to <input type="date" name="ckout">
					<input type="submit" name="filigree" value="Select">
				</form>
			</div>
		</div>


	</div>
	<script type="text/javascript" src="kolkata.js"></script>



	<div>
		<?php 
				//dont mess with it
							$myrah=15000;
							$longia=18000;
							$khushali=16000;
							$filigree=19000;
							$default=0;
							
							if (isset($_POST['myrah'])) {
								$id=1;

								//date system starts here.
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
 									$qer=mysqli_query($con,"select checkin,checkout,elid from evbook ");
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
											echo "<script> alert('available')</script>";
											$_SESSION['locPrice']=$myrah;
											$_SESSION['locName']="Myrah";
											$_SESSION['checkin']=$checkIn;
											$_SESSION['checkout']=$checkOut;
											$_SESSION['locId']=$id;
						        			$_SESSION['days']=$diff;
											header("Location:dishes.php");
									}

									//date system ends here. (COPY IT TO OTHER ELSE IF PART )
									/*INSIDE ELSE IF REMOVE THE IF AND ELSE IF PARTS AND REPLACE THEM WITH THE ABOVE 
									CODE. EXCEPT THE ID VARIABLE.
									AND IN THE ELSE PART  REPLACE $_SESSION['locPrice']=$myrah; TO ITS RESPECTIVE 
									VARIABLE NAME.FOR THE SECOND IT SHOULD BE $_SESSION['locPrice']=$longia; 
									leave the last else if part and else part unchanged*/

							}
							else if (isset($_POST['longia'])) {
								$id=2;
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
 									$qer=mysqli_query($con,"select checkin,checkout,elid from evbook ");
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
									echo "<script> alert('available')</script>";
									$_SESSION['locPrice']=$longia;
									$_SESSION['locName']="Longia";
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['locId']=$id;
									$_SESSION['days']=$diff;
						    		header("Location:dishes.php");
									}
							}
							else if (isset($_POST['khushali'])) {
								$id=3;
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
									$_SESSION['locPrice']=$khushali;
									$_SESSION['locName']="Khushali@29";
									$_SESSION['locId']=$id;
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['days']=$diff;
						    		header("Location:dishes.php");
									}
							}
							else if (isset($_POST['filigree'])) {
								$id=4;
								$wrongCheckIn=$_POST['ckin'];
 								$checkIn=date('Y-m-d',strtotime($wrongCheckIn));
 								$wrongCheckOut=$_POST['ckout'];
 								$checkOut=date('Y-m-d',strtotime($wrongCheckOut));
 								$earlier = new DateTime($checkIn);
								$later = new DateTime($checkOut);

								$diff = $later->diff($earlier)->format("%a");
								$diff= $diff +1;
								echo $diff;	$qer=mysqli_query($con,"select checkin,checkout from evbook ");
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
									$_SESSION['locPrice']=$filigree;
									$_SESSION['locName']="Filigree";
									$_SESSION['locId']=$id;
									$_SESSION['checkin']=$checkIn;
									$_SESSION['checkout']=$checkOut;
									$_SESSION['days']=$diff;
						    		header("Location:dishes.php");
									}
							}
							// else if($_SESSION['dishPrice']==0){
							// 	header("Location:dishes.php");
							// }
							

							else{
								$_SESSION['locPrice']=$default;
							}
						 ?>

	</div>
</body>
</html>