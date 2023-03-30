<?php
	error_reporting(E_ALL ^ E_NOTICE)
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
      <th scope="col">Student Name</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
include __DIR__ . '\\includes\\Class2.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();
$sql="SELECT semester AS semester,courseName AS courseName,studentName AS studentName FROM courseenrollments";
$executeQueryresult = $eed->executeSelectQuery($conn, $sql);

if($executeQueryresult){
    while ($row=mysqli_fetch_assoc($executeQueryresult)){
        $semester=$row['semester'];
        $courseName=$row['courseName'];
        $studentName=$row['studentName'];
        echo'<tr>
        <th scope="row">'.$semester.'</th>
        <td>'.$courseName.'</td>
        <td>'.$studentName.'</td>
        <td>
            <button class=><a href="registrationEnrollment.php?eml='.$semester.'">Enroll</a></button>
            <button><a href="delete.php?eml='.$semester.'">Drop Course</a></button>
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