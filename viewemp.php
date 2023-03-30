<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<!doctype html>
<html lang="en">
<head>
	<title> Registration Page</title>
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
	<h1>Employees</h1>
	</div>

<!--end of Codes from Dr. Issa-->
<div class="container text-center">
	</div>
    <div class="container">
    <button class="btn btn-info"><a href="registration.php">add user</a> </button>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">birthday</th>
      <th scope="col">gender</th>
      <th scope="col">phone</th>
      <th scope="col">ssn</th>
      <th scope="col">address</th>
      <th scope="col">salary</th>
	  <th scope="col">Ops</th>
    </tr>
  </thead>
  <tbody>
<html>
<head>
	<title>View Employee |  Admin Panel | Employee Management System</title>
</head>
<body>
<center>
	

		<table>
			<tr>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">phone</th>
				<th align = "center">ssn</th>
				<th align = "center">Address</th>
				<th align = "center">salary</th>
				<th align = "center">Point</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['phone']."</td>";
					echo "<td>".$employee['ssn']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['salary']."</td>";
					echo "<td>".$employee['points']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
			</center>
</body>
</html>