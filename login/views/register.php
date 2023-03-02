<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<form method="post" action="register.php" name="registerform" class="form-box">

    <h2 class="text-center">Registration</h2>

    <div class="inner-container">
    <!-- the user name input field uses a HTML5 pattern check -->
        <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
        <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    </div>

    <div class="inner-container">
        <!-- the email input field uses a HTML5 email type check -->
        <label for="login_input_email">User's email</label>
        <input id="login_input_email" class="login_input" style="margin-left: 1rem" type="email" name="user_email" required />
    </div>

    <div class="inner-container">
        <label for="login_input_password_new">Password (min. 6 characters)</label>
        <input id="login_input_password_new" class="login_input" style="margin-left: 1rem" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
    </div>

    <div class="inner-container">
        <label for="login_input_password_repeat">Repeat password</label>
        <input id="login_input_password_repeat" class="login_input" style="margin-left: 1rem" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
        
    </div>
    <div class="inner-container">
        <input type="submit"  name="register" value="Register" />
        <!-- backlink -->
    </div>
    <div class="inner-container">
        <a href="index.php">Back to Login Page</a>
    </div>
</form>


