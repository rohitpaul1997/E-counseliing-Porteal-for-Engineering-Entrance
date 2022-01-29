<?php    
   include 'mysql_connect.php';
   //echo $otp;
   session_start();
   $otp=$_SESSION['otp'];

   if(count($_POST)>0) {
       if($otp==$_POST["otp"])
       {
           header("Location:details(1).php");
       }
       else{
           echo "HOENI";
       }
   }

?>


<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>OTP</title>
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
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"> PBEEEB Counselling</span>
		<div class="topnav-right">
			<a href="javascript:void(0)">Preview Apllication</a>
			<a href="#about">Logout</a>
		</div>
	</div>

	<form action="" method="POST" id="msform">
		<fieldset>
			<h2 class="fs-title">OTP</h2>
			<h3 class="fs-subtitle">OTP has been sent to your email-id:</h3>
			<label><b></b></label><br>
			<input type="text" name="otp" value="" required><br>
            <input type="submit" name="submit" class="action-button" value="Submit" />
            <input type="submit" name="submit" class="action-button" value="Resend" />
        </fieldset>
	</form>

</body>

</html>