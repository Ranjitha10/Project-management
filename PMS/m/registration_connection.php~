<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");
// Get values from form
$project=$_POST['project_no'];
$m1=$_POST['s1'];
$m2=$_POST['s2'];
$m3=$_POST['s3'];

//$m4=$m1.$m5.$m2.$m6.$m3;

// Insert data into mysql
// if successfully insert data into database, displays message "Successful".

$sql1="update project set s1='$m1',s2='$m2',s3='$m3',allot='yes' where no='$project'";
$sql2="update student set proj='$project' where usn='$m1'";
$sql3="update student set proj='$project' where usn='$m2'";
$sql4="update student set proj='$project' where usn='$m3'";
$result1=mysql_query($sql1);
$result2=mysql_query($sql2);
$result3=mysql_query($sql3);
$result4=mysql_query($sql4);
if($result1&&$result2&&$result3&&$result4){
echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="main.php";
</script>';
}
else
{
echo '<script type="text/javascript">
window.alert("Unsuccessful");
window.location.href="main.php";
</script>';
}
?>

<?php
// close connection
mysql_close();
?>
