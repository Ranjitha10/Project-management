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
            <li class="active"><a href="facmain.php">Home</a></li>
            <li><a href="#s8" data-toggle="modal" role="button">View Remarks</a></li>       	
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="index.html">Sign out   <span class="glyphicon glyphicon-log-out"></span></a>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div id="shi5">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover"><br><br><br>
            <h1 class="cover-heading">Enter remarks</h1><center>
            <?php 
			$j=$_SESSION['post_data3'];
			$sql3="SELECT usn FROM student WHERE proj IN(SELECT no FROM project WHERE guide='$j')";
$result1 = mysql_query($sql3);
echo "	<form method='post' action='feedinsert.php' class='form-horizontal' style='margin-left:40px; width:300px;border:2px;' >";

echo "<select class='form-control' name='usn'>";
while ($row = mysql_fetch_array($result1)) {
echo "<option value='" . $row['usn'] ."'>" . $row['usn'] ."</option>";
}
echo "</select>";

echo "Week No:<select class='form-control' name='weekno'><br>";
$i=1;
while ($i<=12) {
echo "<option value='" . $i ."'>" . $i ."</option>";
$i++;
}
echo "</select><br>";

echo"Feedback:<textarea class='form-control' rows='4' name='feedback'></textarea><br>";

echo"<input type='submit' class='btn btn-primary'></input><br>";
echo"</form>";?></center>
            <p class="lead">
              
            </p>
          </div>

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
 <div class="modal fade" id="s8" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>View Remarks</center></p>
				</div>
				
				<div class="modal-body">
				<?php echo"<form method='post' action='feedfetch.php' class='form-horizontal' style='margin-left:40px; width:300px;border:2px;' >";
				echo "<select class='form-control' name='usn'>";
				
				$sql7="SELECT usn FROM student WHERE proj IN(SELECT no FROM project WHERE guide='$j')";
				$result7=mysql_query($sql7);
				while ($row7 = mysql_fetch_array($result7)) {
				echo "<option value='" . $row7['usn'] ."'>" . $row7['usn'] ."</option>";
				}
				echo "</select>";
				
				echo "<br><center><input type='submit' class='btn btn-primary'></input></center></form>";
				
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
