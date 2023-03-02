<?php

include('includes/mysql_connect.php');
$result = mysqli_query($con, "SELECT * FROM communitygallery ORDER BY RAND() LIMIT 4") or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){

        $title = $row['title'];
        $description = $row['description']; 
        $image = $row['filename'];
        echo $title;
        echo $description;

        echo "<img src=\"images/thumbs/$image\">";
}
?>