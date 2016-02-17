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
$m1=$_POST['guide1'];
$m2=$_POST['guide2'];
$m3=$_POST['guide3'];
$m4=$_POST['date'];
$m5=$_POST['time'];


//$m4=$m1.$m5.$m2.$m6.$m3;

// Insert data into mysql
// if successfully insert data into database, displays message "Successful".

$sql1="select title,s1,s2,s3,s4 from project where no='$project'";
$result1=mysql_query($sql1);
while($row = mysql_fetch_array($result1))
{ $m6=$row['s1'];
$m7=$row['s2'];
$m8=$row['s3'];
$m9=$row['title'];


$sql3="insert into evaluation2(usn,guide1,guide2,guide3,title) values('$m6','$m1','$m2','$m3','$m9')";
$result3=mysql_query($sql3);

$sql4="insert into evaluation2(usn,guide1,guide2,guide3,title) values('$m7','$m1','$m2','$m3','$m9')";
$result4=mysql_query($sql4);

$sql5="insert into evaluation2(usn,guide1,guide2,guide3,title) values('$m8','$m1','$m2','$m3','$m9')";
$result5=mysql_query($sql5);
}


$sql2="insert into evaluation1 values('$m1','$m2','$m3','$m4',$project,'$m5','$m6','$m7','$m8')";

$result2=mysql_query($sql2);

if($result2){
echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="adminmain.php";
</script>';
}
else
{
echo '<script type="text/javascript">
window.alert("Error");
window.location.href="adminmain.php";
</script>';
}
?>

<?php
// close connection
mysql_close();
?>
