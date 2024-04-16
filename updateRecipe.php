<?php

include('connection.php');
 $chefname=$_POST['chef_name'];
 $Foodcategory=$_POST['category'];
 $RecipeName=$_POST['recipe_name'];
 $Requirements=$_POST['recipe_ingri'];
 $Instructions=$_POST['recipe_instruc'];

    if(empty($_POST["chef_name"]) || empty($_POST["category"]) || empty($_POST["recipe_name"]) || empty($_POST["recipe_ingri"]) || empty($_POST["recipe_instruc"]))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "UPDATE recipe set chef_name='$chefname',recipe_instruc='$Instructions' category='$Foodcategory',recipe_ingri='$Requirements', where recipe_name='$RecipeName'";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo "Updated Successfully";
            header("Location: chefhome.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: editRecipe.html");
        }
    }
   
?>