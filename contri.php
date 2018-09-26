<?php
include "header.html";
include "nav.html";
include "hoverprofile.html";
$con=mysqli_connect('localhost','root','','globalkeepers'); 
$qry = "select * from contributions where email in(select email from signup where login=1) "; 
$result=mysqli_query($con,$qry); 
$field= mysqli_fetch_assoc($result)  ;
if($result)
{
$a=$field['gg'];
$b=$field['contri'];
echo "<style> .sup{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:550px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"sup\" > <h3> Global Goal : $a <br>Contribution : $b <br></h3>
<br><button><a href='contriform.php'> Add contributions </a></button>
</div><br></center>  ";

}
else
{
echo "<style> .sup{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:550px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"sup\" > <h3> You do not have any contributions yet </h3>
<br><button><a href='contriform.php'> Add contributions </a></button>
</div><br></center>  ";

}
include "footer.html";
?>