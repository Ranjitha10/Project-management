<?php
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
$pno=$_POST["no"];
$guide=$_POST["guide"];
$sql="update project set guide='$guide' where no='$pno' ";
$result=mysql_query($sql);
if($result)
{
echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="adminmain.php";
</script>';
}
?>
