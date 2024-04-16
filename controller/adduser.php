<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
       
        $FirstName=$_POST['firstname'];
        $LastName= $_POST['lastname'];
        $Email= $_POST['email'];
        $Password= $_POST['password'];
        $Contactno= $_POST['contact_no'];
        $Role= $_POST['role'];

        
        
       

         $insert = mysqli_query($conn,"INSERT INTO users
         (firstname, lastname, email, password, contact_no, role) 
         VALUES (' $FirstName','$LastName',$Email,'$Password','$Contactno','$Role')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>