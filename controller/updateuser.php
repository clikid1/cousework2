<?php
    include_once "../config/dbconnect.php";

    $user_id=$_POST['user_id'];
    $FirstName=$_POST['firstname'];
    $LastName= $_POST['lastname'];
    $Email= $_POST['email'];
    $Password= $_POST['password'];
    $Contactno= $_POST['contact_no'];
    $Role= $_POST['role'];
    

   
    $updateItem = mysqli_query($conn,"UPDATE recipe SET 
        firstname='$Firstname', 
        lastname='$Fastname', 
        email=$Email,
        role=$Role, 
        password=$Password,
        contact_no=$Contactno,

        
        WHERE user_id=$user_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>