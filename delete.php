<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
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
<?php require 'master2.php';?>

	<div class="container text-center">
	<h1>Drop Class</h1>
	</div>
    <?php
//including the database connection file
include("process/dbh.php");

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM students WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewstudents.php");
?>

