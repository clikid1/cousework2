<?php
    include_once "../config/dbconnect.php";

    $recipe_id=$_POST['recipe_id'];
    $chefname=$_POST['chef_name'];
    $RecipeName= $_POST['r_name'];
    $Recipeinstruc= $_POST['r_instruc'];
    $categories= $_POST['category'];
    $Recipeingri= $_POST['r_ingri'];
    

    if( isset($_FILES['newImage']) ){
        
        $location="./images/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../images/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE recipe SET 
        recipe_name='$RecipeName', 
        r_instruc='$Recipeinstruc', 
        chef_name=$chefname,
        r_ingri=$Recipeingri,
        category=$categories,
        recipe_image='$final_image' 
        WHERE recipe_id=$recipe_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>