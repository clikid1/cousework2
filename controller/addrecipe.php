<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['uploadd']))
    {
       
        $RecipeName = $_POST['r_name'];
        $Recipeinstruc= $_POST['r_instru'];
        $Recipeingredi = $_POST['r_ingri'];
        $chefname = $_POST['chef_name'];
        $categories = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO recipe
         (chef_name, recipe_name, recipe_instruc, recipe_image, category, recipe_ingri) 
         VALUES ('$chefname','$RecipeName','$Recipeinstruc','$image','$categories','$Recipeingredi')");
 
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