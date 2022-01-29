<?php

include 'mysql_connect.php';
session_start();

$enroll = $_SESSION['uid'];


?>


<!DOCTYPE html>
<html>

<head>
    <title>Choice Filling</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
$en='s'.$enroll;
$sql2="SELECT * from $en where status=1";
$result2 = mysqli_query($conn, $sql2);
$count2 = mysqli_num_rows($result2);
if($count2==0){
?>
          <form action="#" method="POST" id="msform">
          <fieldset>
          <label><b>The Results hasn't been declared yet. <b></label>
          </fieldset>
          </form>
<?php    
}
else{
    $sql3 = "SELECT * FROM collage,subject,$en WHERE collage.cid=$en.cid AND subject.sid=$en.sid";
    $result3 = mysqli_query($conn, $sql3);
    while ($row3 = $result3->fetch_assoc()) {
        if ($row3['status'] == 1) {
?>
            <form action="book_upgrade.php" method="POST" id="msform">
          <fieldset>
          <label><b>Congratulations...... You are selected in:</b></label><br><br>
          <label><b><?php echo $row3["collage_name"] . ", " . $row3["name"]; ?></b></label><br><br>
          <input type="text"  name="id" hidden value=<?php echo $row3['id']; ?> readonly>
<?php
    $sql4="SELECT status from seat where enrollment=$enroll";
    $result4 = mysqli_query($conn, $sql4);
    $row4=$result4->fetch_assoc();
    $count4 = mysqli_num_rows($result4);
    if($count4==1){
    if(($row4['status']==1) or ($row4['status']==2)){
?>
        <input type="submit" name="Book" class="action-button" value="Print allotment" />
        <a target="_blank" href="rp.php" >print</a>
<?php
    }
    else{
?>
      <label><b>You Are opted for upgradation. Wait for the next round result.</b></label><br><br>  
<?php        
    }           
}
else{
?>          
          <input type="submit" name="Book" class="action-button" value="Book" />
<?php
if($row3['id']==1)
{
?>
          </fieldset>
          </form>
<?php          
}
else{
?>
          <input type="submit" name="Upgrade" class="action-button" value="Upgrade" />
          </fieldset>
          </form>
<?php         
}  
}
}
}
}
?>    
 </body>
</html>