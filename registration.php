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
<?php require 'master.php';?>

	<div class="container text-center">
	<h1>Registration</h1>
	</div>


<body>
   <center>
      <form action="insert.php" method="POST" enctype="multipart/form-data">
      <p>
               <label for="email">E-mail Address:</label>
               <input type="text" name="email" id="email">
            </p>
<p>
               <label for="password">password</label>
               <input type="text" name="password" id="password">
            </p>
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="firstName" id="firstName">
            </p>
 
             
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="lastName" id="lastName">
            </p>
<p>
               <label for="address">Address:</label>
               <input type="text" name="address" id="address">
            </p>
<p>
               <label for="phone">Phone:</label>
               <input type="text" name="phone" id="phone">
            </p>
<p>
               <label for="gradeLevel">Schcool Grade Level:</label>
               <input type="text" name="gradeLevel" id="gradeLevel">
            </p>
<p>
               <label for="schoolNum">School ID:</label>
               <input type="text" name="schoolNum" id="schoolNum">
            </p>
 
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
