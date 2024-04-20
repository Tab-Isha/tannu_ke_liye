<!DOCTYPE html> 
<html> 
<head> 
    <title>LMS</title> 
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1"> 
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css"> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script> 
      <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>  -->
</head> 
<style type="text/css"> 
    #main_content{ 
        background: rgba(245, 245, 245, 0.9); 
        padding: 50px; 
    } 
    #side_bar{ 
        background: rgba(245, 245, 245, 0.9); 
        padding: 50px; 
    } 
    body{ 
      background: rgba(245, 245, 245, 0.4); 
      background-image: url("https://img.freepik.com/free-photo/abundant-collection-antique-books-wooden-shelves-generated-by-ai_188544-29660.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1704240000&semt=sph"); 
   } 
   nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

nav ul li {
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    position: relative;
}

nav ul li a::after {
    content: '';
    width: 0;
    height: 3px;
    background: #ff004f;
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.5s;
}

nav ul li a:hover::after {
    width: 100%;
}

</style> 
<body> 
<div id="header">
       <nav>
           <ul>
            <li><a class="navbar-brand" href="index.php">Library Management System</a></li>
            <li><a class="nav-link" href="index.php">User Login</a> </li>
            <li><a class="nav-link" href="index.php">Admin Login</a> </li>
            <li><a class="nav-link" href="user-reg-form.php"></span>Signup</a></li>
           </ul>
       </nav>
    </div>
    
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container-fluid"> 
            <div class="navbar-header"> 
                <a class="navbar-brand" href="index.php">Library Management System</a> 
            </div> 
            <ul class="nav navbar-nav navbar-right"> 
                <li class="nav-item"> 
                  <a class="nav-link" href="index.php">User Login</a> 
                </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="indexad.php">Admin Login</a> 
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="signup.php"></span>Signup</a> 
              </li> 
            </ul> 
        </div> 
    </nav>  -->
    <div class="row"> 
        <div class="col-md-4" id="side_bar"> 
            <h5>Today's Quote</h5> 
            <h6>“There is more treasure in books than in all the pirate's loot on Treasure Island"</h6> 
            <p>~ Walt Disney</p> 
            <h5>Library Timing</h5> 
            <ul> 
                <li>Opening: 9:00 AM</li> 
                <li>Closing: 12:00 PM</li> 
            </ul> 
            <h5>What We provide ?</h5> 
            <ul> 
                <li>AC Rooms</li> 
                <li>Free Wi-fi</li> 
                <li>Learning Environment</li> 
                <li>Discussion Room</li> 
                <li>Free Electricity</li> 
            </ul> 
        </div> 
        
    </div> 
</body> 