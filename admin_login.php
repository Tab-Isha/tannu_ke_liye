<?php 
    session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>LMS | Login</title> 
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1"> 
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css"> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>  -->
      <link rel="stylesheet" href="form.css">
</head> 

<body> 
        <div class="container">
            <nav>
            <div class="logo">
                    <h2>Book World</h2>
                </div>
                   <ul id="sidemenu">
                   <li><a class="navbar-brand" href="index.php">Library Management System</a></li>
                   <li><a class="nav-link" href="user_login.php">User Login</a> </li>
                   <li><a class="nav-link" href="index.php">Admin Login</a> </li>
                   <li><a class="nav-link" href="user-reg-form.php"></span>Signup</a></li>
                </ul>
            </nav>
                     <div id="hero" class="hero">
                               <img src="https://i.pinimg.com/564x/eb/6a/5f/eb6a5f468c8af5616251716c722f88eb.jpg" alt="">
                     </div>
        </div>  


        <div class="form-container" id="main_content"> 
            
            <p class="title">Admin Login Form</p> 
            <form class="form" action="" method="post"> 
                <div class="form-group"> 
                   
                    <input type="text" name="email" class="input" placeholder="Email ID" required> 
                </div> 
                <div class="form-group"> 
                   
                    <input type="password" name="password" class="input" placeholder="Password" required> 
                </div> 
                <button type="submit" name="login" class="form-btn">Login</button>     
            </form> 
            <?php  
                if(isset($_POST['login'])){ 
                    $connection = mysqli_connect("localhost","root",""); 
                    $db = mysqli_select_db($connection,"lms"); 
                    $query = "select * from admins where email = '$_POST[email]'"; 
                    $query_run = mysqli_query($connection,$query); 
                    while ($row = mysqli_fetch_assoc($query_run)) { 
                        if($row['email'] == $_POST['email']){ 
                            if($row['password'] == $_POST['password']){ 
                                $_SESSION['name'] =  $row['name']; 
                                $_SESSION['email'] =  $row['email']; 
                                header("Location: admin_dashboard.php"); 
                            } 
                            else{ 
                                ?> 
                                <br><br><center><span class="alert-danger">Wrong Password !!</span></center> 
                                <?php 
                            } 
                        } 
                    } 
                } 
            ?> 
        </div> 
    </div> 
</body> 
</html> 