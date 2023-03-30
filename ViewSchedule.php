<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
?>

<!doctype html>
<html lang="en">
<head>
	<title> Register for Classes</title>
	<meta charset="uft-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php require 'master2.php';?>

<div class="container text-center">
	<h1>Class Enrollment</h1>
	</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Semester</th>
      <th scope="col">Course Name</th>
      <th scope="col">Seat Limit</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
include __DIR__ . '\\includes\\Class2.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();

$sqlInit = "SELECT * FROM enrollments WHERE student=$id";
$enrInitResults = $eed->executeSelectQuery($conn, $sqlInit);
$classIdList = [];
$classDataResults = null;
if($enrInitResults) {
	while ($row=mysqli_fetch_assoc($enrInitResults)) {
		array_push($classIdList, $row['course']);
	}
}

if (count($classIdList) > 0) {
	$classIdListSQL = join(",", $classIdList);
	$sqlClassData = "SELECT * FROM courses WHERE courseID IN ($classIdListSQL)";
	$classDataResults = $eed->executeSelectQuery($conn, $sqlClassData);
}


//$sql="SELECT semester AS semester,courseName AS courseName,seatLimit AS seatLimit,courseID AS courseID FROM courseenrollments";
//$executeQueryresult = $eed->executeSelectQuery($conn, $sql);

if($classDataResults){
    while ($row=mysqli_fetch_assoc($classDataResults)){
        $semester=$row['semester'];
        $courseName=$row['courseName'];
        $seatLimit=$row['seatLimit'];
		$courseID=$row['courseID'];
	   
        echo'<tr>
        <th scope="row">'.$semester.'</th>
        <td>'.$courseName.'</td>
        <td>'.$seatLimit.'</td>
        <td>
            <button><a href="delete2.php?id='.$id.'&cid='.$courseID.'">Drop Course</a></button>
        </td>    
       </tr>';
    }
}
else {
	echo '<tr><td colspan="4">No enrolled classes</td></tr>';
}
    
?>
</tbody>

    
      
</table>	
	
	
	
<?php require_once 'footer.php';?>
</body>
</html>