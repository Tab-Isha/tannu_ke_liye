
<?php 
    session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Library Management System</title> 
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
                   <li><a class="nav-link" href="admin_login.php">Admin Login</a> </li>
                   <li><a class="nav-link" href="user-reg-form.php"></span>Signup</a></li>
                </ul>
            </nav>
                     <div id="hero" class="hero">
                               <img width="50" src="https://i.pinimg.com/564x/eb/6a/5f/eb6a5f468c8af5616251716c722f88eb.jpg" alt="">
                     </div>
        </div>  

    <!-- user reg -->
    <div class="form-container">
            <p class="title">User Registration Form</p>
            <form  class="form" action="register.php" method="post"> 
                <div class="form-group"> 
                    
                    <input type="text" name="name" class="input" placeholder="Full Name" required> 
                </div> 
                <div class="form-group"> 
                    
                    <input type="text" name="email" class="input" placeholder="Email ID" required> 
                </div> 
                <div class="form-group"> 
                
                    <input type="password" name="password" class="input" placeholder="Password" required> 
                </div> 
                <div class="form-group"> 
                    
                    <input type="text" name="mobile" class="input" placeholder="Mobile" required> 
                </div> 
                <div class="form-group">
                    <textarea name="address" class="input" placeholder="Address" required></textarea>  
                </div> 
                <button type="submit" class="form-btn">Register</button>     
            </form> 

    </div>

        
</body> 
</html> 