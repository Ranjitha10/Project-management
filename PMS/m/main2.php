<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
session_start();
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
error_reporting(E_ERROR | E_PARSE);
 ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Main</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">RVCE PROJECT MANAGEMENT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <li class="main.php"><a href="main.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#s5" data-toggle="modal" role="button">View Faculty</a></li>
                <li><a href="#view">View Projects</a></li>
                <li><a href="#s6" data-toggle="modal" role="button">View Timetable</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Marks</li>
                <li><a href="#marks">View Marks</a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#s5" data-toggle="modal" role="button">View Faculty</a></li>
                <li><a href="faq.php">FAQs</a></li>
                
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="index.html">Sign out   <span class="glyphicon glyphicon-log-out"></span></a>
		  </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="feedfetch1.php">Check Remarks</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            
          </ul>
          <ul class="nav nav-sidebar">
            
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php 

$i=$_SESSION['post_data'];
$sql1 = "SELECT no FROM project WHERE allot='no'";
$sql2 = "SELECT usn FROM student WHERE proj='0'";
$sql3="SELECT proj FROM student WHERE usn='$i'";
$result = mysql_query($sql3);
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql2);
$result4 = mysql_query($sql2);
while($row2 = mysql_fetch_array($result)){

if($row2['proj']!='0')
{
echo"<hr class='featurette-divider'>
<h2 style='margin-left:10px;'>Project</h2>
<center>";
 $z=$row2['proj'];
 $sql15="select * from project where no='$z'";
$result15 = mysql_query($sql15);
while($row15 = mysql_fetch_array($result15))
{   echo "Your project is<b>"." ".$row15['title']."</b><br><br>";
	echo "Your guide is<b>"." ".$row15['guide']."</b>";
}
 echo"</center>";
$sql8="SELECT marks FROM student WHERE usn='$i'";
$sql9="select * from evaluation2 where usn='$i' and m1>0 and m2>0 and m3>0 ";
$result9=mysql_query($sql9);

if($row9=mysql_fetch_array($result9))
{


$result8=mysql_query($sql8);
echo"<hr class='featurette-divider'>
<h2 id='marks' style='margin-left:10px;'>Marks for previous phase</h2>";
while($row8 = mysql_fetch_array($result8))
{
echo "<center><h4>Your marks for the previous phase is ".$m=$row8['marks']."</h4></center>";
}
}
else{
echo"<hr class='featurette-divider'>
<h2 id='marks' style='margin-left:10px;'>Marks for previous phase</h2>";
echo "<center><h4>marks not yet entered</h4></center>";}
echo'<hr class="featurette-divider">
<h2 style="margin-left:10px;">Next Phase</h2> ';


$sql4 = "SELECT name FROM current";
$result5 = mysql_query($sql4);
while($row3 = mysql_fetch_array($result5))
{
echo"<center><h4 style='color:#327;'>".$row3['name']."</h4></center>";
}

echo'
<hr class="featurette-divider">
<div id="timer">
<h2 style="margin-left:10px;">Time left until next phase</h2>';


$i=$_SESSION['post_data'];

$sql9="select * from evaluation1 where pno=(select proj from student where usn='$i')";
$result9=mysql_query($sql9);

if($row9 = mysql_fetch_array($result9)){
$m=$row9['date1'];
$n=$row9['time1'];

$date = strtotime("$m $n");
$remaining = $date - time()-1;
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor((($remaining % 86400) % 3600)/60); 
$seconds_remaining=floor(((($remaining % 86400) % 3600)%60));
 echo"<h5><center>Work for next phase is due on <h4 style='color:#327;'>".$m."</h4> at <h4 style='color:#327;'>".$n." </h4></h5></center><br><br>";
echo "<center><h5>There are "; 
 { echo $days_remaining;
echo " days, ";
 echo $hours_remaining;
 echo " hours and ";
 echo $minutes_remaining." minutes ";
 }}else
 {
echo "<center><h4>Timetable for next phase has not yet been released. Please wait.</h4></center>";
 }
 echo'
</div>


<hr class="featurette-divider">	
<div id="view">  

</div>';

echo"<h2 style='margin-left:10px;'>Your Project</h2><br> ";
echo "<center><h3>Your allotted project is: #".$row2['proj']."</h3></center><br>";
echo"<br><center><video controls poster='video/images.gif' width='512' height='288' preload='none'>
	<source src='video/vid.mp4' type='video/mp4' />
	
</video></center>";
}
else{


echo"<h2 style='margin-left:10px;'>Available Projects</h2>
        <div class='col-md-6' id='view' style='margin-left:10px;'>
          <table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
				<th>Domain</th>
                <th>Maximum Students</th>
              </tr>
            </thead>
            <tbody>";
			
$sql = "SELECT * FROM project WHERE allot='no'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['no']."</td>
                <td>".$row['title']."</td>
                <td>".$row['dis']."</td>
				<td>".$row['area']."</td>
                <td>".$row['max']."</td>
              </tr>";
	
}

echo"       </tbody>
          </table>
        </div>";
echo "<form  id='reg' method='post' action='registration_connection.php' class='form-horizontal' style='margin-left:20px; width:300px' >";
echo"<h2 style='margin-left:10px;'>Select Project</h2>";
echo "<select class='form-control' name='project_no'>";
while ($row = mysql_fetch_array($result1)) {
echo "<option value='" . $row['no'] ."'>" . $row['no'] ."</option>";
}
echo "</select>";

echo "Student 1:<select class='form-control' name='s1'><br>";
{
echo "<option value='" . $_SESSION['post_data'] ."'>" . $_SESSION['post_data']."</option>";
}
echo "</select>";
echo "Student 2:<select class='form-control' name='s2'><br>";
while ($row1 = mysql_fetch_array($result3)) {
echo "<option value='" . $row1['usn'] ."'>" . $row1['usn'] ."</option>";
} echo"<option value=''></option>";
echo "</select>";

echo "Student 3:<select class='form-control' name='s3'><br>";
while ($row3 = mysql_fetch_array($result4)) {
echo "<option value='" . $row3['usn'] ."'>" . $row3['usn'] ."</option>";
}echo"<option value=''></option>";
echo "</select>";
echo"<input type='submit' class='btn btn-primary'></input>";
echo"</form>";
echo"<br><br><a style='margin-left:20px;' href='#s9' data-toggle='modal' class='btn btn-primary' role='button'>Add own project</a></center>";
}}
?>

          

          
              
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<div class="modal fade" id="s4" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Project</center></p>
				</div>
				
				<div class="modal-body">
				<form method="post" action="adminproject_connection.php" class="form-horizontal" >
					
						Project No.
						
							<input type="text" class="form-control" name="no"><br>
						Title
						
							<input type="text" class="form-control" name="title"><br>
						
					Description
						
						<input type="text" class="form-control" name="desc"><br>
						Maximum Students
						
							<input type="text" class="form-control" name="max"><br>
						
							<input type="submit" class="btn btn-primary"></input>
						
				</form>	
						
    
						
					
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s5" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Faculty List</center></p>
				</div>
				
				<div class="modal-body">
				<?php echo" <table class='table table-bordered'>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Specialty</th>
                
              </tr>
            </thead>
            <tbody>";
			
