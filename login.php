    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>

     <!-------------------------Login Form Section-------------->
     <div class="form_head">Login</div>
    <div class="form_main_container">
        <div class="form_container">
            <form action="componants/login_validation.php" method="POST">
                <h3>Login to your account</h3>
                <div id="email_box"><i class="fa-solid fa-envelope" id="email_icon"></i><input type="email" name="user_email" id="email" placeholder="Enter email"></div>
                <div id="password_box"><i class="fa-solid fa-lock" id="password_icon"></i><input type="password" name="user_password" id="password" placeholder="Enter Password"></div>
                <div class="forgot"><a href="#">Forgot Password?</a></div>
                <div class="form_button">
                <div id="button">
    <button type="submit" name="login_submit" class="submit" value="Login">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></button>
   </div>
                <div class="login"><a href="../Project\register.php">Not a member? <span>Signup now</span></a></div>
                </div>
            </form>
        </div>
    </div>

    <!--------------------------Footer--------------->
    <?php 
    include ('./include/footer.php');
?>
