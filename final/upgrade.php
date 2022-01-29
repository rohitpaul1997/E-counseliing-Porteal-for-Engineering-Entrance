<?php

include 'mysql_connect.php';


//deleting those cadidates data which is not opted anything
$sql1 = "SELECT * FROM candidate LEFT JOIN seat USING (enrollment) WHERE seat.enrollment IS NULL";
$result1 = mysqli_query($conn, $sql1);
while ($row1 = $result1->fetch_assoc()) {
    if ($row1['cast'] == 'general') {
        $cast = 's' . $row1['cast'];
        $enroll = $row1['enrollment'];
//echo nl2br($row1['nam']."\n");
        $sql2 = "UPDATE candidate SET locking=2 where enrollment=$enroll";
        $conn->query($sql2);
        $en = 's' . $enroll;
        $sql3 = "SELECT sid, cid from $en where status=1 ";
        $result3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($result3);
        if ($count3 > 0) {
            $row3 = $result3->fetch_assoc();
            $sid = $row3['sid'];
            $cid = $row3['cid'];
            $sql4 = "UPDATE cutoff set sgeneral=sgeneral+1 where sid=$sid and cid=$cid";
            $conn->query($sql4);
            echo "okay general ";
        }

    } elseif ($row1['cast'] == 'obc-a') {
        $enroll = $row1['enrollment'];
        $sql2 = "UPDATE candidate SET locking=2 where enrollment=$enroll";
        $conn->query($sql2);
        $en = 's' . $enroll;
        $sql3 = "SELECT sid, cid from $en where status=1 ";
        $result3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($result3);
        if ($count3 > 0) {
            $row3 = $result3->fetch_assoc();
            $sid = $row3['sid'];
            $cid = $row3['cid'];
            $sql4 = "UPDATE cutoff set sobc-a=sobc-a+1 where sid=$sid and cid=$cid";
            $conn->query($sql4);
            echo "okay obc-a ";
        }

    } elseif ($row1['cast'] == 'obc-b') {
        $enroll = $row1['enrollment'];
        $sql2 = "UPDATE candidate SET locking=2 where enrollment=$enroll";
        $conn->query($sql2);
        $en = 's' . $enroll;
        $sql3 = "SELECT sid, cid from $en where status=1 ";
        $result3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($result3);
        if ($count3 > 0) {
            $row3 = $result3->fetch_assoc();
            $sid = $row3['sid'];
            $cid = $row3['cid'];
            $sql4 = "UPDATE cutoff set sobc-b=sobc-b+1 where sid=$sid and cid=$cid";
            $conn->query($sql4);
            echo "okay obc-b ";
        }

    } elseif ($row1['cast'] == 'sc') {
        $enroll = $row1['enrollment'];
        $sql2 = "UPDATE candidate SET locking=2 where enrollment=$enroll";
        $conn->query($sql2);
        $en = 's' . $enroll;
        $sql3 = "SELECT sid, cid from $en where status=1 ";
        $result3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($result3);
        if ($count3 > 0) {
            $row3 = $result3->fetch_assoc();
            $sid = $row3['sid'];
            $cid = $row3['cid'];
            $sql4 = "UPDATE cutoff set ssc=ssc+1 where sid=$sid and cid=$cid";
            $conn->query($sql4);
            echo "okay sc ";
        }

    } elseif ($row1['cast'] == 'st') {
        $enroll = $row1['enrollment'];
        $sql2 = "UPDATE candidate SET locking=2 where enrollment=$enroll";
        $conn->query($sql2);
        $en = 's' . $enroll;
        $sql3 = "SELECT sid, cid from $en where status=1 ";
        $result3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($result3);
        if ($count3 > 0) {
            $row3 = $result3->fetch_assoc();
            $sid = $row3['sid'];
            $cid = $row3['cid'];
            $sql4 = "UPDATE cutoff set sst=sst+1 where sid=$sid and cid=$cid";
            $conn->query($sql4);
            echo "okay st ";
        }

    }
}



//upgrading
$sql2 = "SELECT * from seat where status=0";
$result2 = mysqli_query($conn, $sql2);
while ($row2 = $result2->fetch_assoc()) {
    $enroll = $row2['enrollment'];
    $en = 's' . $row2['enrollment'];
    $sql3 = "SELECT * from $en";
    $result3 = mysqli_query($conn, $sql3);
    while ($row3 = $result3->fetch_assoc()) {
        if ($row3['status'] == 1) {
            continue;
        } else {
            $cid = $row3['cid'];
            $sid = $row3['sid'];
            $sql4 = "SELECT * from cutoff where cid= $cid AND sid=$sid";
            $result4 = mysqli_query($conn, $sql4);
            $row4 = $result4->fetch_assoc();
            if ($row4['sgeneral'] > 0) {
                $sql5 = "UPDATE  $en SET status=1 where cid=$cid and sid=$sid";
                $conn->query($sql5);
                $sql6 = "UPDATE cutoff SET sgeneral=sgeneral-1 where cid= $cid and sid=$sid";
                $conn->query($sql6);
                $id = $row3['id'];
                $sql7 = "DELETE from $en where id>$id";
                $conn->query($sql7);
                echo "okay  ";
                break;
            } elseif ($row4['sobc-a'] > 0) {
                $sql5 = "UPDATE  $en SET status=1 where cid=$cid and sid=$sid";
                $conn->query($sql5);
                $sql6 = "UPDATE cutoff SET sobc-a=sobc-a-1 where cid= $cid and sid=$sid";
                $conn->query($sql6);
                $id = $row3['id'];
                $sql7 = "DELETE from $en where id>$id";
                $conn->query($sql7);
                echo "okay  ";
                break;
            } elseif ($row4['sobc-b'] > 0) {
                $sql5 = "UPDATE  $en SET status=1 where cid=$cid and sid=$sid";
                $conn->query($sql5);
                $sql6 = "UPDATE cutoff SET sobc-b=sobc-b-1 where cid= $cid and sid=$sid";
                $conn->query($sql6);
                $id = $row3['id'];
                $sql7 = "DELETE from $en where id>$id";
                $conn->query($sql7);
                echo "okay  ";
                break;
            } elseif ($row4['ssc'] > 0) {
                $sql5 = "UPDATE  $en SET status=1 where cid=$cid and sid=$sid";
                $conn->query($sql5);
                $sql6 = "UPDATE cutoff SET ssc=ssc-1 where cid= $cid and sid=$sid";
                $conn->query($sql6);
                $id = $row3['id'];
                $sql7 = "DELETE from $en where id>$id";
                $conn->query($sql7);
                echo "okay  ";
                break;
            }if ($row4['sst'] > 0) {
                $sql5 = "UPDATE  $en SET status=1 where cid=$cid and sid=$sid";
                $conn->query($sql5);
                $sql6 = "UPDATE cutoff SET sst=sst-1 where cid= $cid and sid=$sid";
                $conn->query($sql6);
                $id = $row3['id'];
                $sql7 = "DELETE from $en where id>$id";
                $conn->query($sql7);
                echo "okay  ";
                break;
            }
        }

    }
}


//deleting from seat
$sql3 = "SELECT * from seat where status=0";
$result3 = mysqli_query($conn, $sql3);
while ($row3 = $result3->fetch_assoc()) {
    $enroll = $row3['enrollment'];
    $sql8 = "UPDATE seat SET status=2 where enrollement=$enroll";
    $conn->query($sql8);
}


header("Location:seat_details.php");