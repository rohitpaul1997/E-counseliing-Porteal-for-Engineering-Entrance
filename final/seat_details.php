<?php
include 'mysql_connect.php';



?>

<?php

foreach ($_POST as $name => $content) { // Most people refer to $key => $value
    if ($name == 'details') {
        $cid=$_POST['cid'];
        $sid=$_POST['sid'];
        $sql = "SELECT * from seat where cid=$cid and sid=$sid";
        $result1 = mysqli_query($conn, $sql);
        //header("Location:seat_details.php");
    }
    if ($name == 'enroll') {
        $enroll=$_POST['en'];
        $sql1 = "SELECT * from seat where enrollment=$enroll";
        $result2 = mysqli_query($conn, $sql1);
        $row2 = $result2->fetch_assoc();
       $sid=$row2['sid'];
       $cid=$row2['cid'];
       $sql3="SELECT * from subject where sid=$sid";
       $result3 = mysqli_query($conn, $sql3);
       $row3 = $result3->fetch_assoc();
       $sql4="SELECT * from collage where cid=$cid";
       $result4 = mysqli_query($conn, $sql4);
       $row4 = $result4->fetch_assoc();
        //header("Location:seat_details.php");
    }
    if ($name == 'upgrade') {
        header("Location:upgrade.php");
    }
}
?>















<!DOCTYPE html>
<html>

<head>
    <title>Seat Allotment</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style(1).css">
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
        <a href="seat_details.php">Seat Allotment</a>
		<a href="transaction_details.php">Transactions Details</a>
</div>

    <div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  PBEEEB Counselling</span>
		<div class="topnav-right">
			<a href="javascript:void(0)"></a>
			<a href="logout.php">Logout</a>
		</div>
	</div>


    <form action="seat_manupulate.php" method="POST" id="msform">
          <fieldset>
          <input type="submit" name="Lock" class="action-button" value="Lock" />
          <input type="submit" name="allot" class="action-button" value="Allot Seat" />
          <input type="submit" name="upgrade" class="action-button" value="Upgrade" />
          </fieldset>
          </form>


          <form action="#" method="POST" id="msform">
          <fieldset>
          <input type="text"  name="cid" placeholder="college id" value="" />
          <input type="text"  name="sid" placeholder="subject id" value="" />
          <input type="submit" name="details" class="action-button" value="Seat deatils" />
          </fieldset>
          </form>

          <form action="" method="POST" id="msform">
          <fieldset>
          <input type="text"  name="en" placeholder="enrollment number" value="" />
          <input type="submit" name="enroll" class="action-button" value="Seat deatils" />
          </fieldset>
          </form>

          <form action="" method="POST" id="msform">
          <fieldset>
          <h1>College Details:</h1><br>
          <h3><?php echo $row3['name']."     ".$row4['collage_name']; ?></h3><br>

          </fieldset>
          </form>

          <form action="" method="POST" id="msform">
          <fieldset>
          <h1>Enrollment Numbers:</h1><br>
<?php
while ($row1 = $result1->fetch_assoc()) {
?>
          <h2><?php echo $row1['enrollment'] ?></h2><br>
<?php
}
?>
          </fieldset>
</form>



</body>
</html>

