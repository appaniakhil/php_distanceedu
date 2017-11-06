<?php session_start();
include("config.php");
 ?>

<html>
<head>
<title>Homepage</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="2.jpg">
</head>
<body>

<ul>
  <li><a class="active" href="#index.<?php  ?>">Home</a></li>
  <li><a href="login.php">login</a></li>
  <li><a href="register.php<?php  ?>">register</a></li>
  <li><a href="how.php">About</a></li>

</ul>


</p>


</font>
<div id="logo" style="margin:0;margin-left:200px; position:absolute; left:70px; top:70px; width: 1000px; height: 1000px;"> 

</div>

<p style="margin:0;margin-left:80px;width:800px;"> 
<img src="blank.bmp" alt="edu " width="1700" height="900" /></p>
<p style="margin:0;margin-left:700px;width:300px;"> 
<style >
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333300;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 35px 35px;
    text-decoration: none;
}

li a:hover {
    background-color:black	;
}
</style>



<div id="logo" style="position:absolute; left:60px; top:170px; width: 700px; height: 300px;"> 
<h1 style="text-align:center;">
<b><font size="10" face="verdana" color="black"> Distance Education </font></b>
</h1>

<b><p style="margin:0;margin-left:100px; text-align:center;" > The Enroller platform is different from a typical software development scenario. It is especially designed for academic institutes' admission needs and no additional software development is required. Compared to custom software development, moving to Enroller will be cost effective and time saving. Enroller acts as an interface between your institute and applicants. It provides a platform to publish, collect &amp; manage admission forms. Institutes benefit by reducing cost. Applicants benefit by easy and flexible process.</b>
<img src="enroll.jpg" alt="edu " width="625" height="222" /></p>


<p style="margin:0;margin-left:100px;"> <font size="4" face="verdana" color="brown">Session to fill  the application form begins once registration is done or Login is done .....</font>
</p>
<br><br>
<p style="margin:0;margin-left:100px;">
<a href="how.php">HOW TO APPLY</a> &nbsp;&nbsp;&nbsp;
<a  href="howphoto.php"> Guidelines for scanning the Photograph , Signature and  Draft</a> 
<br><br>
You must be logged in to fill the admission form / check the status of application . </p><br>


<?php

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
	
	
	

	while($row = mysql_fetch_assoc($result))
	{
		$username = $row['username'];
		$password = $row['password'];
		$date = $row['dtime'];
		
	}
	
}
else
{
	//echo "</p You must be logged in to fill the admission form / check the status of application . .<br/>";	
}

?>

<br><br><br><center>
<p style="margin:0;margin-left:100px; "><font size="1" color="black">
 iic batch 2017-21 &copy; 2016  |  www.Distanceeducation.in
<p></font></center>
</div>
</body>
</html>
