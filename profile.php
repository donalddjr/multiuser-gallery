<?php
include ("includes/header.php");

$user_id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM communitygallery WHERE author_id = '$user_id'") or die(mysqli_error($con));

	echo "<h2 class=\"text-center\">Community Gallery</h2>";

	while($row = mysqli_fetch_array($result)){

        $filename =  $row['filename'];
		$title =  $row['title'];
		$id =  $row['id'];
		echo "\n<div class=\"thumb\">";
		echo "\n\t<a href=\"display.php?id=$id\"><img src=\"images/thumbs-square/$filename\" class=\"img-thumbnail\"></a>";
		echo "<div class=\"thumb-title\">$title</div>";
		echo "\n</div>";	
    }


include ("includes/footer.php");

?>