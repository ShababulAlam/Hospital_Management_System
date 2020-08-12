<?php
session_start()
?>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$con=@mysqli_connect("localhost","root","") or die("Unable to connect to DB L1");
$db=@mysqli_select_db($con,"hms")or die("Unable to connect to DB L2");
$str="insert into patients values('$id','$name','$age','$gender','$occupation','$mobile','$address')";
$res=@mysqli_query($con,$str) or die("Unable to connect to DB L3");
if($res>=0)
{
echo'<br><br><b>Patient added !!<br>';
}

?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
