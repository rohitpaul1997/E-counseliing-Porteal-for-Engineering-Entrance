<?php

include 'mysql_connect.php';

foreach ($_POST as $name => $content) { // Most people refer to $key => $value
    if ($name == 'Lock') {
        $sql = "UPDATE candidate SET locking=1";
        $conn->query($sql);
        header("Location:seat_details.php");
    }
    if ($name == 'allot') {
        header("Location:allot.php");
    }
    if ($name == 'upgrade') {
        header("Location:upgrade.php");
    }
}
