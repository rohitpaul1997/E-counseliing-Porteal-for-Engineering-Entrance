<?php    
	 include 'mysql_connect.php';
?>
<?php 

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

	 $enroll=$_POST["enroll"];
	 $email=$_POST["email"];
     $pass=$_POST["password1"];

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE candidate SET email='" . $email ."', password='" .$pass ."' WHERE enrollment='" . $enroll."'" ;

	if ($conn->query($sql) === TRUE) {
		$to_email=$email;
		$subject = "Thank you for registering in counselling website";
		$body = "Your registraion has been done successfully.Please login for further process.your login id is:".$enroll." and password: ".$pass;
		$headers = "From: rohit.paul1997@gmail.com";				 
		if (mail($to_email, $subject, $body, $headers)) {
			header("Location:login.php");
		} else {
			echo "Email sending failed...";
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";
?>
