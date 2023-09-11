<!---------------------------------------Payment main container------------------------------->
<div class="main_payment_container">
        <form class="payment_form">
            <div class="formbox">
                <h2>BILLING ADDRESS</h2>
                <div class="inputbox">
                    <label for="">Full Name:</label>
                    <input type="text" name="fullname" id="" placeholder="name">
                </div>
                <div class="inputbox">
                    <label for="">Email:</label>
                    <input type="text" name="fullname" id="" placeholder="example@example.com">
                </div>
                <div class="inputbox">
                    <label for="">Address</label>
                    <input type="text" name="fullname" id="" placeholder="room-street-locality">
                </div>
                <div class="inputbox">
                    <label for="">City:</label>
                    <input type="text" name="fullname" id="" placeholder="city">
                </div>
                <div class="inputbox state">
                    <div class="box">
                        <label for="">State:</label>
                        <select name="" id="">Choose State
                            <option value="">Choose State</option>
                            <option value="">HP</option>
                            <option value="">MP</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="">Zip Code:</label>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="formbox">
                <h2>PAYMENT</h2>
                <div class="inputbox">
                    <label for="">Card Accepted:</label>
                    <div class="atm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjXLgpc7zLbzQdt9hzRUvrG6L2IrXYQm_oPg&amp;usqp=CAU" alt="">
                        <img src="./assets\images\mastercard.png" alt="">
                        <img src="./assets/images/rupay.png" alt="">
                        <img src="./assets/images/americanexpress.png" alt="">
                        <img src="./assets/images/discover.png" alt="">
                        <img src="./assets/images/paypal.png" alt="">
                    </div>
                </div>
                <div class="inputbox">
                    <label for="">Name On Card:</label>
                    <input type="text" name="fullname" id="" placeholder="name on card">
                </div>
                <div class="inputbox">
                    <label for="">Card Number:</label>
                    <input type="text" name="fullname" id="" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputbox">
                    <label for="">Exp Month:</label>
                    <input type="text" name="fullname" id="" placeholder="january">
                </div>
                <div class="inputbox state">
                    <div class="box">
                        <label for="">Exp Year:</label>
                        <input type="text" placeholder="2023">
                    </div>
                    <div class="box">
                        <label for="">CVV:</label>
                        <input type="text" placeholder="....">
                    </div>
                </div>
            </div>
            <input type="Submit" value="Pay (Amount)">
        </form>
    </div>
    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>
    <!--------------------------Footer--------------->
    <?php 
    include ('./include/footer.php');
?>
