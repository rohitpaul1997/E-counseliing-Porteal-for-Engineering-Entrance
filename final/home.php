<?php    
   include 'mysql_connect.php';
?>


<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style(1).css">
</head>


<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
</head>

<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="details.php">Fill Details</a>
		<a href="imageupload.php">Upload Documents</a>
		<a href="transactions.php">Payment</a>
		<a href="choices.php">Fill Choices</a>
	</div>

	<div class="topnav">
		<span style="font-size:30px;" >&nbsp; PBEEEB Counselling</span>
		<div class="topnav-right">
			<a href="login.php">Login</a>
			<!--<a href="#about">Login</a>-->
		</div>
	</div>
	<table width="100%" border="5 px">
<tr>
<th><img src="download1.jpg"></th>
<th colspan="6"><font face="Georgia" size="12" color="#32a8a0">Paschim Banga Engineering Entrance Examinations Board 
<br><font size="3" face="Georgia">AQ 13/1, Salt Lake City, Sector - V, Kolkata - 700091</font></th>
<th><img src="download1.jpg"></th>
</tr>
</table>
<table width="100%" border="0 px">
<tr><th><p class="blink">Registration is opened for PBEEB till 25th May, 2021,Apply Now.</p></th>
	<th><a href="reg.php" ><button type="button" class="action-button" value=REGISTER name="reg1">Apply Now</button></a></th>

</tr>
</table>
<table width="100%" border="5 px">
<tr>
<th>
<h3><font size="5" color="crimson"><b><i>About PBEEEB:</i><b></font></h3><hr><hr>
<h4><font size="4" color="crimson"><b>Paschim Banga Engineering Entrance Examinations Board</b></font><hr><br><br></h4>

<p><font size="3" color="#32a8a0">The West Bengal Joint Entrance Examinations Board (WBJEEB) was constituted in the year 1962 by the Government of West Bengal,<br> in exercise of the powers conferred under article 162 of the Constitution of India pursuant to No. 828-Edn(T), dated 02.03.1962 for<br> the purpose of conducting Joint Entrance Examination for admission to various institutions in West Bengal imparting education in medical, engineering <br>and technological courses.<br>

The Board has been awarded the status of Statutory Body enacted vide "West Bengal Act XIV of 2014" named as "The West Bengal Joint Entrance Examinations Board Act, 2014".<br>

The Board is empowered to conduct common, combined, competitive, entrance examinations for admission to the undergraduate professional and vocational courses in any College or in any University in the State of West Bengal.<br>

The endeavor of the Board has always been directed towards enhancement of transparency in conducting Common Entrance Examinations through effective state-of-the-art technolog</p>
</font></p>
</th>
<th colspan="6"><h3><font size="4" color="crimson"><b><i>Notice:&nbsp;<hr><hr><br><br><br></h3>
<p>
<a href="https://wbjeeb.nic.in/wbjeecms/File/GetFile?FileId=46&LangId=P">1.WBJEE Schedule 2021</a><br>
<a href="https://wbjeeb.nic.in/wbjeecms/File/GetFile?FileId=46&LangId=P">2.Institue and No of seats WBJEE</a><br>
<a href="https://wbjeeb.nic.in/wbjeecms/File/GetFile?FileId=50&LangId=P">3.Extension of Last Date of exam&nbsp;</a><br>
<a href="https://wbjeeb.nic.in/wbjeecms/File/GetFile?FileId=49&LangId=P">4.Documents required for counselling </a><br>
<a href="https://wbjeeb.nic.in/wbjeecms/File/GetFile?FileId=42&LangId=P">5.Rules for Examination</a><br>
</p>
</th>
</body>

</html>