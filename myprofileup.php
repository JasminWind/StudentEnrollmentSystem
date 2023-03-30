<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Update Profile</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<!--Codes from Dr. Issa-->
<?php require 'master.php';?>

<!--end of Codes from Dr. Issa-->
<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `students` WHERE 1";

$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `students` SET `email`='$email',`phone`='$phone',`address`='$address' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='myprofile.php?id=$id  ';
    </SCRIPT>");

  
}
?>
<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `students` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $email = $res['email'];
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $address = $res['address'];
  $phone = $res['phone'];
  $schoolNum = $res['schoolNum'];
  $gradeLevel = $res['gradeLevel'];
 }
}

?>

<html>

<body>
  <center>
 
                    <h1 class="title">Update Student Information</h1>
                    <form id = "registration" action="myprofileup.php" method="POST">



                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                       
                        
                        <div class="input-group">
                          <p>phone</p>
                            <input class="input--style-1" type="number" name="phone" value="<?php echo $phone;?>">
                        </div>

                       

                        
                         <div class="input-group">
                          <p>Address</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    <br>
                    <button class="btn btn--radius btn--green" onclick="window.location.href = 'changepassstudent.php?id=<?php echo $id?>';">Change Password</button>

</center?
</body>
</html>
