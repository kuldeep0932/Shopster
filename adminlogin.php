<?php 
    include ("include/header.php");
?>
<body>
    <!-- Admin login form -->
<div class="form_head">Admin Login</div>
<div class="form_main_container">
    <div class="form_container">
        <form action="componants\admin_validation.php">
            <h3>Login to your account</h3>
            <div id="email_box"><i class="fa-solid fa-envelope" id="email_icon"></i><input type="email" name="email" id="email" placeholder="Enter email"></div>
            <div id="password_box"><i class="fa-solid fa-lock" id="password_icon"></i><input type="password" name="password" id="password" placeholder="Enter Password"></div>
            <div class="forgot"><a href="#">Forgot Password?</a></div>
            <div class="form_button">
                <div id="button">
                    <button type="submit" name="admin_submit" class="submit" value="Login">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('./include/footer.php');
?>