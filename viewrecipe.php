<?php
$sql="SELECT * from recipe WHERE chef_name=recipe_image";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["recipe_image"]?>'></td>
      <td><?=$row["chef_name"]?></td>
      <td><?=$row["recipe_name"]?></td>
      <td><?=$row["recipe_instruc"]?></td>      
      <td><?=$row["category_name"]?></td> 
      <td><?=$row["category"]?></td>  
      <td><?=$row["recipe_ingri"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }



        ?>

