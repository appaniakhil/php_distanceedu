<?php

$conn = mysqli_connect("localhost","root","1234")
or die("Could not connect to the server.");

mysqli_query($conn,"CREATE DATABASE mdb");
mysqli_select_db($conn,"mdb")
or die("Could not select the database.");

?>


