<?php
	error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
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

<?php require 'master2.php';?>
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
        include __DIR__ . '\\includes\\Class2.php';
        $eed = new \jas\wind\cap();
        $conn = $eed->getConnection();
             
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $semester=$_POST['semester'];
        $courseName=$_POST['courseName'];
        $studentName=$_POST['studentName'];
		$studentId=$_POST['studentId'];
		$classId=$_POST['classId'];

         
        // Performing insert query execution
        // here our table name is courseenrollments
        $sql = "INSERT INTO courseenrollments (semester, courseName, studentName) VALUES ('$semester','$courseName','$studentName')";
		$sql2 = "INSERT INTO enrollments (student, course) VALUES ('$studentId','$classId')";
        
        $result = $eed->executeQuery($conn, $sql);
		$result2 = $eed->executeQuery($conn, $sql2);
		
        if($result) {
            echo "<h3>Success, Please Log Out and back in to see updated schedule</h3>";
                 
                $selQry = "SELECT * FROM courseenrollments WHERE semester='".$semester."' AND studentName='".$studentName."'";
                $selResult = $eed->executeSelectQuery($conn, $selQry);
                echo "<br /><br />";
    
                $row = mysqli_fetch_row($selResult);
                echo nl2br("\n$row[0]\n $row[1]\n "
                . "$row[2]\n $row[3]");
			
			echo '<p style="font-size:6;">';
			if ($result2) {
				echo "1";
			}
			else {
				echo "0";
			}
			echo '</p>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>