<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!doctype html>
<html lang="en">
<head>
	<title> Company Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php require 'master2.php';?>

<div class="container text-center">
	<form method="post">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<button type="submit">Delete</button>
	</form>
	<?php
	include __DIR__ . '\\includes\\Class.php';
	$eed = new \jas\wind\EEdir();
	$conn = $eed->getConnection();

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		
		$sql = "DELETE FROM students WHERE email = '".$email."'";
		
		$result = $eed->executeQuery($conn, $sql);
		
		if ($result){
			echo "Deletion Successful!!!";
			echo '<li ><a href="table2.php">Back to Students</a></li>';
		}
		else {
			echo "Deletion failed";
		}
		mysqli_close($conn);
	}
	?>
</div>
</body>
</html>
