<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery Search</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <!--<link rel="stylesheet" href="Assets\css\galleryStyle.css" />-->
  </head>

    <!--NAV BAR START--->
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CLINTON'S FOOD BLOG</a>
<form action="">
 
          <a class="navbar-brand" href="picgalleryDB.php">Pictures</a> 
          <a class="navbar-brand" href="readvideos.php">Videos</a>
          <a class="navbar-brand" href="contactus.html">Contact us</a>
          <a class="navbar-brand" href="aboutus.html">About us</a>
</form>
<style>
  .body{
    background-color: #007bff;
  }
       
  .logout-form {
      text-align: center;
  }
  #logoutButton {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s ease;
  }
  #logoutButton:hover {
      background-color: #0056b3;
  }

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

    .body{
        background-color: #ADD8E6;
  } 
  .logout-form {
      text-align: center;
  }
  #logoutButton {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s ease;
  }
  #logoutButton:hover {
      background-color: #0056b3;
  }

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
    

    .menuBar {
    position: sticky;
    top: 0px;
    width: 50%;
    height: 50px;
  

}

.pictureBox {
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    height: auto;
    border: 2px solid lightgrey;
    border-radius: 25px;
}
img {
    width: 100%;
    height:auto;
}


</style>

<form class="logout-form" action="logout.php" method="post">
<button id="logoutButton">Logout</button>
</form>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Chef Search</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.html">Sign Up</a>
                  <a class="nav-link" href="login.html">Log In</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="aboutus.html" data-bs-toggle="dropdown" aria-expanded="false">
                    About us
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href=""></a></li>
                    <li><a class="dropdown-item" href=""></a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href=""></a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search"action="searchOption.php" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
  <!--NAV BAR END-->






<body class ="body">
    
<br><br>
<br>

<div class="menuBar">

    <form action="picgallerySearch.php" method="post">

    Search Recipe Name <input type="text" name="searchTag">

    <input type="submit">

</form>

</div>


<?php


include("connection.php"); //Establishing connection with our database



  $searchTags = $_POST['searchTag'];




$sql = "select recipe_id, recipe_image, recipe_instruc, recipe_name, chef_name FROM recipe where recipe_name  like'%$searchTags%'";




$result = $conn->query($sql);



if ($result->num_rows > 0 ){

    while($row = $result->fetch_assoc()) {

        $imgNumber = $row['recipe_id'];

        $chefname = $row['chef_name'];

        $imgSrc = $row['recipe_image'];

        $imgDescription =$row['recipe_instruc'];

        $imgTags = $row['recipe_name'];

        echo "<div class='pictureBox'><br>Pic ".$imgNumber." <br> Chef Name: ".$chefname." <br> Pic Name: ".$imgSrc." <br>  Recipe Description: ".$imgDescription."<br> Recipe Name: ".$imgTags."<br><img src='".$imgSrc."'><br><br></div><br><br>";
        

    }

} else {

    echo "0 Results";

}



$conn->close();



?>
<br>
<br>
<button class="backbutton" onclick="goBack()">Go Back</button>


    
    
    
  <script> function goBack() { window.history.back(); } </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>