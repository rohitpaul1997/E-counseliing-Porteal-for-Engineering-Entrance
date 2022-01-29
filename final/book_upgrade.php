<?php

include 'mysql_connect.php';

session_start();
$en = 's' . $_SESSION['uid'];

foreach ($_POST as $name => $content) { // Most people refer to $key => $value
    if ($name == 'Book') {
        $enroll = $_SESSION['uid'];
        $id = $_POST['id'];
        $sql1 = "SELECT * from $en where id=$id";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $cid1 = $row1['cid'];
        $sid1 = $row1['sid'];
        $sql2 = "INSERT INTO seat (enrollment, sid, cid, status) VALUES ('$enroll','$sid1','$cid1',1)";
        $conn->query($sql2);
        echo " AREY WAH BOOKED";
        header("Location: result.php");
    }
    if ($name == 'Upgrade') {
        $enroll = $_SESSION['uid'];
        $id = $_POST['id'];
        $sql1 = "SELECT * from $en where id=$id";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $cid1 = $row1['cid'];
        $sid1 = $row1['sid'];
        $sql2 = "INSERT INTO seat (enrollment, sid, cid, status) VALUES ('$enroll','$sid1','$cid1',0)";
        $conn->query($sql2);
        //$sql3="UPDATE cutoff "
        header("Location: result.php");
    }
}

/*if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id=$_POST['id'];

$sql= "DELETE from $en where id=$id";
if ($conn->query($sql) === TRUE){
header("Location:choices.php");
}

}*/
