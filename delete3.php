<?php
error_reporting(E_ALL ^ E_NOTICE);

//including the database connection file
include("process/class2.php");

// check if user is logged in as admin
session_start();
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: login.php");
    exit;
}

//getting id of the data from url
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (!$id) {
    // no id provided, redirect to the display page
    header("Location: viewstudents.php");
    exit;
}

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM students WHERE id=$id");

if (!$result) {
    // deletion failed, redirect to the display page
    header("Location: viewstudents.php");
    exit;
}

//redirecting to the display page (viewstudents.php in our case)
header("Location: viewstudents.php");
exit;
?>

<!doctype html>
<html lang="en">
<head>
	<title>Company Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require 'master2.php';?>
	<div class="container text-center">
		<h1>Drop Class</h1>
	</div>
</body>
</html>
