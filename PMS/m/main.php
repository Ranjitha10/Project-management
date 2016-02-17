<!DOCTYPE html>
<html lang="en">
<?php
session_start();
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
error_reporting(E_ERROR | E_PARSE);
 ?>
  <head>
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
	<script>
	function disTimer()
	{
	var elt=document.getElementById("timer");
	elt.innerHTML="";
	}
	</script>
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#s5" data-toggle="modal" role="button">View Faculty</a></li>
                <li><a href="main2.php">View Projects</a></li>
                <li><a href="main2.php">View Timetable</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Marks</li>
                <li><a href="main2.php">View Marks</a></li>
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
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div id="shi">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover"><br><br><br>
            <h1 class="cover-heading">Welcome <?php echo $i=$_SESSION['post_data'];?></h1>
            <p class="lead">Track the progress of your project!</p>
            <p class="lead">
              <a href="main2.php" class="btn btn-lg btn-default">Check</a>
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
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
