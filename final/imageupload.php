


<?php    ///connection to database...here my database name is 'college',  change it
    include 'mysql_connect.php';
?>
<?php
session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["uid"]))
{
  $enroll=$_SESSION['uid'];

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

    var loadFile1 = function (event) {
			var image = document.getElementById('output1');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
        var loadFile2 = function (event) {
			var image = document.getElementById('output2');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
        var loadFile3 = function (event) {
			var image = document.getElementById('output3');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
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
			<a href="javascript:void(0)"></a>
			<a href="logout.php">Logout</a>
		</div>
	</div>

	<form action="upload.php" method="POST" id="msform" enctype="multipart/form-data">
		<fieldset>
			<h2 class="fs-title">Upload Your Documents</h2>
			<h3 class="fs-subtitle">This is step 2</h3>
			
			<p><img id="output1" width="200" /></p><br>
			<label><b>Upload Image(*Upto 5mb)</b></label><br>
			<input type="file" accept="image/*" id="file" onchange="loadFile1(event)" name="uploadpic" value="" /><br>
			
            <p><img id="output2" width="200" /></p><br>
			<label><b>Upload Signature(*Upto 5mb)</b></label><br>
			<input type="file" accept="image/*" id="file" onchange="loadFile2(event)" name="uploadsig" value="" /><br>
			
			
            <p><img id="output3" width="200" /></p><br>
			<label><b>Upload Thumb-impression(*Upto 5mb)</b></label><br>
			<input type="file" accept="image/*" id="file" onchange="loadFile3(event)" name="uploadthumb" value="" /><br>
			<br><br>
            <input type="submit" name="upload" class="submit action-button" value="Sumbit" />
        </fieldset>
	</form>

</body>

</html>