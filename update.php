<?php
include __DIR__ . '\\includes\\Class2.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();
if(isset($_GET['eml'])){
    $email=$_GET['eml'];

    $sql = "SELECT email AS email,password AS password,firstname AS firstname,lastname AS lastname,address AS address,phone AS phone,gradeLevel AS gradeLevel,schoolNum AS schoolNum FROM students WHERE email='".$email."'";
    $result = $eed->executeQuery($conn, $sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        $email=$row['email'];
        $password=$row['password'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $address=$row['address'];
        $phone=$row['phone'];
        $gradeLevel=$row['gradeLevel'];
        $schoolNum=$row['schoolNum'];
?>

<html><head><title>UPDATESSSSSS!!!!!!!</title></head>

<body>
<form action="doupdate.php" method="post">
<p>
    <label for="email">E-mail Address:</label>
    <span><?php echo $email; ?></span>
    <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
</p>
<p>
    <label for="password">password</label>
    <input type="text" name="password" id="password" value="<?php echo $password; ?>">
</p>
<p>
    <label for="firstname">first name</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
</p>
<p>
    <label for="lastname">last name</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
</p>
<p>
    <label for="address">address</label>
    <input type="text" name="address" id="address" value="<?php echo $address; ?>">
</p>
<p>
    <label for="phone">phone</label>
    <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
</p>
<p>
    <label for="gradeLevel">School Grade Level</label>
    <input type="text" name="gradeLevel" id="gradeLevel" value="<?php echo $gradeLevel; ?>">
</p>
<p>
    <label for="schoolNum">Student ID</label>
    <input type="text" name="schoolNum" id="schoolNum" value="<?php echo $schoolNum; ?>">
</p>
    <input type="submit" value="Submit">
    </form>
</body></html>
<?php
    }
    else {
        echo "Cannot retrieve data";
    }
    
}
else{
    echo "invalid parameter-empty";

}
mysqli_close($conn);
?>