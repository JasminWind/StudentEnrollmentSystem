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
<?php require 'masteradmin.php';?>

	<div class="container text-center">
	<h1>Add Class</h1>
	</div>


<body>
   <center>
      <form action="insertClass.php" method="POST" enctype="multipart/form-data">
      <p>
               <label for="semester">Semester</label>
               <input type="text" name="semester" id="semester">
            </p>
<p>
               <label for="courseName">Course Name</label>
               <input type="text" name="courseName" id="courseName">
            </p>
<p>
               <label for="seatLimit">Seat Limit</label>
               <input type="text" name="seatLimit" id="seatLimit">
            </p>
<p>
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
