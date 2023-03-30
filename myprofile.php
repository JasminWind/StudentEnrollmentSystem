<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
?>
<!doctype html>
<html lang="en">
<head>
	<title> Student Profile</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!--Codes from Dr. Issa-->
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
        <li><a href="ViewSchedule.php?id=<?php echo ''.$id.'' ?>"><span class="glyphicon glyphicon-th-list"></span>View Schedule</a></li>
      </u1>
      <ul class="nav navbar-nav navbar=right">
    <?php
		if( isset($_SESSION['username']))
		{
			
			echo '<li ><a href="profile.php"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>';
			echo '<li ><a href="index.php?Logout=1"<span class="glyphicon glyphicon-off"></span> Logout</a></li>';
		}
		else
		{
			echo '<li><a href="login.php"> Logout</a></li>';
		}
    ?>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>

	<div class="container text-center">
	</div>

<!--end of Codes from Dr. Issa-->


<?php

require_once ('process/class.php');
//$sql = "SELECT * FROM `students` WHERE 1";

//echo "$sql";


  $sql = "SELECT * from `students` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
 
  if($result){
  $res = mysqli_fetch_assoc($result);
  $email = $res['email'];
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $address = $res['address'];
  $phone = $res['phone'];
  $gradeLevel = $res['gradeLevel'];
  $schoolNum = $res['schoolNum'];

}

?>

<html>
<head>
  <title>Student</title>        
</head>
<body>
<center>
<div class="card card-1">
<div class="card-heading"></div>
<div class="card-body">
<h2 class="title">Student Profile</h2>
<form method="POST" action="myprofileup.php?id=<?php echo $id?>" >
    <div class="row row-space">
    <div class="input-group">
      <p>Email</p>
        <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
    </div>
    <div class="col-2">
            <div class="input-group">
              <p>First Name</p>
                  <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
              <p>Last Name</p>
                <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
            </div>
        </div>
    </div>
    <div class="input-group">
      <p>Address</p>
        <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>" readonly>
    </div>
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
            <div class="input-group">
      <p>Phone Number</p>
        <input class="input--style-1" type="number" name="phone" value="<?php echo $phone;?>" readonly>
    </div>
    <div class="input-group">
      <p>School Grade Level</p>
        <input class="input--style-1" type="text" name="gradeLevel" value="<?php echo $gradeLevel;?>" readonly>
    </div> 
    <div class="input-group">
      <p>Student ID</p>
        <input class="input--style-1" type="number" name="schoolNum" value="<?php echo $schoolNum;?>" readonly>
    </div>
    <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
    <div class="p-t-20">
        <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
    </div>
          </form>
      </div>
  </div>
</center>
</body>
</html>
