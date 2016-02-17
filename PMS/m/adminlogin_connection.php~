<script src="validation.js"></script>
<?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="root";// Mysql password
$db_name="Project_Management"; // Database name
$tbl_name="faclogin"; // Table name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("  cannot select DB");

// Get values from form
$u_name=$_POST['u_name'];
$pwd=$_POST['pwd'];

// Insert data into mysql
$sql="select * from faclogin where id='$u_name' and password='$pwd' and val=1";  
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
// if successfully insert data into database, displays message "Successful".
if($row){
$sql="select * from faclogin where id='$u_name'";  
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
session_start();
$_SESSION['post_data'] = $row['name']; 

header('Location: adminmain.php');
}
else {
echo '<script type="text/javascript">
window.alert("wrong user name or password");
window.location.href="index.html";
</script>';
}
?>

<?php
// close connection
mysql_close();
?>
