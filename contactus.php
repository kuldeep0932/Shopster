    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>

     <!-------------------------Contact us Form Section-------------->
     <div class="form_head">Contact Us</div>
    <div class="form_main_container">
    <div class="contact_dash" style="display: flex;">
                <div class="contact_card"><img src="./assets/images/contact.jpg" alt=""></div>
                <div class="contact_card">
                    <form action="componants\contactus_page.php" method="POST">
                        <div class="inputbox">
                            <div class="box">
                                <label for="">First Name: </label>
                                <input type="text" name="cfname">
                            </div>
                            <div class="box">
                                <label for="">Last Name: </label>
                                <input type="text" name="clname">
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="box">
                                <label for="">Email: </label>
                                <input type="text" name="cemail">
                            </div>
                            <div class="box">
                                <label for="">Phone No: </label>
                                <input type="text" name="cphone">
                            </div>
                        </div>
                        <div class="textbox">
                            <label for="">Message: </label>
                            <textarea id="" cols="30" rows="5" name="cmessage"></textarea>
                        </div>
                        <div class="box">
                            <button type="submit" name="contact_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <!--------------------------Footer--------------->
    <?php 
    include ('./include/footer.php');
?>
