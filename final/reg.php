<?php    
   include 'mysql_connect.php';
   $otp=rand(1001,9999);
   //echo $otp;
   session_start();
   $_SESSION['otp']=$otp;

?>


<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Regitration</title>
</head>


<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
</head>

<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="details.php">Fill Details</a>
		<a href="imageupload.php">Upload Documents</a>
		<a href="transactions.php">Payment</a>
		<a href="choices.php">Fill Choices</a>
	</div>

	<div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">PBEEEB</span>
		<div class="topnav-right">
		</div>
	</div>

	<form action="reg1(1).php" method="POST" id="msform">
		<fieldset>
			<h2 class="fs-title">User Registration</h2>
			<h3 class="fs-subtitle">Fill The Details</h3>
			<label><b>Enrollmemt Number*</b></label><br>
			<input type="text" name="enroll" value="" required><br>
			<label><b>Email*:</b></label><br>
            <input type="email" name="email" value="" required><br>	
            <input type="submit" name="submit" class="action-button" value="Submit" />
        </fieldset>
	</form>

</body>

</html>