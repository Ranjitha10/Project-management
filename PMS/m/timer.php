<!doctype html>
<html>
<html>
<head>
<title>PHP Countdown Timer</title>

<style>
.green{color:green;}

h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("October 27, 2015 5:17 PM");
$remaining = $date - time()-1;
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor(($remaining % 86400) % 3600)/60);
echo "<h1>There are <span class='green'>"; 
 { echo $days_remaining;
echo "</span> days, <span class='green'>";
 echo $hours_remaining;
 echo "</span> hours left</h1>";
 echo $minutes_remaining;
 }
 ?>
 
 <input type="date"   value="yyyy-mm-dd" >
 <input type="time" name="t" value="12:00">
 </body>
</html>