$sql = "SELECT * FROM faculty";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['specialty']."</td>                
              </tr>";
	
}

echo"       </tbody>
          </table>";?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s6" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Timetable</center></p>
				</div>
				
				<div class="modal-body">
				<?php
//$sql8="SELECT * FROM project WHERE no NOT IN(SELECT pno FROM evaluation1)";
			
$sql7 = "SELECT * FROM evaluation1";
$result3 = mysql_query($sql7);

if($result3){
echo"
        
          <table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Main Guide</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>";
$sql8 = "SELECT * FROM evaluation1";
$result8 = mysql_query($sql8);
while ($row = mysql_fetch_array($result8)){
	echo "<tr>
                <td>".$row['pno']."</td>
                <td>".$row['guide1']."</td>
                <td>".$row['date1']."</td>
                <td>".$row['time1']."</td>
              </tr>";
	
}

echo"       </tbody>
          </table>
        ";
}

else{

echo "<center><h4>Timetable for next phase has not yet been released. Please wait.</h4></center>";
}
?>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="s9" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Project</center></p>
				</div>
				
				<div class="modal-body">
				<form method="post" action="own.php" class="form-horizontal" enctype="multipart/form-data">
					
						Project Title
						
							<input type="text" class="form-control" name="no"><br>
						
						Write Up
						
							<input type="file" class="form-control" name="uploadFile"><br>
						
							<input type="submit" class="btn btn-primary"></input>
						
				</form>	
						
    
						
					
				</div>
				
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
