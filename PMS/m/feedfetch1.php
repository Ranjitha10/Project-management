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
          <a class="navbar-brand" href="#">RVCE Project Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="main2.php">Back</a></li>
                   	
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="index.html">Sign out   <span class="glyphicon glyphicon-log-out"></span></a>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div id="shi7">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover"><br><br><br>
            <h1 class="cover-heading">View Remarks</h1><center>
            <?php
$host="localhost"; // Host name or server name
$username="root"; // Mysql username
$password="";// Mysql password
$db_name="Project_Management"; // Database name
$tbl_name="feedback";// Table name
// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("$db_name")or die("  cannot select DB");
$usn=$_SESSION['post_data'];
$sql="select  weekno,feedback from feedback where usn='$usn'";
$result=mysql_query($sql);
if(!($row = mysql_fetch_array($result))){
echo"<h4>No remarks entered</h4>";
}
else{
echo"
<b>
<table class='table table-bordered'>
  <tr>
    <th>Week No</th>
    <th>Feedback</th> 
  </tr>
</b>";

$sql="select  weekno,feedback from feedback where usn='$usn'";
$result=mysql_query($sql);
while ($row = mysql_fetch_array($result))
    {
	{echo "<tr><td>";
	echo $row["weekno"];echo "</td>";
	echo "<td>";
	echo $row["feedback"]; echo "</td>";
	echo "</tr>";
	}
}
}
?></center>
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
 
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
