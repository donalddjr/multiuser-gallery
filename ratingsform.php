<?php
$image_id = $_GET['id'];
?>

<form name="form" method="POST" action="admin/ratings.php">
<div class="star-rating">
    <div class="star-input">
        <input type="hidden" name="picture_id" value="<?php echo $image_id; ?>"></label>

        <label for="rating-5" class="fas fa-star">
        <input type="radio" value="1" name="rating" id="rating-5"></label>

        <label for="rating-4" class="fas fa-star">
        <input type="radio" value="2" name="rating" id="rating-4"></label>
                
        <label for="rating-3" class="fas fa-star">
        <input type="radio" value="3" name="rating" id="rating-3"></label>
                    
        <label for="rating-2" class="fas fa-star">                
        <input type="radio" value="4" name="rating" id="rating-2"></label>
                        
        <label for="rating-1" class="fas fa-star">
        <input type="radio" value="5" name="rating" id="rating-1"></label>

        <input name="referEr" type="hidden" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" />

  </div>
</div>


        <input type="submit" name="submit" value="submit"></input>
</form>

