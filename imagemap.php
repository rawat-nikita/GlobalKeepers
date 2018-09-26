<!doctype html>
<html lang="en-US">
<head>
<style>
.margin{
    margin:20px;
}
</style>

<link rel="stylesheet" type="text/css" href="css.css">


</head>
<body>

<?php 
include('header.html');
include "nav.html";
include "hoverwhygk.html";
?>

<div class="margin">
<h2>Click on any global goal to know more about it</h2>
<img src="global goals.jpg" alt="Global Goals image mapping" usemap="#ggmap" style="width:1150px; height:500px; float:centre;">
<map name="ggmap">
<a href="goal1.html"><area shape="rect" coords="19,13,192,165" href="goal1.php" alt="No Poverty"></a>
<area shape="rect" coords="204,15,397,160" href="goal2.php" alt="No hunger">
<area shape="rect" coords="394,12,564,161" href="goal3.php" alt="Good Health">
<area shape="rect" coords="581,15,753,160" href="goal4.php" alt="Quality Education">
<area shape="rect" coords="767,13,941,160" href="goal5.php" alt="Gender Equality">
<area shape="rect" coords="956,15,1126,163" href="goal6.php" alt="Clean Water and Sanitation">
<area shape="rect" coords="18,173,190,321" href="goal7.php" alt="Renewable Energy">
<area shape="rect" coords="208,177,378,319" href="goal8.php" alt="Good Jobs and Economic Growth">
<area shape="rect" coords="397,176,566,321" href="goal9.php" alt="Innovation and Infrastructure">
<area shape="rect" coords="580,177,753,321" href="goal10.php" alt="Reduced Inequalities">
<area shape="rect" coords="768,173,942,322" href="goal11.php" alt="Sustainable Cities and Communities">
<area shape="rect" coords="954,174,1125,321" href="goal12.php" alt="Responsible Consumption">
<area shape="rect" coords="21,335,191,480" href="goal13.php" alt="Climate Action">
<area shape="rect" coords="206,334,380,481" href="goal14.php" alt="Life below Water">
<area shape="rect" coords="395,334,566,478" href="goal15.php" alt="Life on Land">
<area shape="rect" coords="582,334,752,481" href="goal16.php" alt="Peace and Justice">
<area shape="rect" coords="768,336,937,479" href="goal17.php" alt="Partnership for the Goals">
</map>
</div>

<?php
 include "footer.html";
?>
</body>

</html>