<?php
error_reporting(E_ERROR | E_PARSE);
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
$usn=$_POST['usn'];
$mk=$_POST['mk'];


session_start();
$id=$_SESSION['post_data3'];
$sql="select * from evaluation2 where usn='$usn' and (evaluation2.guide1='$id' or evaluation2.guide2='$id' or evaluation2.guide3='$id')";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if($row){
if($id==$row['guide1']){

$sql1="update evaluation2 set m1='$mk' where usn='$usn'";
$result1=mysql_query($sql1);
}
else
if($id==$row['guide2']){

$sql1="update evaluation2 set m2='$mk' where usn='$usn'";
$result1=mysql_query($sql1);
}
else{

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
echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="facmain.php";
</script>';
}
else
{
echo '<script type="text/javascript">
window.alert("Error");
window.location.href="facmain.php";
</script>';
}
}
else
{
echo '<script type="text/javascript">
window.alert("USN incorrect");
window.location.href="facmain.php";
</script>';


}
?>
