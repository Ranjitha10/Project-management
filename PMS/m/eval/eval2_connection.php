<?php
error_reporting(E_ERROR | E_PARSE);
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
$usn=$_POST['usn'];
$mk=$_POST['mk'];
$date=$_POST['date'];

session_start();
echo $id=$_SESSION['post_data3'];
$sql="select * from evaluation2 where usn='$usn' and (evaluation2.guide1='$id' or evaluation2.guide2='$id' or evaluation2.guide3='$id')";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if($row){
if($id==$row['guide1']){
$sqldate="update evaluation2 set date1='$date' where usn='$usn'";
$resultdate=mysql_query($sqldate);
$sql1="update evaluation2 set m1='$mk' where usn='$usn'";
$result1=mysql_query($sql1);
}
else
if($id==$row['guide2']){
$sqldate="update evaluation2 set date2='$date' where usn='$usn'";
$resultdate=mysql_query($sqldate);
$sql1="update evaluation2 set m2='$mk' where usn='$usn'";
$result1=mysql_query($sql1);
}
else{
$sqldate="update evaluation2 set date3='$date' where usn='$usn'";
$resultdate=mysql_query($sqldate);
$sql1="update evaluation2 set m3='$mk' where usn='$usn'";
$result1=mysql_query($sql1);
}
$sqlavg="select * from evaluation2 where usn='$usn'";
$avgresult=mysql_query($sqlavg);
$row=mysql_fetch_array($avgresult);
$avg=(($row['m1']+$row['m2']+$row['m3'])/3);
$sql2="UPDATE student SET marks ='$avg' where usn ='$usn'";
$result2=mysql_query($sql2);
if($result1&&$result2){
echo "Marks Successfully Updated";
echo "<BR>";
echo "<font size=5><a href='facmain.php'>Back to main page</a></font>";
}
else
{
echo "Error";
echo "</BR>";
echo "<font size=5><a href='facmain.php'>Back to main page</a></font>";
}
}
else
{
echo "<b><font size=5 color=red>Usn Of Student is Incorrect</font></b>";
echo "<BR>";
echo "<BR>";
echo "<font size=5><a href='facmain.php'>Back to main page</a></font>";


}
?>
