<?php session_start(); ?>
<?php

include("config.php");


if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "himanshu" && $pass == "himanshu")
	{
		echo "Welcome Admin <a href='adminframe.php'> click here to see the tables</a>";
	}
	else if($user == "" || $pass == "")
	{
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	}
	else
	{
		$result = mysqli_query($conn,"select * from register where username='$user' and password= '$pass'")
		or die("Could not execute the select query no record found .");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
		else
		{echo"<br/>";
			echo "Invalid username or password.";
		
			echo "<a href='login.php'> Retype  </a>";
		}

		if(isset($_SESSION['valid']))
		{
	
       header("Location:profile.php");
			echo "<a href='admform.php'>FILL THE APPLICATION FORM </a> | <a href='logout.php'>Logout</a>";
			echo "| <a href='statusreg.php'>Check status</a>";	
			echo "<br/>";
			echo "Signed in as : ".$_SESSION['valid']."!";
		}
	}
}

else{

?>
<?php
}
?>
<html>
<head>

<title>Login</title>
<style>
<!--
.tab { margin-left: 650px; }
-->
</style>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body background="2.jpg">


<MARQUEE BEHAVIOR=ALTERNATE SCROLLDELAY=250>
<b> <font size="3" face="verdana" color="blue"> Register for distance education here-->  <a href='register.php'> Register Now</a></b>  </font><IMG SRC="pic.jpg" HEIGHT=40 WIDTH=82 ALT="Idocs Guide to HTML">
</MARQUEE>
	<p class="tab"> <font size="+2"></font><p>
	 <br/>
	
	
    <table>
    <tr>
    <th><img src="enroll.jpg" alt="edu " width="1000" height="500" />
</th>
    

<th style="padding-left:150px">
          
	<div class="container">  
  <form id="contact" name="formlog" action="" method="post" autocomplete="off">
    <fieldset>
      <input placeholder="user name" name="username" required type="text"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password"  name="password" required autofocus>
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Login</button>
    </fieldset>

  </form>
</div></th>
	</tr>
<br><br>

   </table>
<br>
<br>
<br>
<br><br>
<p ><font size="10" face="verdana" color="blue"> iic batch 2017-21 &copy; 2016  |  www.Distanceeducation.in </font>
</body>
</html>