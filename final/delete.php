<?php

include 'mysql_connect.php';

session_start();
$en = 's' . $_SESSION['uid'];

foreach ($_POST as $name => $content) { // Most people refer to $key => $value
    if ($name == 'Delete') {
        $sql1 = "SELECT * from $en";
        $result1 = mysqli_query($conn, $sql1);
        $count1 = mysqli_num_rows($result1);
        $id = $_POST['id'];
        while ($id < $count1) {
            $id1 = $id + 1;
            $sql2 = "SELECT * from $en where id=$id1";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = $result2->fetch_assoc();
            $cid2 = $row2['cid'];
            $sid2 = $row2['sid'];
            $sql3 = "UPDATE $en SET sid=$sid2, cid=$cid2 where id=$id";
            $conn->query($sql3);
            $id++;
        }
        $sql = "DELETE from $en where id=$id";
        if ($conn->query($sql) === true) {
            header("Location:choices.php");
        }
    }
    if ($name == 'up') {
        $id = $_POST['id'];
        $sql1 = "SELECT * from $en where id=$id";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $cid1 = $row1['cid'];
        $sid1 = $row1['sid'];
        $id1 = $id - 1;
        $sql2 = "SELECT * from $en where id=$id1";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = $result2->fetch_assoc();
        $cid2 = $row2['cid'];
        $sid2 = $row2['sid'];
        $sql3 = "UPDATE $en SET sid=$sid2, cid=$cid2 where id=$id";
        $conn->query($sql3);
        $sql4 = "UPDATE $en SET sid=$sid1, cid=$cid1 where id=$id1";
        $conn->query($sql4);
        header("Location:choices.php");

    }
    if ($name == 'down') {
        $id = $_POST['id'];
        $sql1 = "SELECT * from $en where id=$id";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $cid1 = $row1['cid'];
        $sid1 = $row1['sid'];
        $id1 = $id + 1;
        $sql2 = "SELECT * from $en where id=$id1";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = $result2->fetch_assoc();
        $cid2 = $row2['cid'];
        $sid2 = $row2['sid'];
        $sql3 = "UPDATE $en SET sid=$sid2, cid=$cid2 where id=$id";
        $conn->query($sql3);
        $sql4 = "UPDATE $en SET sid=$sid1, cid=$cid1 where id=$id1";
        $conn->query($sql4);
        header("Location:choices.php");

    }
}
