<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");

// Get values from form
$title=$_POST['id'];
$max=$_POST['name'];
$no=$_POST['specialty'];
$p=$_POST['password'];

if(!isset($title) || trim($title) == '' || !isset($max) || trim($max) == '' || !isset($no) || trim($no) == '')
{
   echo "You did not fill out the required fields.";

echo "<a href='adminmain.php'>Back to main page</a>";   
$result=0;
}
// Insert data into mysql
$sql="insert into faculty values('$title','$max','$no')";
$sql1="insert into faclogin values('$title','$p',0)";
$result=mysql_query($sql);
$result1=mysql_query($sql1);
if($result&&$result1){

echo '<script type="text/javascript">
window.alert("New Faculty Added");
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

