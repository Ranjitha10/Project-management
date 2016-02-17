<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
session_start();
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Main</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">RVCE Project Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#s10"  data-toggle="modal" role="button">View Timetable</a></li>
			<li><a href="facmain3.php"  data-toggle="modal" role="button">Evaluate</a></li> 
            <li><a href="#s9"  data-toggle="modal" role="button">View Projects</a></li>  
			<li><a href="facmain2.php">Remarks</a></li>        	
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="index.html">Sign out   <span class="glyphicon glyphicon-log-out"></span></a>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div id="shi1">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover"><br><br><br>
            <h1 class="cover-heading">Welcome <?php echo $i=$_SESSION['post_data3'];?></h1>
            <p class="lead">Manage your students' project.</p>
            <p class="lead">
              
            </p>
          </div>
		  <center>
		  <?php echo"<form method='post' action='facmain3.php' class='form-horizontal' style='margin-left:40px; width:300px;border:2px;' >";
				
				echo "<select class='form-control' name='t1'>";
				$id=$_SESSION['post_data3'];
				$sql7="select title from evaluation2 where (evaluation2.guide1='$id' or evaluation2.guide2='$id' or evaluation2.guide3='$id')";
				$result7=mysql_query($sql7);
				while ($row7 = mysql_fetch_array($result7)) {
				echo "<option value='" . $row7['title'] ."'>" . $row7['title'] ."</option>";
				}
				echo "</select>";
				echo"<br><br>";
				
				echo "<input type='submit' class='btn btn-primary'></input></form>";
				
				?>
		  </center>

          <div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div>

        </div>

      </div>

    </div>
</div>

		


      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<div class="modal fade" id="s8" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Evaluate</center></p>
				</div>
				
				<div class="modal-body">
				<?php echo"<form method='post' action='eval2_connection.php' class='form-horizontal' style='margin-left:40px; width:300px;border:2px;' >";
				echo "<select class='form-control' name='usn'>";
				$title=$_POST['title'];
				$sql7="select usn from evaluation2 where (evaluation2.title='$title')";
				$result7=mysql_query($sql7);
				while ($row7 = mysql_fetch_array($result7)) {
				echo "<option value='" . $row7['usn'] ."'>" . $row7['usn'] ."</option>";
				}
				echo "</select>";
				
				echo"Marks<input type='text' class='form-control' name='mk'  /><br>";
				echo "<input type='submit' class='btn btn-primary'></input></form>";
				
				?>	
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s9" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Projects List</center></p>
				</div>
				
				<div class="modal-body">
				<table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Maximum Students</th>
              </tr>
            </thead>
            <tbody>
			<?php
$sql = "SELECT * FROM project";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['no']."</td>
                <td>".$row['title']."</td>
                <td>".$row['dis']."</td>
                <td>".$row['max']."</td>
              </tr>";
	
}
?>
              </tbody>
          </table>
				</div>
				
			</div>
		</div>
	</div>
	
<div class="modal fade" id="s10" role="dialog">
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
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
