<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");

// Get values from form
$usn=$_POST['usn'];
$feedback=$_POST['feedback'];
$weekno=$_POST['weekno'];

if(!isset($usn) || trim($usn) == '' || !isset($feedback) || trim($feedback) == '' || !isset($weekno) || trim($weekno) == '')
{
echo '<script type="text/javascript">
window.alert("One or more fields Empty");
window.location.href="facmain2.php";
</script>';
 
}
// Insert data into mysql
$sql="insert into feedback values('$usn','$feedback','$weekno')";
$result=mysql_query($sql);

if($result){
echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="facmain2.php";
</script>';

}
else 
echo '<script type="text/javascript">
window.alert("Error");
window.location.href="facmain2.php";
</script>';

?>

<?php
// close connection
mysql_close();
?>

