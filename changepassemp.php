<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Update Employee Password</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<!--Codes from Dr. Issa-->
<?php require 'master.php';?>

	<div class="container text-center">
	</div>

<!--end of Codes from Dr. Issa--><?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `students` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Password Updated')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Update Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>




<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<html>
<head>
  <title>Change Password | Employee Management System</title>
<body>
  <center>
   
  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
                      <h2 class="title">Update Password</h2>
                    <form id = "registration" action="changepassemp.php" method="POST">

                          <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Old Password</p>
                                     <input class="input--style-1" type="Password" name = "oldpass" required >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>New Password</p>
                                    <input class="input--style-1" type="Password" name="newpass" required>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    
            </div>
        </div>
    </div>

</center>
</body>
</html>
