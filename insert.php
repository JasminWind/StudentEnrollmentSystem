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
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
        #include 'includes/Class.php';
        include __DIR__ . '\\includes\\Class.php';
        $eed = new \jas\wind\EEdir();
        $conn = $eed->getConnection();
             
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $email=$_POST['email'];
        $password=$_POST['password'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gradeLevel=$_POST['gradeLevel'];
        $schoolNum=$_POST['schoolNum'];
         
        // Performing insert query execution
        // here our table name is students
        $sql = "INSERT INTO students (email, password, firstName, lastName, address, phone, gradeLevel, schoolNum) VALUES ('$email','$password','$firstName','$lastName','$address','$phone','$gradeLevel','$schoolNum')";
        
        $result = $eed->executeQuery($conn, $sql);

        if($result) {
        echo "<h3>Success</h3>";
             
            $selQry = "SELECT * FROM students WHERE email='".$email."'";
            $selResult = $eed->executeSelectQuery($conn, $selQry);
            echo "<br /><br />";

            $row = mysqli_fetch_row($selResult);
            echo nl2br("\n$row[0]\n $row[1]\n "
            . "$row[2]\n $row[3]\n $row[4] \n$row[5] \n$row[6] \n$row[7]"); 
        } else{
            echo "ERROR: Please try agian$sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>