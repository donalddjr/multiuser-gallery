<?php
include ("../includes/header.php");

// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<form method="post" action="index.php" name="loginform">
    <h2 class="text-center">Welcome Admin!</h2>
    <h4 class="text-center">Login your Details</h4>

    <div class="inner-container">
        <label for="login_input_username">Username</label>
        <input id="login_input_username" class="login_input" style="margin-left: 1rem" type="text" name="user_name" required />
    </div>

    <div class="inner-container">
        <label for="login_input_password">Password</label>
        <input id="login_input_password" class="login_input" style="margin-left: 1rem" type="password" name="user_password" autocomplete="off" required />
    </div>

    <div class="inner-container">
        <input type="submit"  name="login" value="Log in" />
    </div>

</form>
<div class="inner-container">
    <a href="register.php">Register new account</a>
</div>

<?php include ("../includes/footer.php"); ?>