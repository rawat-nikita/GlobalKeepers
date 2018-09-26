<?php
include "header.html";
include "nav.html";
$con = mysqli_connect('localhost','root','','globalkeepers');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$country =$_POST['country'];
$about =$_POST['about'];
$email =$_POST['email'];
$pword =$_POST['pword'];


$q= "select * from signup where email='$email'";
$res=mysqli_query($con,$q);
if($res)
{
echo "<style> .sup{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:550px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"sup\" > <h3>Looks like the E-Mail ID<br> $email <br>has already been used </h3> You can directly <a href=\"login.php\">log in</a> now.</div><br></center>  ";

}
else
{
if($result)
{
$qry = "insert into signup(fname,lname,age,gender,country,about,email,pword) values('$fname','$lname','$age','$gender','$country','$about','$email','$pword')";
$result = mysqli_query($con,$qry);
$f=$_POST['fname'];
echo "<style> .sup{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:500px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"sup\" > <h1>Hello $f  <br></h1>Welcome to the team! <br> You can <a href=\"login.php\">log in</a> now.</div><br></center>  ";
}
else
{
echo "Error "; 
}
}
include "footer.html";
?>