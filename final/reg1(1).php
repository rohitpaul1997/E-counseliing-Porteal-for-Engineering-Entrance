<?php    
	 include 'mysql_connect.php';
?>
<?php 

session_start();
$otp=$_SESSION['otp'];

if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $enroll=$_POST["enroll"];
    $email=$_POST["email"];
    $_SESSION['email']=$email;
    $_SESSION['enroll']=$enroll;
    $sql = "SELECT * from candidate where enrollment='" . $enroll ."'";
    $result = mysqli_query($conn,$sql);
    $count  = mysqli_num_rows($result);
    if($count==0) {
        $message = "Invalid Enrollment Number";
        echo $message;
        }
        else {
            $to_email=$email;
            $subject = "OTP for registration";
            $body = "Your registraion OTP is:".$otp;
            $headers = "From: rohit.paul1997@gmail.com";				 
            if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to ". $to_email;
                header("Location:otp.php");
            } else {
                echo "Email sending failed...";
	        }

        }
 }

?>