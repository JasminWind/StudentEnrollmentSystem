<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Admin Dashboard</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php require 'masteradmin.php';?>

	<div class="container text-center">
	<h1>Admin Dashboard</h1>
	</div>
    <div class="container">
    <button class="btn btn-info"><a href="registration.php">Add Student</a> </button>
    <button class="btn btn-info"><a href="registrationClass.php">Add Course</a> </button>
    <button class="btn btn-info"><a href="table3.php">View Courses</a> </button>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">School Grade Level</th>
      <th scope="col">Student ID</th>
      <th scope="col">Ops</th>
    </tr>
  </thead>
  <tbody>

<?php
include __DIR__ . '\\includes\\Class.php';
$eed = new \jas\wind\EEdir();
$conn = $eed->getConnection();
$sql="SELECT email AS email,password AS password,firstname AS firstname,lastname AS lastname,address AS address,phone AS phone,gradeLevel AS gradeLevel,schoolNum AS schoolNum FROM students";
$executeQueryresult = $eed->executeSelectQuery($conn, $sql);

if($executeQueryresult){
    while ($row=mysqli_fetch_assoc($executeQueryresult)){
        $email=$row['email'];
        $password=$row['password'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $address=$row['address'];
        $phone=$row['phone'];
        $gradeLevel=$row['gradeLevel'];
        $schoolNum=$row['schoolNum'];
        echo'<tr>
        <th scope="row">'.$email.'</th>
        <td>'.$password.'</td>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$address.'</td>
        <td>'.$phone.'</td>
        <td>'.$gradeLevel.'</td>
        <td>'.$schoolNum.'</td>
        <td>
            <button class=><a href="update.php?eml='.$email.'">Update</a></button>
            <button><a href="doupdatetodelete.php?id='.$email.'">Delete</a></button>
        </td>    
       </tr>';
    }
}
    
?>
</tbody>

    
      
</table>	
	
	
	
<?php require_once 'footer.php';?>
</body>
</html>