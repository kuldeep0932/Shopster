<?php
include ("include/header.php");
include('include/connection.php');
// session_start();
$username_id = $_SESSION['Id'];
$username_name = $_SESSION['User_Name'];
$user_mail= $_SESSION['Email'];

?>
<div class="container">
<div class="form_head">Order Details</div>
    <div class="confirmed_order">
        <div class="confirmed"><h3>Thank You. Your order has been confirmed.</h3></div>
        <?php
        $sql_confirm="SELECT * FROM `order` WHERE `user_id`= '$username_id' ORDER BY `orderdate` DESC;";
        $result_confirm=mysqli_query($conn,$sql_confirm);
        $row_confirm=mysqli_fetch_assoc($result_confirm);
        if($row_confirm){
            $order_no=$row_confirm['order_no'];
            $order_date=$row_confirm['orderdate'];
            $sub_total=$row_confirm['subtotal'];
            echo '<div class="order_details">
            <p class="order_no"><b>ORDER NUMBER :-</b>' . $order_no . '</p>
            <p class="order_date"><b>ORDER DATE :-</b>' . $order_date . '</p>
            <p class="order_email"><b>EMAIL :-</b>' . $user_mail . '</p>
            <p class="order_total_amount"><b>SUBTOTAL :-</b><i class="fa-solid fa-indian-rupee"></i>' . $sub_total . '</p>
            <p class="order_payment_method"><b>PAYMENT METHOD :-</b> Cash On Delivery</p>
        </div>';
        }
        ?>
        
        <a href="index.php">Go Back To Home</a>
    </div>
    
</div>

<?php
include ('./include/footer.php');
?>