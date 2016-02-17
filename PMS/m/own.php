<?php

$my_folder = "\var\www\html\"; 
copy($_FILES['uploadFile']['tmp_name'],$my_folder.$_FILES['uploadFile']['name']);

echo '<script type="text/javascript">
window.alert("Successful");
window.location.href="main2.php";
</script>';

?>
