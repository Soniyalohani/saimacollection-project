<?php
    include('include/connect.php');
   
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
<div class="container">
<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT product_id, product_name,product_image,product_price FROM tbl_product WHERE product_cat like '%$search%' OR product_keyword like '%$search%'";
    $qry = mysqli_query($con, $sql);
    $count = mysqli_num_rows($qry);
    if ($count == 0) {
        echo "No results found.";
    }
    else {
        while ($row = mysqli_fetch_array($qry)) {
            $pro_name=$row['product_name'];
            $pro_image=$row['product_image'];
            $pro_price=$row['product_price'];
            ?>
           <div class="col-md-3">
                <form method="post" action="">
                    <div style="border:1px solid #333; background-color:#f1f1f1;margin-top: 145px; border-radius:5px; padding:16px;" align="center">
                        <img src="images/<?php echo $row["product_image"]; ?>" class="img-responsive"style="width: 100%; height:225px"/><br />
                         <h4><?php echo $pro_name; ?></h4>   
                         <h4>Rs.<?php echo $pro_price; ?></h4>
                         <input type="text" name="quantity" value="1" size="2" class="form-control"/>
                        <input type="hidden" name="hidden_name" value='<?php echo $pro_name; ?>'/>
                        <input type="hidden" name="hidden_price" value='<?php echo $pro_price; ?>'/>
                        <input type="submit" value="Add to cart" class="btn btn-success" name="shopping_cart "style="margin-top:5px; "/>                      
                    </div>
                </form>
            </div>

                </form>
            </div>
        </body>
            <?php
        }
    }
  }
  ?>
  </div>
        </div>
    </div>
    <br/>
    <div class="order_detail">
     <a href="order_details.php"class="btn btn-success order-btn"> VIEW ORDER DETAIL</a>
     <a href="customer_logout.php"class="btn btn-primary ulogout">Logout</a>
    </div>
    </body>
</html>



