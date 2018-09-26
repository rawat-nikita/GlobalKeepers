<!doctype html>
<html>
<head>
<style>
input[type=text],input[type=password],select
{
//align:center;
//position:relative;
margin-left:285px;
padding:5px;
width:400px;
border:2px solid grey;
}
input[type=number],textarea
{
margin-left:220px;
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

<form class="anim" action="caction.php" method="POST">

<center><h2>My share for the Global Goals</h2>(Fields having * are required)</center>
<div class="left">

<fieldset><legend>Personal Information</legend>
Global Goal : *
<select required default="" name="gg">
<option value="1">GG#1 Zero Poverty</option>
<option value="2">GG#2 No Hunger</option>
<option value="3">GG#3 Good Health and Well Being</option>
<option value="4">GG#4 Quality Education</option>
<option value="5">GG#5 Gender Equality</option>
<option value="6">GG#6 Clean Water and Sanitation</option>
<option value="7">GG#7 Affordable and Clean Energy</option>
<option value="8">GG#8 Decent Work and Economic Growth</option>
<option value="9">GG#9 Industry, Innovation and Infrastructure</option>
<option value="10">GG#10 Reduced Inequalities</option>
<option value="11">GG#11 Sustainable Cities and Communities</option>
<option value="12">GG#12 Responsible Consumption and Production</option>
<option value="13">GG#13 Climate Action</option>
<option value="14">GG#14 Life Below Water</option>
<option value="15">GG#15 Life on Land</option>
<option value="16">GG#16 Peace, Justice and strong Instuitutions</option>
<option value="17">GG#17 Partnerships for the Goals/option>
</select><br><br>
My Contribution :* 
<textarea required rows="4" col="150" name="contr" style="margin-bottom:-50px" ></textarea><br><br><br>
</fieldset>
<br>
<input type="submit" value="SUBMIT" style="padding:10px;" 
<br><br></div>
</form>

<br>
<?php
include('footer.html');
?>
</body>
