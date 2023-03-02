

<?php 


require_once("login/classes/Login.php");
$login = new Login();


if($login->isUserLoggedIn() == true){
    $userMsg = "Logged in as " . $_SESSION['user_name']. " - User ID is " . $_SESSION['user_id'];
	// Let's grab te ID of the authenticated user tat will create this blog entry They are therefor the "author".
	$author_id = $_SESSION['user_id'];
}

$user_id = "";

include ("includes/header.php"); 
include ("includes/_functions.php"); 

?>

<div class="row" style ="display:flex">
	<div class="col-md-12 clearfix">
		<h1 class="main-heading">Community Gallery</h1>
		<p class="main-tagline">Many people; many pictures</p>
		
		<?php 
		$result = mysqli_query($con, "SELECT DISTINCT user_name, user_id FROM communitygallery JOIN users ON communitygallery.author_id = users.user_id") or die(mysqli_error($con));
			
			while($row = mysqli_fetch_array($result)){
				$user_id = $row['user_id'];
				$user_name = $row['user_name'];
				echo "<div class=\"card-title\">$user_name <a href=\"profile.php?id=$user_id\"> <span class=\"read-more\"> See More Photos by $user_name </span></a></div>";
			echo "<div class=\"card-row\">";
			$posts = mysqli_query($con, "SELECT * FROM communitygallery WHERE author_id = $user_id LIMIT 5") or die(mysqli_error($con));
			
			
				while($row = mysqli_fetch_array($posts)){
					
					$filename =  $row['filename'];
					$title =  $row['title'];
					$id =  $row['id'];
					echo "\n<div class=\"thumb\">";
						echo "\n\t<a href=\"display.php?id=$id\"><img src=\"images/thumbs-square/$filename\" class=\"img-thumbnail\"></a>";
						echo "<div class=\"thumb-title\">$title</div>";
					echo "\n</div>";		
			}
			echo "</div>";
		}

		
		 ?>
		 <!-- <br style="clear:both"> -->
		</div>


<br style="clear:both">	


	<div>
		<html>
		<head>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function(){
			function randomImages() {
				$.ajax({
					url:"random.php",
					success: function(response){
						$("#random-images").html(response);
						$("#random-images").fadeIn('slow', 'swing');
					}
				})
			}
			setInterval(randomImages, 2300);
			});
		</script>
		</head>
		<body>
			<div id="random-images" style="display:flex; flex-direction:column; justify-content:center; align-items:flex-start">
			</div>

			
		</body>
		</html>
	</div>
</div>
	<?php include ("includes/footer.php"); ?>

