<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Login Page</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<?php require 'master.php';?>
<center>
	<div class="container text-center">
	<h1>Student Login Page</h1>
	</div>
	<header>
		<nav>
			<ul id="navli">
				
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">        
            <form action="process/eprocess.php" method="POST">
            <p>Email</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
			<li><a class="homeblack" href="alogin.php">Admin Login</a></li>
           
        </form>
        </center>
    </div>
	
	
	
<?php require_once 'footer.php';?>
</body>
</html>