<?php
include 'mysql_connect.php';
$sql = "SELECT enrollment,cast from candidate ORDER BY rank";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {
    $enrol = "s" . $row['enrollment'];
    $sql1 = "SELECT * from $enrol";
    $result1 = mysqli_query($conn, $sql1);
    while ($row1 = $result1->fetch_assoc()) {
        $cid = $row1['cid'];
        $sid = $row1['sid'];
        $sql2 = "SELECT * from cutoff where cid= $cid  AND sid=$sid";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = $result2->fetch_assoc();
        if ($row2['sgeneral'] > 0) {
            $sql3 = "UPDATE  $enrol SET status=1 where cid=$cid and sid=$sid ";
            $conn->query($sql3);
            $sql4 = "UPDATE cutoff SET sgeneral=sgeneral-1 where cid=$cid and sid=$sid";
            $conn->query($sql4);
            $id = $row1['id'];
            $sql5 = "DELETE from $enrol where id>$id";
            $conn->query($sql5);
            echo "okay  ";
            break;
        } elseif ($row['cast'] == 'obc-a' and $row2['sobc-a'] > 0) {
            $sql3 = "UPDATE  $enrol SET status=1 where cid=$cid and sid=$sid";
            $conn->query($sql3);
            $sql4 = "UPDATE cutoff SET sobc-a= sobc-a-1 where cid=$cid and sid=$sid ";
            $conn->query($sql4);
            $id = $row1['id'];
            $sql5 = "DELETE from $enrol where id>$id";
            $conn->query($sql5);
            echo "obc-a";
            break;
        } elseif ($row['cast'] == 'obc-b' and $row2['sobc-b'] > 0) {
            $sql3 = "UPDATE  $enrol SET status=1 where cid=$cid and sid=$sid";
            $conn->query($sql3);
            $sql4 = "UPDATE cutoff SET sobc-b=sobc-b-1 where cid=$cid and sid=$sid";
            $conn->query($sql4);
            $id = $row1['id'];
            $sql5 = "DELETE from $enrol where id>$id";
            $conn->query($sql5);
            echo "obc-b";
            break;
        } elseif ($row['cast'] == 'sc' and $row2['ssc'] > 0) {
            $sql3 = "UPDATE  $enrol SET status=1 where cid=$cid and sid=$sid";
            $conn->query($sql3);
            $sql4 = "UPDATE cutoff SET ssc=ssc-1 where cid=$cid and sid=$sid";
            $conn->query($sql4);
            $id = $row1['id'];
            $sql5 = "DELETE from $enrol where id>$id";
            $conn->query($sql5);
            echo "sc";
            break;
        } elseif ($row['cast'] == 'st' and $row2['sst'] > 0) {
            $sql3 = "UPDATE  $enrol SET status=1 where cid=$cid and sid=$sid";
            $conn->query($sql3);
            $sql4 = "UPDATE cutoff SET sst=sst-1 where cid='" . $cid . "' and sid='" . $sid . "'";
            $conn->query($sql4);
            $id = $row1['id'];
            $sql5 = "DELETE from $enrol where id>$id";
            $conn->query($sql5);
            echo "st";
            break;
        }
    }
}

header("Location:seat_details.php");