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
        <?php
include __DIR__ . '\\includes\\Class.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();

        $semester=$_POST['semester'];
        $courseName=$_POST['couseName'];
        $seatLimit=$_POST['seatLimit'];
        $courseID=$_POST['courseID'];

        $sql = "UPDATE courses  SET password='".$password.
        "',semester='".$semester.
        "',courseName='".$courseName.
        "',seatLimit='".$seatLimit.
        "',courseID='".$courseID.
        "' WHERE semester='".$semester."'";
        
        $result = $eed->executeQuery($conn, $sql);
    if ($result){
        echo "Update Successful!!!";
        echo '<li ><a href="table2.php">Back to Students</a></li>';
    }
    else {
        echo "failed";
    }  

?>