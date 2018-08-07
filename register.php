<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="customStyle.css">
	<title>Register</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<style>
		
#regBack{ 
	background: url(backGround.png) ;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	max-height: 100%;
	width: auto;
	max-width: 100%;

}
body html{
	height: 100%;
	margin: 0;
}
.formDiv {
	position: fixed;
	top:28%;
	left:57%;

}
.logIcon {
  position: absolute;
  font-size: 16px;
}

.logIcon input {
  width: 330px;
  height: 34px;
  outline: none;
  border:0;
  background: transparent;
  border-bottom: 1px solid #aaa;
  border-radius: 5px;
  
}
.logIcon input {
	 text-indent: 38px;
	}

.logIcon .fa-envelope { 
  position: relative;
  top: 25px;
  left: 10px;
}
.logIcon .fa-key { 
  position: relative;
  top: 25px;
  left: 10px;
}
.logIcon .fa-user-tie { 
  position: relative;
  top: 25px;
  left: 10px;
}
.logbttn{
	border-radius: 30px;
	border: 0;
	width: 125px;
	height: 32px;
	font-size: 18px;
	color:white;
	background: #f12711;  
    background: -webkit-linear-gradient(to right, #f5af19, #f12711);  
    background: linear-gradient(to right, #f5af19, #f12711); 
}
.logbttn:hover{
	border-radius: 30px;
	border: 0;
	width: 128px;
	height: 35px;
	font-size: 20px;
	color:white;
	background: #f12711;  
    background: -webkit-linear-gradient(to right, #f5af19, #f12711);  
    background: linear-gradient(to right, #f5af19, #f12711); 
}
.logo{
	position: fixed;
	top:38%;
	left:16%;
}
.logo h1{
	color:white;
	font-size: 3.2em;
}
.logo h1 span{
	color:black;
}
.logo p{
	color: white;
	font-size: 1.3em;
}


	</style>
</head>
<body id="regBack">
	<div class="logo">
	<h1>EVEN<span>TRO<span></h1>	
	<p>Your event is our passion...</p>
	</div>
	

	<div id="showLogForm" class="formDiv">
		<p style="color: #F13011; font-size: 18px; "><strong>LOGIN</strong></p><br>
		<form class="logIcon"  method="POST">
			<span class="fas fa-envelope"></span>
			<input type="email" placeholder="example@hotmail.com" name="email" required><br>
			<span class="fas fa-key"></span>
			<input type="password" placeholder="Your Password" name="password" required><br><br>
			<button class="logbttn" name="login">Login</button>
			<p style="text-decoration: underline; ">
				<a id="showReg" style="color: black;font-size: 16px;" href="#">Not a member? SIGN UP!!!</a>
			</p>
		</form>
	</div>	
	<div id="showRegForm" class="formDiv">
		<p style="color: #F13011; font-size: 18px; "><strong>SIGN UP</strong></p><br>
		<form class="logIcon" action="register.php" method="POST">
			<span class="fas fa-user-tie"></span>
			<input type="text" placeholder="Full Name" name="name" required><br>
			<span class="fas fa-envelope"></span>
			<input type="email" placeholder="example@hotmail.com" name="email" required><br>
			<span class="fas fa-key"></span>
			<input type="password" placeholder="Your Password" name="password" required><br><br>
			<button class="logbttn" name="sign">SIGN UP</button>
			<p style="text-decoration: underline; ">
				<a id="showLog" style="color: black;font-size: 16px;" href="#">Already member? Login In!!!</a>
			</p>
		</form>
	</div>
	<!--SignUp Php script begins here -->

<?php

if(isset($_POST['sign']))
{
	$fullname=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	//change 4th parameter to database name
	$con=mysqli_connect("localhost","root","","eventro");
	//change table names
	$qer=mysqli_query($con,"insert into userstable values(NULL,'$fullname','$email','$password')");

	if($qer)
	{
		 
	
		header("Location:register.php");
		
		exit;
	}
	else
	{
		echo "<script>alert('unsuccessfull insert');

		
		</script>";

	}
} ?>


<p class="flashMsg" 
 	style="display: inline;
 	font-size: 1.2em;
	color:#F13011;
	position: absolute;
	top:10%;
	left: 75%;">

<?php
//Login Session Code
session_start();
if(isset($_SESSION['email']))
{
	  echo "<script>window.location.href='try.php';</script>";

}
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$con=mysqli_connect("localhost","root","","eventro");
	$qer=mysqli_query($con,"select * from userstable where Email='$email' and PASSWORD='$password'");
	if(mysqli_num_rows($qer)==1)
	{
		$_SESSION['email']=$email;


		header("Location:try.php");
		exit;
		
	}
	else
	{
		echo "<script>alert('unsuccessfull login');</script>";
	}
}

 ?>
 </p>



<!--SignUp Php script ends here -->
 	
<!-- jQuery Script begins here -->
	<script>
		$(document).ready(function()
 {

//we hide Signup at start.
 	$(" #showRegForm").hide();
//on link clicked we show signup form with efect
      $("#showReg").click(function()
        {
        	$("#showRegForm").fadeIn("slow");          
        	$("#showLogForm").fadeOut();
              
        });
//on link clicked we show Ligin form with effect
       $("#showLog").click(function()
        {
        	$("#showLogForm").fadeIn("slow");
            $("#showRegForm").fadeOut();
        
        });
 
 });

	</script>
</body>
</html>