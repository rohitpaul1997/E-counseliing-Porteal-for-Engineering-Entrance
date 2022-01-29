<?php

include 'mysql_connect.php';

foreach ($_POST as $name => $content) { // Most people refer to $key => $value
    if ($name == 'neww') {;
        $sql = "SELECT * from transaction,candidate where status=0 and transaction.enrollment=candidate.enrollment";
        $result1 = mysqli_query($conn, $sql);
        //header("Location:seat_details.php");
    }
    if ($name == 'allow') {;
        $sql1 = "UPDATE transaction set status=1";
        $result2 = mysqli_query($conn, $sql1);
        //header("Location:seat_details.php");
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
        <a href="seat_details.php">Seat Allotment</a>
		<a href="#">Transactions Details</a>
</div>

    <div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  PBEEEB Counselling</span>
		<div class="topnav-right">
			<a href="javascript:void(0)"></a>
			<a href="logout.php">Logout</a>
		</div>
	</div>

    <form action="#" method="POST" id="msform">
          <fieldset>
          <input type="submit" name="neww" class="action-button" value="New Enrollment" />
          </fieldset>
    </form>
    <form action="#" method="POST" id="msform">
        <fieldset>
        <table style="width:100%">
          <th>Enrollment Numbers:</th><th>Transaction id:</th><th>Date</th><tr>
<?php
while ($row1 = $result1->fetch_assoc()) {
    ?>
          <td><?php echo $row1['enrollment'] ?></td>
          <td><?php echo $row1['trnid'] ?></td>
          <td><?php echo $row1['trndate'] ?></td>
          <td><input type="submit" name="allow" class="action-button" value="Grant access" /></td>
<?php
}
?>
        </table>
        </fieldset>
    </form>
   <!-- <form action="#" method="POST" id="msform">
          <fieldset>
          <input type="text"  name="cid" placeholder="college id" value="" />
          <input type="text"  name="sid" placeholder="subject id" value="" />
          <input type="submit" name="details" class="action-button" value="Seat deatils" />
          </fieldset>
          </form>-->
</body>
</html>
