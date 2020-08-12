<?php
session_start();
if(!session_is_registered(myusername)){
header("location: http://localhost/hospitalmanagement/home.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>
