<?php
include 'mysql_connect.php';

$sql = "SELECT * FROM collage,subject,cutoff WHERE collage.cid=cutoff.cid AND subject.sid=cutoff.sid";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
//$row = $result->fetch_assoc();

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

    <style>
    .container {
      align-items: center;
      justify-content: center;
      padding: 8px;
      background: #27AE60;
      color: white;
      cursor: pointer;
      font-weight: bold;
    }

    .container__triangle {
      border-style: solid;
      height: 0px;
      width: 0px;
    }

    .container:hover,
    .container:focus{
      box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }

    .container__triangle--up {
      border-color: transparent transparent rgba(255, 255, 255);
      border-width: 0px 8px 8px;
    }

    .container__triangle--down {
      border-color: rgba(255, 255, 255) transparent transparent;
      border-width: 8px 8px 0px;
    }
  </style>
</head>
<script>
    	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
    </script>

<style>
    table, td, th {
  text-align: centre;
}

table {
  width: 100%;
}

th, td {
  padding: 10px;
}
</style>
<body>
<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="details(1).php">Fill Details</a>
		<a href="imageupload.php">Upload Documents</a>
		<a href="transactions.php">Payment</a>
		<a href="choices.php">Fill Choices</a>
<?php
$sql5 = "SELECT * FROM candidate where enrollment=$enroll";
$result5 = mysqli_query($conn, $sql5);
$row5 = $result5->fetch_assoc();
if ($row5['locking'] > 0) {
    ?>
        <a href="result.php">Results</a>
<?php
}
?>
	</div>

	<div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  PBEEEB Counselling</span>
		<div class="topnav-right">
			<a href="javascript:void(0)"></a>
			<a href="logout.php">Logout</a>
		</div>
	</div>
            <?php
$sql1 = "SELECT status from transaction where enrollment='" . $enroll . "'";
$result1 = mysqli_query($conn, $sql1);
$row1 = $result1->fetch_assoc();
$sql3 = "SELECT locking from candidate where enrollment='" . $enroll . "'";
$result3 = mysqli_query($conn, $sql3);
$row3 = $result3->fetch_assoc();
if ($row1['status'] == 0) {
    ?>
          <form action="#" method="POST" id="msform">
          <fieldset>
          <label><b>Your transaction haven't updated yet. Wait for 2 days after your successful payment<b></label>
          </fieldset>
          </form>
<?php
} elseif (($row3['locking'] == 1) or ($row3['locking'] == 2)) {
    $en = "s" . $enroll;
    $sql2 = "SELECT * FROM collage,subject,$en WHERE collage.cid=$en.cid AND subject.sid=$en.sid";
    $result2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($result2);
    $i = 1;
    ?>
  <form action="#" method="POST" id="msform">
          <fieldset>
          <label><b> Your prefferences are:</b></label><br><br>

  <?php
while ($row2 = $result2->fetch_assoc()) {
        ?>
         <label><?php echo $i . ":" . $row2["collage_name"] . ", " . $row2["name"]; ?></label><br><br>
          <td></td><td></td>


<?php
$i++;
    }
    ?>
   </fieldset>
          </form>
<?php
} else {

    $en = "s" . $enroll;
    $sql2 = "SELECT * FROM collage,subject,$en WHERE collage.cid=$en.cid AND subject.sid=$en.sid";
    $result2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($result2);
    $i = 1;
    while ($row2 = $result2->fetch_assoc()) {
        ?>
          <form action="delete.php" method="POST" id="msform">
          <input type="submit" name="Delete" class="action-button" value="Delete" />
          <button type="submit" name="up" class="container">
            <div class="container__triangle container__triangle--up"></div>
          </button>
          <button type="submit" name="down" class="container">
            <div class="container__triangle container__triangle--down"></div>
          </button>
          <label><b><?php echo $i . ":" . $row2["collage_name"] . ", " . $row2["name"]; ?></b></label><br>
          <input type="text"  name="id" hidden value=<?php echo $row2['id']; ?> readonly>
          </form>
<?php
$i++;
    }
?>
<form action="#" method="POST" id="msform">
          <fieldset>
          <label><b> Choose your preferences:</b></label><br><br>
          </fieldset>
          </form>
<?php
    //echo "<th><label><b>Choose your preferences:</b></label><br></th>";
    while ($row = $result->fetch_assoc()) {
        ?>

          <form action="fill.php" method="POST" id="msform">
          <fieldset>
          <input type="submit" name="submit" class="action-button" value="choose" />
          <label title=<?php echo "SEATS:" . $row["sgeneral"] . ",GEN:"
            . $row["general"] . ",OBC-A:" . $row["obc-a"] . ",OBC-B:" . $row["obc-b"] . ",SC:" . $row["sc"] .
            ",ST:" . $row["st"] . ",PC:" . $row["pc"] . ",TFW:" . $row["tfw"]; ?>><?php echo $row["collage_name"] .
            ", " . $row["name"]; ?></label>
          <input type="text"  name="cid" hidden value=<?php echo $row['cid']; ?> readonly>
          <input type="text"  name="sid" hidden value=<?php echo $row['sid']; ?> readonly>
              </fieldset>
              </form>
              <?php
}
}
?>
            </table>
</body>

</html>