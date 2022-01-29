<?php

include 'mysql_connect.php';
session_start();

$enroll = $_SESSION['uid'];

$sql="SELECT * from seat,subject,collage where seat.enrollment=$enroll and seat.sid=subject.sid and seat.cid=collage.cid ";
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
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Reg No: <?php echo $row['enrollment'];?></tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name:  <?php echo $row1['nam'];?></tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:    <?php echo $row1['email'];?></tr><br>

<br>
<br>

<table width="80%" border="5 px" padding="150px" align="center">
<tr>
<th>Allotment Description</th>
<th colspan="6">ALLOTED COLLEGE</th>
<th colspan="6">ALLOTED DEPARTMENT</th>
</tr>
<tr>
<th>Allotment Details</b></th>
<th colspan="6"><?php echo $row['collage_name'];?></th>
<th colspan="6"><?php echo $row['name'];?></th>
</tr>
</table>
<br><br>
<p><b><font color:blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms and Conditions</font></b>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.Successfully booked by student<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Successfully approved by Counselling board
<br>
</p>
</body>
</html>



<script>
	window.print();
</script>