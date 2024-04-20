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
      <link rel="stylesheet" href="style.css">
</head> 

<body> 

<div id="header">
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
                     <div class="header-text" >
                          <h5>⭐Start Your Reading Journey Today</h5>
                          <h1>Where every page<br>is a new adventure</h1>
                          <p>From classics to contemporary, our bookstore offers a wide <br> selection of books to suit every taste and interest.
                             Start exploring <br> our shelves today and uncover your next literary gem.</p>
                     </div>
                     <div id="hero" class="hero">
                               <img src="img/home-page-book.jpeg" alt="">
                     </div>
        </div>  
 </div>

 <section class="section benefits" id="benefits" aria-label="benefits">
        <div class="container">

          <div class="grid-list">

            <li class="benefits-content">
              <h2 class="h2 section-title">Today's Quote</h2>

              <p class="section-text">“There is more treasure in books than in all the pirate's loot on Treasure Island"</p>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <h3 class="h3 card-title">Library Timing</h3>

                <div class="card-text">
                  <ul> 
                    <li>Opening: 9:00 AM</li> 
                    <li>Closing: 12:00 PM</li> 
                  </ul> 
                 </div>

              </div>
            </li>

            <li>
                   <div class="benefits-card has-before has-after">

                    <h3 class="h3 card-title">What We provide ?</h3>
                 <ul> 
                   <li>AC Rooms</li> 
                   <li>Free Wi-fi</li> 
                   <li>Learning Environment</li> 
                   <li>Discussion Room</li> 
                   <li>Free Electricity</li> 
                 </ul>  
               </div>
            </li>
          </div>

        </div>
      </section>




   
</body> 
</html> 