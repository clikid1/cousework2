
<div class="container p-5">

<h4>Edit User Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["categories_id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="user_id" value="<?=$row1['user_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">First Name:</label>
      <input type="text" class="form-control" id="firstname" value="<?=$row1['firstname']?>">
    </div>
    <div class="form-group">
      <label for="name">Last Name:</label>
      <input type="text" class="form-control" id="lasttname" value="<?=$row1['lastname']?>">
    </div>
    <div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control" id="email" value="<?=$row1['email']?>">
    </div>
    <div class="form-group">
      <label for="name">Password:</label>
      <input type="text" class="form-control" id="password" value="<?=$row1['password']?>">
    </div>
    <div class="form-group">
      <label for="name">Role:</label>
      <input type="text" class="form-control" id="role" value="<?=$row1['role']?>">
    </div>
    <div class="form-group">
      <label for="name">Contact Number:</label>
      <input type="text" class="form-control" id="contact_no" value="<?=$row1['contact_no']?>">
    </div>
    
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update User</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>