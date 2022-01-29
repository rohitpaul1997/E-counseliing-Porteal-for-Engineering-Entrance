<?php   
    include 'mysql_connect.php';
?>

<?php
session_start();
if(!empty($_SESSION["uid"]))
{
  	$enroll=$_SESSION['uid'];

  	$sql = "SELECT * from candidate where enrollment='" . $enroll ."'";


	$result = mysqli_query($conn,$sql);
  	$count  = mysqli_num_rows($result);
    $row = $result->fetch_assoc();

}
   
$sql2="SELECT * from transaction where enrollment='".$enroll."'";
$result2 = mysqli_query($conn,$sql2);
$count2  = mysqli_num_rows($result2);


$sql1 = "SELECT max(trnid) as maxtrn from transaction";
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0)
{
	
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
    if($row1==TRUE)
    {
	  if ( $row1["maxtrn"]==null)
		  $TRNID=10001;
	  else
		$TRNID= $row1["maxtrn"] +1;
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Transaction Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="style.css">

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
			<a href="javascript:void(0)"></a>
			<a href="logout.php">Logout</a>
		</div>
	</div>
<?php
if($count2==0)
{
?>

	<form action="payscript.php" method="POST" id="msform">
		<fieldset>
			<h2 class="fs-title">Transaction  Details</h2>
			<h3 class="fs-subtitle">This is step 3</h3>
			<!--<label><b>Transaction id:</b></label><br>-->
			<input type="text" name="trnid" hidden readonly value="<?php echo $TRNID; ?>"><br>
			<label><b><label>Date:</b></label><br>
			<input type="text" name="date" readonly value="<?php echo date("Y/m/d"); ?>" ><br>
            <label><b>Name:</b></label><br>
            <input type="text" name="name" readonly  value="<?php echo $row["nam"]; ?>"><br>
            <label><b>Enrollment number:</b></label><br>
            <input type="text" name="enroll" readonly  value=<?php echo $row["enrollment"]; ?>><br>
			<label><b>Phone*</b></label><br>
            <input type="phone" name="phone" readonly value="<?php echo $row["phone"]; ?>" required>
            <br><label><b>Email*:</b></label><br>
			<input type="email" name="email" readonly value=<?php echo $row["email"]; ?> required><br>
			<label><b>Fees</b></label><br><input type="text" name="fees" readonly value="1"><br>
			
            <input type="submit" name="submit" class="action-button" value="Submit" />
        </fieldset>
	</form>
<?php
}
else{
	$row2 = $result2->fetch_assoc();
	if($row2['status']==1)
	{
?>
<form action="payscript.php" method="POST" id="msform">
		<fieldset>
			<h2 class="fs-title">Transaction  Details</h2>
			<h3 class="fs-subtitle">This is step 3</h3>
			<input type="submit" name="submit" class="action-button" value="Print Reciept" />
			<a target="_blank" href="rp1.php" >print</a>
			</fieldset>
	</form>
<?php		
	}
	else{
?>
		<form action="#" method="POST" id="msform">
		<fieldset>
			<h2 class="fs-title">Transaction  Details</h2>
			<h3 class="fs-subtitle">This is step 3</h3>
			<label><b><label>Your Payment is not updated yet. Please wait for two days after your transaction.</b></label><br>
			</fieldset>
	</form>
<?php
	}
}
?>
</body>

</html>
</head>


