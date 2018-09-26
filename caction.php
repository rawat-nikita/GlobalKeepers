<?php
include "header.html";
include "nav.html";
$con = mysqli_connect('localhost','root','','globalkeepers');
$g=$_POST['gg'];
$c=$_POST['contr'];
$qr="select email from signup where login=1";
$rr=mysqli_query($con,$qr);
$field=mysqli_fetch_assoc($rr);
$e=$field['email'];
$q= "insert into contributions (email,gg,contri) values('$e','$g','$c')";
$res=mysqli_query($con,$q);
if($res)
{
echo "<style> .sup{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:550px; height:150px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"sup\" > <h2>Done! </h2></div> <br></center>  ";

}
else
{
echo "<script>alert(Error)</script>"; 
}
include "footer.html";
?>