<?php 
    session_start(); 
    function get_user_issue_book_count(){ 
        $connection = mysqli_connect("localhost","root",""); 
        $db = mysqli_select_db($connection,"lms"); 
        $user_issue_book_count = 0; 
        $query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]"; 
        $query_run = mysqli_query($connection,$query); 
        while ($row = mysqli_fetch_assoc($query_run)){ 
            $user_issue_book_count = $row['user_issue_book_count']; 
        } 
        return($user_issue_book_count); 
    } 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Dashboard</title> 
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1"> 
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css"> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>  -->
      <link rel="stylesheet" href="style.css">
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
                   <li class="nav-item dropdown"> 
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a> 
                    <div class="dropdown-menu"> 
                    <a class="dropdown-item" href="admin/view_profile.php">View Profile</a> 
                    <div class="dropdown-divider"></div> 
                    <a class="dropdown-item" href="admin/edit_profile.php">Edit Profile</a> 
                    <div class="dropdown-divider"></div> 
                    <a class="dropdown-item" href="admin/change_password.php">Change Password</a> 
                    </div> 
                    </li> 
                    <li class="nav-item"> 
                    <a class="nav-link" href="logout.php">Logout</a> 
                    </li>
                </ul>
            </nav>
                     <div id="hero" class="hero">
                               <img src="img/home-page-book.jpeg" alt="">
                     </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
         <div class="container-fluid"> 
            <div class="navbar-header"> 
                <a class="navbar-brand" href="admin/admin_dashboard.php">Library Management System (LMS)</a> 
            </div> 
            <font style="color: black"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font> 
            <font style="color: black"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font> 
            
        </div> 
    </nav> 
    <div class="row"> 
        <div class="col-md-3" style="margin: 25px"> 
            <div class="card bg-light" style="width: 300px"> 
                <div class="card-header">Book Issued</div> 
                <div class="card-body"> 
                    <p class="card-text">No of book issued: <?php echo get_user_issue_book_count();?></p> 
                    <a class="btn btn-success" href="admin/view_issued_book.php">View Issued Books</a> 
                </div> 
            </div> 
        </div> 
        <div class="col-md-3"></div> 
        <div class="col-md-3"></div> 
    </div> 
</body> 
</html>