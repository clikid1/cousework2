
<html>
    <body>

        <?php
            include('connection.php');
          
            $RecipeName = $_POST['recipe_name'];
            $sql = "SELECT * FROM recipe WHERE recipe_name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $RecipeName);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            
                $chefname = $row["chef_name"];
                $Instructions = $row["recipe_instruc"];
                $image = $row["recipe_image"];
                $Foodcategory = $row["category"];
                $RecipeName = $row["recipe_name"];
                $Requirements = $row["recipe_ingri"];
            
                echo "
                <html>
                <body>
                <form method='post' action='updateRecipe.php'>
                    <label>Chef Name:</label>
                    <input type='text' name='chef_name' value='" . htmlspecialchars($chefname) . "'/><br><br>
                    <label>Food Category:&nbsp;&nbsp;</label>
                    <input type='text' name='category' value='" . htmlspecialchars($Foodcategory) . "'/> <br><br>
                    <label>Recipe Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='text' name='recipe_name' value='" . htmlspecialchars($RecipeName) . "'/> <br><br>
                    <label>Image:&nbsp;&nbsp;&nbsp;</label>
                    <img src='" . htmlspecialchars($image) . "' alt='Recipe Image'/><br><br>
                    <label>Ingredients:&nbsp;&nbsp;&nbsp;</label>
                    <textarea name='recipe_ingri' id='Ingredients' rows='5' cols='100'>" . htmlspecialchars($Requirements) . "</textarea><br><br>
                    <label>Instructions:&nbsp;&nbsp;&nbsp;</label>
                    <textarea name='recipe_instruc' id='Directions' rows='10' cols='100'>" . htmlspecialchars($Instructions) . "</textarea><br><br>
                    <input type='submit' name='submit' value='Submit' />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='reset' value='Reset' />
                </form>
                </body>
                </html>";
            } else {
                echo "<p>No recipe found with the name '$RecipeName'. Please check the name and try again.</p>";
            }
            
            $stmt->close();
            $conn->close();
            ?>

<style>
    .backbutton {
        position: fixed;
        bottom: 0;
        left: 0;
        padding: 10px 20px;
        background-color:  #333;
        color: #fff;
        border: none;
        border-radius: 5px 0 0 0;
        cursor: pointer;
    }

    body {
            font-family: Arial, sans-serif; /* Makes font more readable */
            background: #f4f4f9; /* Light grey background for slight contrast */
            padding: 20px; /* Adds spacing around the body content */
            background-color: #007bff;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            width: 30%; /* Adjust width as needed */
            margin: auto; /* Center the form horizontally */
           
        }

        label {
            display: block; /* Ensures each label is on a new line */
            margin: 10px 0 5px; /* Adds space around labels */
            font-weight: bold; /* Makes text bold */
        }

        input[type="text"],
        textarea {
            width: 95%; /* Full width of the form with a little padding */
            padding: 8px; /* Adds space inside the inputs */
            margin-bottom: 10px; /* Adds space below inputs */
            border: 1px solid #ccc; /* Light grey border all around inputs */
            border-radius: 4px; /* Rounded corners for the inputs */
        }

        input[type="submit"],
        input[type="reset"] {
            background: #007bff; /* Blue background */
            color: white; /* White text */
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer; /* Pointer cursor on hover */
            margin-right: 5px; /* Spacing between buttons */
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: #0056b3; /* Slightly darker blue on hover */
        }

        img {
            max-width: 100%; /* Ensures image is never larger than its container */
            height: auto; /* Keeps image aspect ratio */
            margin-bottom: 10px; /* Space below the image */
        }
</style>
<br>
<br>
<button class="backbutton" onclick="goBack()">Go Back</button>


    
    
    
  <script> function goBack() { window.history.back(); } </script>

</body>
</html>