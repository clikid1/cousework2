<?php

    include_once "../config/dbconnect.php";
    
    $r_id=$_POST['record'];
    $query="DELETE FROM recipe where recipe_id='$r_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Product Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>