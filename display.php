<?php
$idPrev = "";
$idNext = "";
$nextPrevButtons = "";
$user_id = "";
$author_id = "";
$newAverage = "";

require_once("login/classes/Login.php");
$login = new Login();

// to check if the session if the user is logged in
if($login->isUserLoggedIn() == true){
    $userMsg = "Logged in as " . $_SESSION['user_name']. " - User ID is " . $_SESSION['user_id'];
	// Let's grab te ID of the authenticated user tat will create this blog entry They are therefor the "author".
	$author_id = $_SESSION['user_id'];
}






include ("includes/header.php");




$id = $_GET['id'];
if(!is_numeric($id)){// just a catchall if the ID is messed with
	header("Location:index.php");
}
$result = mysqli_query($con, "SELECT * FROM communitygallery WHERE id = '$id'") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($result)){
		$pageTitle = $row['title'];
}





// NEXT PREVIOUS BUTTONS

//select * from foo where id = (select min(id) from foo where id > 4)
// NEXT/PREVIOUS LINKS
		$next= mysqli_query($con,"SELECT id FROM communitygallery WHERE id = (select min(id) from communitygallery where id > '$id') LIMIT 1");
		while ($row = mysqli_fetch_array($next)){
			$idNext =  $row['id'];

		}
		$prev= mysqli_query($con,"SELECT id FROM communitygallery WHERE id = (select max(id) from communitygallery where id < '$id') LIMIT 1");
		while ($row = mysqli_fetch_array($prev)){
			$idPrev =  $row['id'];

		}
		
		if($idPrev){
			$nextPrevButtons .=  " <a href=\"display.php?id=$idPrev\" class=\"btn btn-info btn-xs\">Previous</a> ";
		}else{
			$nextPrevButtons .=  " <a href=\"\" class=\"btn btn-default btn-xs\" disabled>Previous</a> ";
		}
		if($idNext){
			$nextPrevButtons .= "<a href=\"display.php?id=$idNext\" class=\"btn btn-info btn-xs\">Next</a>";
		}else{
			$nextPrevButtons .= "<a href=\"\" class=\"btn btn-default btn-xs\" disabled>Next</a>";
		}
	





?>
<div class="row">
	<div class="col-md-12">
		<h1 class="main-heading">Community Gallery</h1>
		<p class="main-tagline">Many people; many pictures</p>
	
		<?php 

		$result = mysqli_query($con, "SELECT * FROM communitygallery JOIN users on communitygallery.author_id = users.user_id WHERE id = '$id'") or die(mysqli_error($con));

		?>
		<?php while($row = mysqli_fetch_array($result)): ?>
		<?php 
			$user_name = $row['user_name'];
			$imageid = $row['id']; 
			$authorID = $row['author_id'];

		?>
				
				<h2 class="display-heading"><?php echo $row['title']; ?></h2>
				<div class="display-image-holder">
					<img src="images/display/<?php echo $row['filename'] ?>" class="display-image img-responsive">
				</div>
				<div class="display-info">
					<h2><?php echo $row['title']; ?></h2>
					<h4><strong>Posted by:</strong> <?php echo $row['user_name']; ?></h4>
					<div class="text-primary display-description"><?php echo nl2br($row['description']) ?></div>
				<!-- 	<?php if($row['emake']): ?>
						<b>Camera Brand:</b> <?php //echo $row['emake'] ?><br>
					<?php endif; ?>
					<?php if($row['emodel']): ?>
						<b>Camera Model:</b> <?php echo $row['emodel'] ?><br>
					<?php endif; ?>
					<?php if($row['edate']): ?>
						<?php 
							$timedate = strtotime($row['edate']);// fixes niggly mysql to php date conversion problems.
						 ?>
						<b>Date:</b> <?php echo date("F j, Y", $timedate); ?><br>
					<?php endif; ?>
					<?php if($row['eexposuretime']): ?>
						<b>Exposure:</b> <?php echo $row['eexposuretime'] ?><br>
					<?php endif; ?>
					<?php if($row['efnumber']): ?>
						<b>F number:</b> <?php echo $row['efnumber'] ?><br>
					<?php endif; ?>
					<?php if($row['eiso']): ?>
						<b>ISO:</b> <?php echo $row['eiso'] ?><br>
					<?php endif; ?> -->

				</div>
					
					<div class="rating-container">
						<?php
								if (isset($_SESSION['user_id'])){ 
									$rater_id = $_SESSION['user_id'];

									$rating = mysqli_query($con, "SELECT * FROM mugallery_ratings WHERE picture_id = '$imageid' AND rater_id = $rater_id");
									$rowcount = mysqli_num_rows($rating); 
									if($rowcount === 0){
										include("ratingsform.php");

										$result2 = mysqli_query($con, "SELECT AVG(rating) FROM mugallery_ratings WHERE picture_id = '$imageid'");
										
										while($row = mysqli_fetch_array($result2)){
											$average = $row['AVG(rating)'];
											echo "The average rating of this photo is:";
											echo  "<div style=\"color:blue; font-size:3rem; padding-top: 2rem\">$average</div>";
											
											$result3 = mysqli_query($con, "SELECT * FROM mugallery_ratings WHERE picture_id = '$imageid'");

											$numberRaters = mysqli_num_rows($result3);
											echo "with $numberRaters number of raters. 👍🏻"; 
										}
									}else{
											echo "<p>You have already rated this picture with a star average rating of:</p>";

											$result2 = mysqli_query($con, "SELECT AVG(rating) FROM mugallery_ratings WHERE picture_id = '$imageid' AND rater_id = $rater_id");
										
											while($row = mysqli_fetch_array($result2)){
												$average = $row['AVG(rating)'];
												echo  "<div style=\"color:blue; z-index:1000; font-size:3rem; padding-top: 2rem\">$average</div>";
												
												$result3 = mysqli_query($con, "SELECT * FROM mugallery_ratings WHERE picture_id = '$imageid'");

												$numberRaters = mysqli_num_rows($result3);
												echo "with $numberRaters number of raters. 👍🏻"; 


											}

									}

								}
									

								
						?>
					</div>		


				
					
		<?php endwhile; ?>


	</div>

</div>
<div class="nextPrevBtnz"><?php echo $nextPrevButtons; ?></div>
<?php

include ("includes/footer.php");
?>