 <?php 
session_start();
include("include/connect.php"); 
?>
<!DOCTYPE html>
<html>
<?php include('include/main.php');?>
   <link rel="stylesheet" type="text/css" href="css/search.css"/>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="home.html"><img src="images/s.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="shop.php">SHOP</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="register.php">SIGN UP</a>
            </li>
            <li class="nav-item active">
                        <a class="nav-link" href="searchform.php"><i class="fa fa-search" style="font-size:24px"></i></a>
                    </li>
                
                  </ul>
        </div>
        </nav>
    </div>
  </header>
<body>
<div id="container">
<div style="margin:200px auto; text-align: center;">
<form method="post" action="search.php">
    <input type="text" id="search_box" name="search" class='search_box form-control' style="width: 100%;"/>
    <input type="submit" value="Search" class="search_button"/><br/>
</form>
</div>      
<div>
</body>
</html>