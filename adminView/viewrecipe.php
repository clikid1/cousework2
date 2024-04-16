
<div >
  <h2>Recipe Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Recipe Image</th>
        <th class="text-center">Recipe Name</th>
        <th class="text-center">Recipe Instruction</th>
        <th class="text-center">Category Name</th>
        <th class="text-center">Recipe Ingredients</th>
        <th class="text-center">Chef Name</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
include_once "../config/dbconnect.php";
$sql = "SELECT recipe_id, chef_name, recipe_name, recipe_instruc, recipe_image, category, recipe_ingri FROM recipe";

$result = $conn->query($sql);
$count = 1;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $count ?></td>
            <td><img height='100px' src='<?= $row["recipe_image"] ?>'></td>
            <td><?= $row["recipe_name"] ?></td>
            <td><?= $row["recipe_instruc"] ?></td>      
            <td><?= $row["category"] ?></td> 
            <td><?= $row["recipe_ingri"] ?></td> 
            <td><?= $row["chef_name"] ?></td>     
            <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?= $row['recipe_id'] ?>')">Edit</button></td>
            <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?= $row['recipe_id'] ?>')">Delete</button></td>
        </tr>
        <?php
        $count = $count + 1;
    }
}
?>
</table>


  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Recipies
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Recipe </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Recipe Name:</label>
              <input type="text" class="form-control" id="r_name" required>
            </div>
            <div class="form-group">
              <label for="name">Recipe Ingredients:</label>
              <input type="text" class="form-control" id="r_ingri" required>
            </div>
            <div class="form-group">
              <label for="name">Recipe Instructions:</label>
              <input type="text" class="form-control" id="r_instru" required>
            </div>
            <div class="form-group">
              <label for="name">Chef Name:</label>
              <input type="text" class="form-control" id="chef_name" required>
            </div>
            <div class="form-group">
              <label>Category:</label>
              <select id="categories" >
                <option disabled selected>Select category</option>
                <option value="bakery">Bakery</option>
                <option value="intercontinental">intercontinental</option>
                <option value="drinks">Drinks</option>
                <option value="local">Local</option>
                <?php

                  $sql="SELECT * from categories";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['categories_id']."'>".$row['categories_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="uploadd" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   