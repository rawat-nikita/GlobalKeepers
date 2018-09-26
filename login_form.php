<?php
include "header.html";
include "nav.html";
$con=mysqli_connect('localhost','root','','globalkeepers'); 
$e=$_POST['email'];
$qry = "select * from signup where email='$e' "; 
$result=mysqli_query($con,$qry);   
while($field= mysqli_fetch_assoc($result)) 
{ 
$pword=$field['pword'];
$p=$_POST['pword'];
$f=$field['fname'];
$l=$field['lname'];
if($p!=$pword)
{ 
  echo "<style>h2{border:1px solid black; animation : zoom 0.6s; width:700px; padding:20px;} 
 @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }</style>
<center><h2>Looks like you have entered an incorrect email ID or password <br>
Go back and try again.</h2></center>";
} 
else{
echo "<style> .lgin{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:500px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"lgin\" > 
Welcome back <h1> $f  $l  <br></h1>Let's get started! 
</div><br></center>  ";
$q="update signup set login=1 where email='$e' ";
$res=mysqli_query($con,$q);
}
}
include "footer.html";
?>