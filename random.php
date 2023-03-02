<?php

include('includes/mysql_connect.php');
$result = mysqli_query($con, "SELECT * FROM communitygallery ORDER BY RAND() LIMIT 3") or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){

        $title = $row['title'];
        $description = $row['description']; 
        $image = $row['filename'];

        echo "<div style=\"display:flex; flex-direction:column; align-items:center; justify-content:center; padding: 5px; background-color:#ADD8E6;margin:5px; width: 40%\">";
            echo "<h5> $title </h5>";
            echo  "<p> $description </p>";
            echo "<div style = \"width:100%; display:flex; justify-content:center\"><img style=\"width:60%\" src=\"images/thumbs-square/$image\"></div>";
        echo "</div>";
}
?>