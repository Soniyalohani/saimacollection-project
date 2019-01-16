<?php
    session_start();
?>

<!DOCTYPE html>
<?php include('include/main.php');?>
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
    <div class="container-fluid">
          <h1 class="text-warning text-center" style="margin-top:95px;">ORDER DETAIL</h1><br><br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
             <tr>
                <!--<th width="5%">S.N</th>-->
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
             <?php

                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                            // echo "<script>console.log()</script>";
                            // echo "<script>console.log(".$values['item_name'].")</script>";
                            // echo "<script>console.log(".$values['item_quantity'].")</script>";
                            echo "<script>console.log(".$values['item_id'].")</script>";

                    ?>
            <tr>
                
                <td>
                    <?php echo $values["item_name"]; ?>
                </td>
                <td>
                    <?php echo $values["item_quantity"]; ?>
                </td>
                <td>Rs
                    <?php echo $values["item_price"]; ?>
                </td>
                <td>Rs
                    <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>
                </td>
                <td><a href="order_details.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                            $total = $total + ((int)$values["item_quantity"] * (int)$values["item_price"]);
                        }
                    ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">Rs.
                    <?php echo number_format($total, 2); ?>
                </td>
              <td></td>
            </tr>
            <?php
                    }
                    ?>

        </table>
         <a href="payment.php"class="btn btn-success"> Make Your Payment</a>
         <a href="customer_logout.php"class="btn btn-primary ulogout">Logout</a>
    </div>
    </div>
    </div>
    
</body>
</html>

