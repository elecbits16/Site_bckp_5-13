<?php

if (isset($_GET['delete_pro'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_pro'];

	$delete_pro=" DELETE FROM products WHERE product_id= '$delete_id'";

	$run_delete = mysql_query( $delete_pro , $con );

	if ($run_delete) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}
}



?>