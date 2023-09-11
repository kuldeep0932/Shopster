<!--------------------------Header-------------->
<?php 
    include ("./include/header.php");
    ?>

<!-------------------------Registration Form Section--------------------------------------->
<div class="form_head">Registration</div>
<div class="form_main_container">
    <div class="form_container">
        
        <h2>Create Account</h2>
        <form name="myform" method="post" action="componants/registration_validation.php" onsubmit="return validation()">
            <div id="name_box">
                <i class="fa-solid fa-user" id="first_icon"></i>
                <input type="text" id="First_Name" name="firstname" placeholder="Enter first name*" />
                <span id="fname"></span>
            </div>
            <div id="last_name_box">
                <i class="fa-solid fa-user" id="first_icon"></i>
                <input type="text" id="Last_Name" name="lastname" placeholder="Enter last name*" />
                <span id="lname"></span>
            </div>
            <div id="email_box">
                <i class="fa-solid fa-envelope" id="email_icon"></i>
                <input type="text" id="mail" name="email" placeholder="Enter email here" />
                <span id="email"></span>
            </div>
            <div id="phone_box">
                <i class="fa-solid fa-phone" id="email_icon"></i>
                <input type="tel" id="num" name="number" placeholder="Enter phone number" />
                <span id="no"></span>
            </div>
            <div id="password_box">
                <i class="fa-solid fa-lock" id="password_icon"></i>
                <input type="password" id="pass" name="password" placeholder="Enter password" />
                <span id="pw"></span>
            </div>
            <div id="cpassword_box">
                <i class="fa-solid fa-lock" id="password_icon"></i>
                <input type="password" id="conf_pass" name="confpassword" placeholder="Re-enter password" />
                <span id="cpw"></span>
            </div>
            <div class="form_button">
                <div id="button">
                    <button type="submit" name="submit" class="submit">Submit <i
                            class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>
                <div class="signup">
                        <a href="../Project\login.php">Already have an account?</a>
                    </div>
        </div>
            </div>
        </form>

    </div>

    <!--------------------------Footer--------------->
    <?php 
    include ('./include/footer.php');
?>