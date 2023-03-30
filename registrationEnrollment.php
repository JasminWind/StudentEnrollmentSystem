<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$classid = (isset($_GET['cid']) ? $_GET['cid'] : '');
	$semName = (isset($_GET['eml']) ? $_GET['eml'] : '');
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
	<h1>Enroll in a Class</h1>
	</div>
<?php
include __DIR__ . '\\includes\\Class2.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();

 $sqlSTD = "SELECT firstName AS firstName,lastName AS lastName from `students` WHERE id=$id";
 $resultSTD = $eed->executeSelectQuery($conn, $sqlSTD);

$sqlCLS="SELECT courseName AS courseName,seatLimit AS seatLimit FROM courses WHERE courseID=$classid";
$resultCLS = $eed->executeSelectQuery($conn, $sqlCLS);

$courseName = "";
$studentName = "";

if($resultSTD) {
	$firstRowS = mysqli_fetch_assoc($resultSTD);
	$studentName = $firstRowS['firstName'].' '.$firstRowS['lastName'];
}

if($resultCLS) {
	$firstRowC = mysqli_fetch_assoc($resultCLS);
	$courseName = $firstRowC['courseName'];
}
?>

<body>
   <center>
      <form action="insertEnrollment.php" method="POST" enctype="multipart/form-data">
      <p>
               <label for="semester">Semester</label>
               <input type="text" name="semester" id="semester" value="<?php echo ''.$semName.'' ?>">
            </p>
<p>
               <label for="courseName">Course Name</label>
               <input type="text" name="courseName" id="courseName" value="<?php echo ''.$courseName.'' ?>">
            </p>
<p>
               <label for="studentName">Student Name</label>
               <input type="text" name="studentName" id="studentName" value="<?php echo ''.$studentName.'' ?>">
            </p>
<p>
			<input type="hidden" id="studentId" name="studentId" value="<?php echo ''.$id.'' ?>">
			<input type="hidden" id="classId" name="classId" value="<?php echo ''.$classid.'' ?>">
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>
<?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	 // collect value of input field
	 $data = $_REQUEST['val1'];
  
	 if (empty($data)) {
		 echo "data is empty";
	 } else {
		 echo $data;
	 }
 }
 ?>

<?php require_once 'footer.php';?>
</body>
</html>
