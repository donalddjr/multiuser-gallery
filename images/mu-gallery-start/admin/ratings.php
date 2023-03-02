<?php
$referEr = "";


require_once("../login/classes/Login.php");
$login = new Login();

// to check if the session if the user is logged in
if($login->isUserLoggedIn() == true){
    // $userMsg = "Logged in as " . $_SESSION['user_name']. " - User ID is " . $_SESSION['user_id'];
	// Let's grab te ID of the authenticated user tat will create this blog entry They are therefor the "author".
	$author_id = $_SESSION['user_id'];
}

include ("../includes/header.php");

if(isset($_POST['rating'])){
    $ratingValue = $_POST['rating'];
}

if(isset($_POST['picture_id'])){
    $picture_id = $_POST['picture_id'];
}

if(isset($_POST['referEr'])){
    $referEr = $_POST['referEr'];
}

if(isset($_POST['submit'])) {
    mysqli_query($con,"INSERT INTO mugallery_ratings (picture_id, rater_id, rating) VALUES ($picture_id,$author_id, $ratingValue)");
    echo $ratingValue, $author_id, $picture_id;
    header("Location:$referEr");
}


?>