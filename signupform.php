<!doctype html>
<html>
<head>
<style>
input[type=text],input[type=password],select
{
//align:center;
//position:relative;
margin-left:275px;
padding:5px;
width:400px;
border:2px solid grey;
}
input[type=number],textarea
{
margin-left:250px;
padding:5px;
width:400px;
border:2px solid grey;
}
form
{
//align:center;
width:800px;
font-size:20px;
border: 2px solid black;
margin-left:360px;

}
.left
{
margin-left:50px;
}
legend
{
//align:center;
//margin-left:300px;
//align:left;
}
fieldset
{
width:700px;
//border:10px solid #009999;
//margin:5px;

}
.anim
{
animation : zoom 0.6s;
}
 @keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.frm
{
//align:center;
border: 5px solid black;
width:800px;
}
</style>
</head>
<body >
<?php 
include('header.html');
include('nav.html');
?>
<br>
<br>

<form class="anim" action="sign_up.php" method="POST" onsubmit="return checkOnSubmit()">

<center><h1>SIGN UP</h1>(Fields having * are required)</center>
<div class="left">

<fieldset><legend>Personal Information</legend>
First Name : * 
<input type="text" name="fname" size="40px" required ><br><br>
Last Name : * 
<input type="text" name="lname" size="40px" required><br><br>
Age : * 
<input type="number" name="age" required><br><br>
Gender : * 
<input type="radio" name="gender" value="m" required> Male      
<input type="radio" name="gender" value="f" required>Female<br><br> 
Country : 
<select default="" name="country">
<option value="in">India</option>
<option value="aus">Australia</option>
<option value="us">USA</option>
</select><br><br>
About : 
<textarea rows="4" col="150" name="about" style="margin-bottom:-50px" ></textarea><br><br><br>
</fieldset>
<br>
<fieldset><legend>Sign in Information</legend>
E-Mail ID : * 
<input type="text" name="email" id="mail" size="40px" value="" required onblur="check()">
<span id="msg" ><br></span><br><br>
Enter password : *<input type="password" size="40px" id="pw" required name="pword" value=""><br><br>

Confirm password : *<input type="password" size="40px" id="cpw" required name="cpword" value="" onblur="check2()"><br><br>
<span id="msg2"><br></span>
</fieldset><br>
<center><input type="submit" value="SUBMIT" style="padding:10px;" ></center>
<br><br></div>
</form>

<br>

<script>
var g=0;
function check()
{
var val=document.getElementById("mail").value;
var l=document.getElementById("mail").value.length;
var atf=val.indexOf("@");
var dot=val.indexOf(".");
var atl=val.lastIndexOf("@");
if(atf==0 ||atf==l-1||dot==0||dot==l-1||atf<0 || dotf<0 ||atl!=atf )
{
document.getElementById("msg").innerHTML="Invalid Email ID";
g=1;
}
else
{
document.getElementById("msg").innerHTML=" ";
g=0;
}
}

function check2()
{
var p1=document.getElementById("pw").value;
var p2=document.getElementById("cpw").value;
if(p1!=p2)
{
document.getElementById("msg2").innerHTML="Incorrect Password";
g=1;
}

}

function checkOnSubmit(){
if(g!=0)
{
alert("Invalid Input");
return false;
}

}
</script>
<?php
include('footer.html');
?>
</body>
