<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");

// Get values from form
$title=$_POST['title'];
$max=$_POST['max'];
$no=$_POST['no'];
$desc=$_POST['desc'];
$area=$_POST['area'];
if(!isset($title) || trim($title) == '' || !isset($max) || trim($max) == '' || !isset($no) || trim($no) == '' || !isset($desc) || trim($desc) == ''|| !isset($area) || trim($area) == '')
{
echo '<script type="text/javascript">
window.alert("Empty");
window.location.href="adminmain2.php";
</script>';
 
}
// Insert data into mysql
$sql="insert into project(no,title,dis,max,allot,area) values('$no','$title','$desc','$max','no','$area')";
$result=mysql_query($sql);

if($result){
echo '<script type="text/javascript">
window.alert("New Project Added");
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

