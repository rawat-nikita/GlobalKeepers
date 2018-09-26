<!doctype html>
<html>
<head></head>
<body>
<?php
include "header.html";
include "nav.html";
include "hoverprofile.html";
$con = mysqli_connect('localhost','root','','globalkeepers');

$qry="select * from signup where login=1";
$result=mysqli_query($con,$qry);

if($field=mysqli_fetch_assoc($result))
{
$f=$field['fname'];
$l=$field['lname'];
$a=$field['age'];
$g=$field['gender'];
$c=$field['country'];
$e=$field['email'];
print "<style> .protable{border:1px solid black; font-size:25px; width:50%;}
.a{ border:1px solid black;padding:8px;}
.b{border:1px solid black; text-align:center;padding:8px;}
</style> 
<br> <center> 
<table class=\"protable\">
<tr>
<td class=\"a\">Name </td><td class=\"b\"> $f $l </td></tr>
<tr><td class=\"a\">Age </td> <td class=\"b\">$a </td></tr>
<tr><td class=\"a\">Gender </td><td class=\"b\"> $g </td></tr>
<tr><td class=\"a\">Country </td><td class=\"b\"> $c </td></tr>
<tr><td class=\"a\">Email ID </td><td class=\"b\"> $e </td></tr>
</table>
  <br> ";

}
else
{
echo "<style> .lgin{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:500px; height:240px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"lgin\" > 
<h2>Login first</h2>
<button><a href='login.php'>Click here</a></button></div><br>
";
}

include "footer.html";
?>
</body>