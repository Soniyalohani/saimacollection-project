<?php
include("include/connect.php"); 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="order_details.php"</script>';
			}
		}
	}
?>