<html>
<head>

<title>Register</title>
<style>
.tab { margin-left: 270px; }

</style>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<p style="margin:0;margin-left:300px;width:400px;"> <a href='index.php'><b> <font size="2" face="verdana" color="green"> Home</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='login.php'><b> <font size="2" face="verdana" color="green"> Login</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='contact.php'><b> <font size="2" face="verdana" color="green"> Contact us</a>
	
<div class="container" style="background: color url("2.jpg")">  
  <form id="contact" action="" name="form1" method="post" autocomplete="off">
    <fieldset>
      <input placeholder="First Name" type="text" name="firstname" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" name="lastname" tabindex="2" required>
	</fieldset>
	
	<fieldset>
      <input placeholder="E-mail" type="email" name="email" tabindex="3" required>
	</fieldset>
	<fieldset>
      <input placeholder="Username" type="text" name="username" tabindex="4" required>
	</fieldset>
	<fieldset>
      <input placeholder="Password" type="password" name="password" tabindex="5" required>
	</fieldset>
    <fieldset>
      <button name="submit" type="submit" value="Submit" id="contact-submit">Submit</button>
    </fieldset>
  </form>
</div>
</br>
</br>

</body>	
</html>
<?php

include("config.php");

$query = 'CREATE TABLE register( '.
         'firstname VARCHAR(20) NOT NULL, '.
		 'lastname VARCHAR(20) NOT NULL, '.
         'email VARCHAR(30) NOT NULL, '.
         'username VARCHAR(30) NOT NULL, '.
		 'password VARCHAR(30)NOT NULL, '.
		 'dtime DATE NOT NULL, '.
		'regId VARCHAR(10) NOT NULL, '.
		'submission INTEGER )';

$result = mysqli_query($conn,$query);

if(isset($_POST['submit']))
{   

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
    
	if($user == "" || $pass == "" )
	{
			echo "<br/>";echo "<br/>";echo "<br/>";
		echo "Please fill up all the details.";
		echo "<br/>";
	}
	else
	{  $regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
      // Validate the syntax 
		if(!preg_match($regexp, $email))
		{
			echo "<br/>";
			echo "Email address entered is not valid.";
			echo "</br>";
			echo "Please enter a correct email address";
			
		}
		else 
		{
			$regId=mt_rand(100000000,999999999);
			mysqli_query($conn,"insert into register(firstname,lastname,email,username,password,regId,dtime) values('$firstname','$lastname','$email','$user','$pass','$regId',now())")
			or die("Error ! refresh the page or relogin .");
		
			echo "<br/>";		echo "<br/>";		//echo "<br/>";
			echo "Your registration id is $regId.";
			echo "</br>";
			echo "Please note down your registration id";
			echo "</br>";
			echo " use this for checking status";
		//echo "Registration successfully done now login ";
			echo "<br/>";
			echo "<a href='login.php'></a>";
		}
	}
}


?>

