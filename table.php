<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Company Page</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php require 'master.php';?>

	<div class="container text-center">
	<h1>Employees</h1>
	</div>
    <div class="container">
    <button class="btn btn-info"><a href="registration.php">add user</a> </button>
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
      <th scope="col">salary</th>
      <th scope="col">Social Security Number</th>
      <th scope="col">Ops</th>
    </tr>
  </thead>
  <tbody>

<?php
include __DIR__ . '\\includes\\Class.php';
$eed = new \jas\wind\EEdir();
$conn = $eed->getConnection();
$sql="SELECT email AS email,password AS password,firstname AS firstname,lastname AS lastname,address AS address,phone AS phone,salary AS salary,ssn AS ssn FROM employee";
$executeQueryresult = $eed->executeSelectQuery($conn, $sql);

if($executeQueryresult){
    while ($row=mysqli_fetch_assoc($executeQueryresult)){
        $email=$row['email'];
        $password=$row['password'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $address=$row['address'];
        $phone=$row['phone'];
        $salary=$row['salary'];
        $ssn=$row['ssn'];
        echo'<tr>
        <th scope="row">'.$email.'</th>
        <td>'.$password.'</td>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$address.'</td>
        <td>'.$phone.'</td>
        <td>'.$salary.'</td>
        <td>'.$ssn.'</td>
        <td>
            <button class=><a href="update.php?eml='.$email.'">Update</a></button>
            <button><a href="delete.php?eml='.$email.'">Delete</a></button>
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