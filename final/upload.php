<?php



include 'mysql_connect.php';
	session_start();
	//echo $_SESSION['u_id'];
	if(!empty($_SESSION["uid"]))
	{
	  $enroll=$_SESSION['uid'];
	}
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename1 = $_FILES["uploadpic"]["name"];
	$tempname1 = $_FILES["uploadpic"]["tmp_name"];	
		$folder = "image/".$filename1;

		$filename2 = $_FILES["uploadsig"]["name"];
		$tempname2 = $_FILES["uploadsig"]["tmp_name"];	
			$folder = "image/".$filename2;
			
			$filename3 = $_FILES["uploadthumb"]["name"];
	$tempname3 = $_FILES["uploadthumb"]["tmp_name"];	
		$folder = "image/".$filename3;

		// Get all the submitted data from the form
		$sql = "INSERT INTO image (enrollment, photo, signature, thumb) VALUES ('$enroll','$filename1','$filename2','$filename3')";

		// Execute query
		if ($conn->query($sql) === TRUE){
			if (move_uploaded_file($tempname1, $folder)) {
				$msg = "Image uploaded successfully";
				header("Location:transactions.php");
			}else{
				$msg = "Failed to upload image";
		}
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
		$conn->close();
		
		// Now let's move the uploaded image into the folder: image
}
?>
