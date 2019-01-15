<?php 
session_start();
?>
<?php include('include/main.php');?>
<header>
    <link rel="stylesheet" type="text/css" href="css/clog.css" />
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><img src="images/s.jpg"></a>
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
<!--log in form start-->
 <body class="login-body">
  <div id="LoginForm">
  <div class="container">
  <div class="login-form">
  <div class="main-div">
      <div class="panel">
     <h2>USER LOGIN</h2>
     <p>Please enter your email and password</p>
     </div>
      <form id="Login" method="POST">
  
          <div class="form-group">
              <i class="fa fa-user"></i>
              <input type="email" name="customer_email" class="form-control" id="inputEmail" placeholder="Email Address">
          </div>
          <div class="form-group">
              <input type="password" name="customer_password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="ulogin">Login</button>
           <p>New?<a href="register.php"> &nbsp;SignUp</a></p>

  </div>
</div>
</div>
</div>
<?php 
include("include/connect.php"); 
  
  if(isset($_POST['ulogin'])){
  
    $c_email =$_POST['customer_email'];
    $c_pass = $_POST['customer_password'];
  
  $sel_user = "select * from tbl_customer where customer_email='$c_email' AND customer_password='$c_pass'";
  
  $run_user = mysqli_query($con, $sel_user); 
  
  $check_user = mysqli_num_rows($run_user); 
  
  if($check_user==1){
  
  $_SESSION['customer_email']=$c_email; 
  
  echo "<script>alert('login successful!')</script>";
echo "<script>window.open('shop.php?logged_in=You have successfully Logged in!','_self')</script>";
  }
  else {
  
  echo "<script>alert('Password or Email is wrong, try again!')</script>";
  
  }
  
  

?>
</form>
</body>
</html>
<?php
} ?>
