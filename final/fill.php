<?php
include 'mysql_connect.php';

session_start();

$enroll = $_SESSION['uid'];
$j = $_SESSION['j'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid = $_POST["sid"];
    $cid = $_POST["cid"];
    $m = "s" . $enroll;
    $sql2 = "SELECT * from $m where cid=$cid and sid=$sid";
    $result2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($result2);
    if ($count2== 0) {
        $sql = "INSERT INTO $m(cid, sid) VALUES ('" . $cid . "','" . $sid . "' )";
        $sql1 = "SELECT * FROM $m";
        $result = mysqli_query($conn, $sql1);
        $count = mysqli_num_rows($result);
        echo $count;
        if ($count == 10) {
            echo "<script>";
            echo "alert('You can not select more than 10 choices.');";
            echo 'window.location = "choices.php";';
            echo "</script>";
        } else {
            if ($conn->query($sql) === true) {
                $j++;
                header("Location:choices.php");

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "<script>";
        echo "alert('You can not this college 2 times choices.');";
        echo 'window.location = "choices.php";';
        echo "</script>";
    }

}
