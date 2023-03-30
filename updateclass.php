<?php
include __DIR__ . '\\includes\\Class2.php';
$eed = new \jas\wind\cap();
$conn = $eed->getConnection();
if(isset($_GET['eml'])){
    $semester=$_GET['eml'];

    $sql = "SELECT semester AS semester,courseName AS courseName,seatLimit AS seatLimit,courseID AS courseID, FROM courses WHERE courseID='".$courseID."'";
    $result = $eed->executeQuery($conn, $sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        $semester=$row['semester'];
        $courseName=$row['courseName'];
        $seatLimit=$row['seatLimit'];
        $courseID=$row['courseID'];
?>

<html><head><title>UPDATESSSSSS!!!!!!!</title></head>

<body>
<form action="doupdateclass.php" method="post">
<p>
    <label for="semester">E-mail Address:</label>
    <span><?php echo $semester; ?></span>
    <input type="hidden" name="semester" id="semester" value="<?php echo $semester; ?>">
</p>
<p>
    <label for="courseName">courseName</label>
    <input type="text" name="courseName" id="courseName" value="<?php echo $courseName; ?>">
</p>
<p>
    <label for="seatLimit">first name</label>
    <input type="text" name="seatLimit" id="seatLimit" value="<?php echo $seatLimit; ?>">
</p>
<p>
    <label for="courseID">last name</label>
    <input type="text" name="courseID" id="courseID" value="<?php echo $courseID; ?>">
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