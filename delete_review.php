<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "food");

  // Initialize message variable
  $msg = "";




 if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM soup_review WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: customer_review.php');
}
  ?>








