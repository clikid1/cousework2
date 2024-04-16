
<div class="container p-5">

<h4>Edit Recipe Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM recipe WHERE recipe_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
     
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="recipe_id" value="<?=$row1['recipe_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Recipe Name:</label>
      <input type="text" class="form-control" id="r_name" value="<?=$row1['recipe_name']?>">
    </div>
    <div class="form-group">
      <label for="desc">Recipe Ingredients:</label>
      <input type="text" class="form-control" id="r_ingri" value="<?=$row1['recipe_ingri']?>">
    </div>
    <div class="form-group">
      <label for="desc">Recipe Description:</label>
      <input type="text" class="form-control" id="r_intru" value="<?=$row1['recipe_instruc']?>">
    </div>
    <div class="form-group">
      <label for="price">Chef Name:</label>
      <input type="number" class="form-control" id="chef_name" value="<?=$row1['chef_name']?>">
    </div>
    <div class="form-group">
      <label for="price">Category:</label>
      <input type="number" class="form-control" id="category" value="<?=$row1['category']?>">
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["recipe_image"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['recipe_image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>