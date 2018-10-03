<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "food");

  // Initialize message variable
  $msg = "";

  if (isset($_POST['submit'])) {
$offer_title = mysqli_real_escape_string($db, $_POST['offer_title']);
$offer_description = mysqli_real_escape_string($db, $_POST['offer_description']);
$offer_cond1 = mysqli_real_escape_string($db, $_POST['offer_cond1']);
$offer_condition1 = mysqli_real_escape_string($db, $_POST['offer_condition1']);
$offer_cond2 = mysqli_real_escape_string($db, $_POST['offer_cond2']);
$offer_condition2 = mysqli_real_escape_string($db, $_POST['offer_condition2']);
$offer_cond3 = mysqli_real_escape_string($db, $_POST['offer_cond3']);
$offer_condition3 = mysqli_real_escape_string($db, $_POST['offer_condition3']);

$image = $_FILES['image']['name'];

    $target = "assets/img/photos/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

$sql = "INSERT INTO soup_offers (offer_title,offer_description,offer_cond1,offer_condition1,offer_cond2,offer_condition2,offer_cond3,offer_condition3,image) VALUES ('$offer_title', '$offer_description', '$offer_cond1', '$offer_condition1', '$offer_cond2', '$offer_condition2', '$offer_cond3', '$offer_condition3', '$image')";

 header("Location: current_offers.php");


    mysqli_query($db, $sql);

 }


 if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM soup_offers WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: current_offers.php');
}
  ?>








