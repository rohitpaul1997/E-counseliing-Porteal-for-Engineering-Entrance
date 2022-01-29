<?php
include 'mysql_connect.php';
// error_reporting(0);
?>
<?php

session_start();
//echo $_SESSION['u_id'];
if (!empty($_SESSION["uid"])) {
    $enroll = $_SESSION['uid'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enroll = $_POST["enroll"];
    $nm = $_POST["name"];
    $phone = $_POST["phone"];
    $father = $_POST["fname"];
    $mother = $_POST["mname"];
    $nationality = $_POST["nationality"];
    $district = $_POST["district"];
    $tfw = $_POST["tfw"];
    $email = $_POST["email"];
    $aadhar = $_POST["aadhar"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $reli = $_POST["reli"];
    $cast = $_POST["cast"];
    $pc = $_POST["pc"];
    $tth = $_POST["10th%"];
    $tthB = $_POST["10thB"];
    $twth = $_POST["12th%"];
    $twthB = $_POST["12thB"];
    $rank = $_POST["rank"];
    $Qrank = $_POST["Qrank"];

    //echo $nm;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE candidate SET nam='" . $nm . "', aadhar='" . $aadhar . "',	dob='" . $dob . "',	email='" . $email . "'	,	phone='" . $phone . "',
					 father='" . $father . "', mother='" . $mother . "',	gender='" . $gender . "', religion='" . $reli . "', cast='" . $cast . "',
					  	nationality='" . $nationality . "', tfw='" . $tfw . "', pc='" . $pc . "', diistict='" . $district . "',
						   10th='" . $tth . "', 10thB='" . $tthB . "', 12th='" . $twth . "', 12thB= '" . $twthB . "',
						     rank='" . $rank . "', quota='" . $Qrank . "'
	            			 WHERE enrollment='" . $enroll . "'";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";
        header("Location:imageupload.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

} else {
    echo "not posted";
}
