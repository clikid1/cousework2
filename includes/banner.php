<?php if (isset($_SESSION['user']['username'])) { ?>
        <div class="logged_in_info">
                <span>welcome <?php echo $_SESSION['user']['username'] ?></span>
                |
                <span><a href="logout.php">logout</a></span>
        </div>
<?php }else{ ?>
        <div class="banner">
                

                <div class="login_div">
                        <form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
                                <h2>Login</h2>
                                <div style="width: 60%; margin: 0px auto;">
                                        <?php include(ROOT_PATH . '/includes/errors.php') ?>
                                </div>
                                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                                <input type="password" name="password"  placeholder="Password"> <br>
                                <button class="btn" type="submit" name="login_btn">Sign in</button>
                        </form>
                        
                </div>
<hr>
                <div class="welcome_msg">
                
                        <!-- <h1>Today's Recipe</h1> -->
                        <p> 
                            When craving for a new food <br> 
                            And your fantassy transcend geography <br> 
                            You would be blown away with what is in stock here <br>
                            You want to give a try <br>
                                <span>~Wait no more</span></p> <br>
                        <a href="register.php" class="btn">Join us! </a>      
                </div>
        </div>
<?php } ?>