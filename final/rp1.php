<?php

include 'mysql_connect.php';
session_start();

$enroll = $_SESSION['uid'];

$sql="SELECT * from transaction where enrollment=$enroll";
$result1 = mysqli_query($conn, $sql);
$row = $result1->fetch_assoc();

$sql="SELECT * from candidate where enrollment=$enroll ";
$result2 = mysqli_query($conn, $sql);
$row1 = $result2->fetch_assoc();

?>





<html>
<style>
 tr{
	 align:center;
	 cell-padding:2px;
 }
</style>
<body>
<table width="80%" border="5 px" padding="150px" align="center">
<tr>
<th><img src="1.jpg"></th>
<th colspan="6"><font face="Algerian" size="22">PBEEEB Counselling Portal</font></th>
<th><img src="1.jpg"></th>
</tr>
</table>
<br><br>
<table width="80%" padding="150px" align="center">
<tr align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Counselling Receipt</b></tr><br><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Reg No. <?php echo $row['enrollment'];?></tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name. <?php echo $row['nam'];?></tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email. <?php echo $row1['email'];?></tr><br>
	
</table>
<br>
<br>

<table width="80%" border="5 px" padding="150px" align="center">
<tr>
<th>Transaction Description</th>
<th colspan="2">Transaction Id</th>
<th colspan="6">Transaction Mode</th>
<th colspan="6">Transaction Date</th>
<th colspan="6">Transaction Amount</th>
</tr>
<tr>
<th>Counselling Payment</b></th>
<th colspan="2"><?php echo $row['trnid']; ?></th>
<th colspan="6">Amazon Pay</th>
<th colspan="6"><?php echo $row['trndate']; ?></th>
<th colspan="6">1200 rs</th>
</tr>
</table>
<br><br>
<p><b><font color:blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms and Conditions</font></b>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.Successfully Paid by student<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Successfully received by Counselling board
<br>
</p>
</body>
</html>


<script>
	window.print();
</script>