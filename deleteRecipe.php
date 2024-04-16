
        <?php
            include('connection.php');

            $RecipeName=$_POST['recipe_name'];
           
            $sql = "DELETE FROM recipe WHERE recipe_name='$RecipeName'" ;
            $result = $conn->query($sql);
            header("Location: deleteRecipe.html");
            $conn->close();
        ?>
