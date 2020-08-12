<?php

session_start();
?>



<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysqli_connect("localhost","root","") or die(mysqli_error($con));
$db=@mysqli_select_db($con,"hms") or die(mysqli_error($con))  ;

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";

$result= mysqli_query($con,$sql);




$rowcount=mysqli_num_rows($result);

if($rowcount<1){echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location: http://localhost/hospitalmanagement/home.html");
	}

ob_end_flush();
?>
