<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "food");

  // Initialize message variable
  $msg = "";

  if (isset($_POST['submit'])) {
$item_name = mysqli_real_escape_string($db, $_POST['item_name']);
$item_category = mysqli_real_escape_string($db, $_POST['item_category']);
$item_ingredients = mysqli_real_escape_string($db, $_POST['item_ingredients']);
$price = mysqli_real_escape_string($db, $_POST['item_price']);


$sql = "INSERT INTO add_soup (item_name,item_category,item_ingredients,price) VALUES ('$item_name', '$item_category', '$item_ingredients', '$price')";

 header("Location: add_item.php");


    mysqli_query($db, $sql);

 }


 if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM add_soup WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: add_item.php');
}
  ?>








