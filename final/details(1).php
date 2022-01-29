<?php ///connection to database...here my database name is 'college',  change it
include 'mysql_connect.php';
?>
<?php
session_start();
//echo $_SESSION['u_id'];
if (!empty($_SESSION["uid"])) {
    $enroll = $_SESSION['uid'];

    $sql = "SELECT * from candidate where enrollment='" . $enroll . "'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $message = "Invalid Username or Password!";
        echo $message;
    } else {
        // $message="hello";
        //echo $message;
        $row = $result->fetch_assoc();
    }
}

?>




<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
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
		<a href="details(1).php">Fill Details</a>
		<a href="imageupload.php">Upload Documents</a>
		<a href="transactions.php">Payment</a>
		<a href="choices.php">Fill Choices</a>
<?php
$sql1 = "SELECT * FROM candidate where enrollment=$enroll";
$result1 = mysqli_query($conn, $sql1);
$row1 = $result1->fetch_assoc();
if ($row1['locking'] == 1) {
?>
        <a href="result.php">Results</a>
<?php
}
?>
	</div>

	<div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; PBEEEB Counselling</span>
		<div class="topnav-right">
			<!--<a href="javascript:void(0)">Preview Apllication</a>-->
			<a href="logout.php">Logout</a>
		</div>
	</div>

	<form  id="msform">
		<fieldset>
			<h2 class="fs-title">Fill Your Details</h2>
			<h3 class="fs-subtitle">This is step 1</h3>
			<table style="width:100%">
			<tr>
			<td><label><b>Enrollmemt Number:</b></label><br>
			<input type="text" name="enroll" value=<?php echo $row["enrollment"]; ?> readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Name:</b></label><br>
			<input type="text" name="name" value="<?php echo $row["nam"]; ?>" readonly><br></td>
			<td><label><b>Gender:</b></label><br>
			<input type="text" name="name" value="<?php echo $row["gender"]; ?>" readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Date Of Birth:</b></label><br><input type="date" name="dob" value=<?php echo $row["dob"]; ?> readonly><br></td>
			<td><label><b>Aadhar number*:</b></label><br><input type="text" name="aadhar" value=<?php echo $row["aadhar"]; ?> readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Phone:</b></label><br><input type="tel" name="phone" value="<?php echo $row["phone"]; ?>" readonly></td>
			<td>;<label><b>Email:</b></label><br><input type="email" name="email" value=<?php echo $row["email"]; ?> readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Father's/Gaurdian* Name:</b></label><br><input type="text" name="fname" value="<?php echo $row["father"]; ?>" readonly></td>
			<td><label><b>Mother's* Name:</b></label><br><input type="text" name="mname" value="<?php echo $row["mother"]; ?>"readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Nationality:</b></label><br><input type="text" name="mname" value="<?php echo $row["nationality"]; ?>"readonly><br></td>
			<td><label><b>District:</b></label><br><input type="text" name="mname" value="<?php echo $row["diistict"]; ?>"readonly><br></td>
			</tr>
			<tr>
			<td><label><b>Religion:</b></label><br><input type="text" name="mname" value="<?php echo $row["religion"]; ?>"readonly><br></td>
			<td><label><b>Cast:</b></label><br><input type="text" name="mname" value="<?php echo $row["cast"]; ?>"readonly><br></td>
			</tr>
			<tr>
				<td><label><b>Are you Physically Challenged*</b></label><br><input type="text" name="mname" value="<?php echo $row["pc"]; ?>"readonly><br></td>
				<td><label><b>Are you opted for tfw?:*</b></label><br><input type="text" name="mname" value="<?php echo $row["tfw"]; ?>"readonly><br></td>
			</tr>
			<tr>
				<td><label><b>10th %:</b></label><br></label><br><input type="text" name="10th%" value="<?php echo $row["10th"]; ?>" readonly></td>
				<td><label><b>10th Board:</b></label><br><input type="text" name="10thB" value="<?php echo $row["10thB"]; ?>" readonly></td>
			</tr>
			<tr>
				<td><label><b>12th %:</b></label><br><input type="text" name="12th%" value="<?php echo $row["12th"]; ?>" readonly></td>
				<td><label><b>12th Board:</b></label><br><input type="text" name="12thB" value="<?php echo $row["12thB"]; ?>" readonly></td>
			</tr>
			<tr>
				<td><label><b>Obtained Rank:</b></label><br><input type="text" name="rank" value="<?php echo $row["rank"]; ?>" readonly></td>
				<td><label><b>Quota Rank(if aplicable):</b></label><br><input type="text" name="Qrank" value="<?php echo $row["quota"]; ?>" readonly ></td>
			</tr>
			</table>
            <a href="details.php" ><button type="button" class="action-button" value=REGISTER name="reg1">Update Profile</button></a>
        </fieldset>
	</form>

</body>

</html>