<?php
$con=mysqli_connect('localhost','root','','globalkeepers');
$q="update signup set login=0 ";
$r=mysqli_query($con,$q);
header('location: globalPage.php');
?>