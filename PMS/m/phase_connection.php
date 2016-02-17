<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");


$title=$_POST['phase'];


if(!isset($title) || trim($title) == '')
{
echo '<script type="text/javascript">
window.alert("Empty");
window.location.href="adminmain2.php";
</script>';
 
$result=0;
}
// Insert data into mysql
$sql="delete from current";
$result=mysql_query($sql);
$sql1="insert into current values('$title')";
$result1=mysql_query($sql1);
$sql2="delete from evaluation1";
$result2=mysql_query($sql2);

if($result&&$result1&&$result2){
echo '<script type="text/javascript">
window.alert("Phase changed");
window.location.href="adminmain.php";
</script>';

}
else 
echo '<script type="text/javascript">
window.alert("Error");
window.location.href="adminmain.php";
</script>';

?>

<?php
// close connection
mysql_close();
?>

