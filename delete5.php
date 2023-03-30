<?php
    // including the database connection file
    include("process/dbh.php");

    // check if the email parameter is present in the URL
    if (isset($_GET['email'])) {
        // retrieve the email value from the URL
        $email = $_GET['email'];

        // prepare a SQL query to delete the record with the specified email
        $sql = "DELETE FROM `students` WHERE `email` = '$email'";

        // execute the query
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "No email specified";
    }
?>