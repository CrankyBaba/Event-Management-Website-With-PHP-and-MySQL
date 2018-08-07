
<html>
<head>
    <link rel="stylesheet" type="text/css" href="try.css">
<meta charset="utf-8">
<title>Home</title>
<script>
function myFunction() {
    alert("Now select a location of your choice.");
}
</script>

</head>
<body>
	<?php session_start();
	if(empty($_SESSION['email']))
{
	  echo "<script>window.location.href='register.php';</script>";

} ?>
<div class="branding">
      brand name     
</div>

<div id="slider">
<figure>
<img src="champagne-2264811.jpg" alt>
<img src="christening-1499314.jpg" alt>
<img src="wedding-1537147.jpg" alt>
<img src="dinner-1284245.jpg" alt>
<img src="wedding-2584186_1920.jpg" alt>
</figure>
</div>
<div class="types">
    <center><h1>EVENTS</h1></center>>  
</div>
<div class="location">

    <img src="annie-spratt-525826-unsplash.jpg" width="1350" height="800">
    <center><h1>Location</h1></center>>

</div>

<nav>
	<h1 style="color:#fff; text-align:center; font-size:36px; line-height:0.5em; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Hover Zoom</h1>
</nav>




<div class="wrapper">

<a href="party.php">
	<div  class="parent" >
		<div name="party" class="child bg-one">
			<span>Party</span>
		</div>
	</div>
	</a>
</form>

<a href="birthdat.php">
	<div   class="parent right" >
		<div name="birth" class="child bg-two">
			<span>Birthday</span>
		</div>
	</div>
</a>
<a href="other.php">
	<div   class="parent" >
		<div name="other" class="child bg-three">
			<span>Other Event</span>
		</div>
	</div>
</a>

<a href="wedding.php">
	<div   class="parent right" >
		<div name="wed" class="child bg-four">
			<span>Weddings</span>
		</div>
	</div>
</a>
	<?php 
 
	// $party="True";
	// $other="True";
	// $wedding="True";
	// $birthday="True";
	// $default="False";
	//
	// if (isset($_POST['party'])) {
	// 	$_SESSION['eventSelected']=$party;
	// 	$_SESSION['eventName']="Party";
		
	// }
	// else if (isset($_POST['other'])) {
	// 	$_SESSION['eventSelected']=$other;
	// 	$_SESSION['eventName']="Wedding";
    	
	// }	
	// else if (isset($_POST['birth'])) {
	// 	$_SESSION['eventSelected']=$birthday;
	// 	$_SESSION['eventName']="Birthday";
    	
	// }
	// else if (isset($_POST['wed'])) {
	// 	$_SESSION['eventSelected']=$wedding;
	// 	$_SESSION['eventName']="Other";
    	
	// }	

	// else{
	// 	$_SESSION['eventSelected']=$default;
	// 	$_SESSION['eventName']="Not Selected";
	// }

	 ?>



	
	</div>
</div>


<div class="wrapper1">

<a href="#">
    <div class="parent1" onclick="">
        <div class="child1 bg-one">
            <span>Midnapur</span>
        </div>
    </div>
</a>

<a href="#">
    <div class="parent1 right" onclick="">
        <div class="child1 bg-two">
            <span>Bardhaman</span>
        </div>
    </div>
</a>
<a href="siliguri.php">
    <div class="parent1" onclick="return silliguri()">
        <div class="child1 bg-three">
            <span>Shiliguri</span>
        </div>
    </div>
</a>

<a href="kolkata.php">
   <div class="parent1 right" onclick="">
        	<div class="child1 bg-four">
            	<span>Kolkata</span>
        	</div>
    	</div>
    	</a>
	</div>




<div class="food">
   <img src="food-1932466.jpg" width="1350" height="540">
    
</div>

<div class="foodim">
<a href="dishes.php">   
	<img src="sweet-and-sour-pork-1264563.jpg" width="1000" height="435">
		<div class=text>
 			Click For Booking
		</div>
</a> 
</div>
<div class="next">
    <center><h1>About Section</h1></center>>
    
    
</div>





</body>
</html>
