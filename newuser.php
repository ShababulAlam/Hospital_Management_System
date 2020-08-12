<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysqli_connect("localhost","root","") or die(i());
$db=@mysqli_select_db("hms",$con)or die(mysqli_error());
$str="insert into users values('$username','$password')";
$res=@mysqli_query($str)or die(mysqli_error());
if($res>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
}

?>
<html>
<br>
<a href="index.html"><b>Click here to return to the main page</b></a>
</html>
