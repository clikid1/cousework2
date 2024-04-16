<?php

// Database contact form details

include('connection.php');

    //Extract the post variables from the form
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //Database insert SQL code
    $sql = "INSERT INTO contactus  (fname, lname, phone, email, message) VALUES ('$fname', '$lname', '$phone', '$email', '$message')";
                                                         

    //Insert into database
    $result = $conn->query($sql);

    if($result)
    {
        echo "Contact Records Inserted";
        header("Location: index.html");
    }
?>