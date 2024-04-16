<?php
include('connection.php'); //Establishing connection with our database
    if(empty($_POST["role"]) || empty($_POST["firstname"])|| empty($_POST["email"]) || empty($_POST["password"]))
    {
        echo "all fields are required.";
    }
    else
    {
        
        $role = $_POST['role'];
        $firstname = $_POST['firstname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $sql="SELECT user_id FROM users WHERE firstname='$firstname' and email='$email' and password='$password' and role ='$role' ";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1) {
        
            if ($role == 'Admin') {
                header("Location: dashboard.php");
            } 
            elseif ($role == 'Chef') {
                header("Location: chefhome.html");
            }

            elseif ($role == 'Seeker') {
                header("Location: seekerhome.html");
            }
            
            else {
                header("Location: index.html");
            }
            exit();
        } 
        else {
            // Incorrect password
            echo "<script>alert('Invalid password!');</script>";
            echo "<script>window.location.href='login.html';</script>";
            exit();
        }
        


    }     



?>