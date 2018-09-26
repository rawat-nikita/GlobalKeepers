<?php

$con = mysqli_connect('localhost','root','','globalkeepers');
if($con)
{
$qry="select * from signup ";
$result=mysqli_query($con,$qry);
while($field=mysqli_fetch_assoc($result))
{
print $field['fname'];
print $field['lname'];
}
}
else
{
print "Database not found";
}
?>






echo "<div class=\"margin\">
 Name :  $f  $field['lname'' <br> 
 Age :  $field['age']<br>
 Gender : $field['gender']<br>
 Country : $field['country']<br>
 About me : $field['about']<br>
 E-Mail ID : $field['email']<br> </div>"
}
