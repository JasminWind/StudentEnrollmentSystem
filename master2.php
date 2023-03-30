<?php
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  if(isset($_SESSION['Username']))
	  echo "Welcome:" . $_SESSION['username'];
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>School Registration System</h1>

    </div>
  </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <u1 class="nav navbar-nav">
         <li class= "active"><a href="index.php?id=<?php echo ''.$id.'' ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="clasreg.php?id=<?php echo ''.$id.'' ?>"><span class="glyphicon glyphicon-plus"></span>Class Registration</a></li>
        <li><a href="viewschedule.php?id=<?php echo ''.$id.'' ?>"><span class="glyphicon glyphicon-th-list"></span>View Schedule</a></li>
         <li><a href="login.php"><span class="glyphicon glyphicon-ok"></span>Log Out</a></li>
      </u1>
      <ul class="nav navbar-nav navbar=right">
      </ul>
    </div>
  </div>
</nav>
</body>
</html>