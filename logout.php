<?php
include "header.html";
include "nav.html";
$con=mysqli_connect('localhost','root','','globalkeepers'); 
$qry = "select * from signup where login=1 "; 
$res=mysqli_query($con,$qry);   
if(mysqli_num_rows($res)>0)
{
echo "<style> .lgin{animation:zoom 0.6s;font-size:30px;border:1px solid black;width:500px; height:275px;padding:20px;}  @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}</style> 
<br> <center><div class=\"lgin\" > <h2>Are you sure you want to log out?<h2>  
<button><a href='loutaction.php'> Yes </a></button>
<button><a href='pro.php'> No </a></button>
</div><br></center>
  ";
}
include "footer.html";
  ?>