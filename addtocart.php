<?php 
include('include/connection.php');
error_reporting(E_ALL ^ E_NOTICE);  
session_start();
 $username_id = $_SESSION['Id'];
   
    if(isset($_POST['product_qty'])){
        if(isset($_POST['sub_qty'])){
            if(isset($_POST['id'])){
                $id=$_POST['id'];
                $sql_qty="SELECT * FROM `cart` WHERE `id`= '$id'";
                $result_qty=mysqli_query($conn,$sql_qty);
                $ro=mysqli_num_rows($result_qty);
                if($_POST['product_qty']==1){
                    $sqldelete= "DELETE FROM `cart` WHERE `id` ='$id'";
                    $result=mysqli_query($conn,$sqldelete);
                    if($result){
                        echo "delete";
                        // header("location: cart.php");
                    }else{
                        echo "not deleted";
                    }
                }else if($row_qty=mysqli_fetch_assoc($result_qty)){
                    $qty=$row_qty['quantity'];
                    $sub_qty=$qty-1;
                    $productid=$row_qty['productid'];
                    $sql_update="UPDATE `cart` SET `quantity` = '$sub_qty' WHERE `userid`='$username_id' AND `productid`= '$productid'";
                    $result_update=mysqli_query($conn,$sql_update);
                    if($result_update){
                        // header("location: cart.php");
                        echo "updated successfully";
                    }else{
                        echo "error";
                    }
                }else{
                    echo "invalid id";
                    exit;
                }
            }
        }
    
        if(isset($_POST['add_qty'])){
            if(isset($_POST['id'])){
                $id=$_POST['id'];
                $sql_qty="SELECT * FROM `cart` WHERE `id`='$id'";
                $result_qty=mysqli_query($conn,$sql_qty);
                if($row_qty=mysqli_fetch_assoc($result_qty)){
                    $qty=$row_qty['quantity'];
                    $add_qty=$qty+1;
                    $productid=$row_qty['productid'];
    
                    $sql_update="UPDATE `cart` SET `quantity` = '$add_qty' WHERE `userid`='$username_id' AND `productid`= '$productid'";
                    $result_update=mysqli_query($conn,$sql_update);
                    if($result_update){
                        // header("location: cart.php");
                        // echo "updated successfully";
                    }else{
                        echo "error";
                    }
                }else{
                    echo "invalid id";
                    exit;
                }
            }
        }
    }


    //check if cart is empty
    $sql_qty="SELECT * FROM `cart` WHERE `userid` = '$username_id'";
    $result_qty=mysqli_query($conn,$sql_qty);
    $ro=mysqli_num_rows($result_qty);
    // var_dump($ro);die;
    if($ro==0){
        echo '<div class="cart_login">
        <div class="login_msg">
            <div class="empty_cart_img">
                <img src="assets/images/117-1170538_404-your-cart-is-empty.png" alt="cart empty" width="650px" height="500px">
            </div>
            <div class="em_cart_msg">
                <p class="login_para_msg">YOUR CART IS EMPTY</p>
                <p class="empty_msg">Looks like you have not added anything to your cart.</p>
                <p class="empty_msg">Go ahead & explore </p>
                <a href="index.php">Return to shop</a>
            </div>
        </div>
    </div>';
        exit;
    }
    
    

    // Function to check if the shipping address is filled and Cash on Delivery checkbox is checked
function isShippingAddressFilled() {
    return !empty($_POST['fullname']) && !empty($_POST['area']) && !empty($_POST['city'])  && !empty($_POST['pincode']) && !empty($_POST['number']) && isset($_POST['cod']);
}

if(isset($_POST['addtocart_btn'])){
    $area = $_POST['area'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $payment_method = $_POST['cod'];

    $sql_cart = "SELECT * FROM `cart` WHERE `userid` = '$username_id'";
    $result_cart = mysqli_query($conn, $sql_cart);
    $sub_total_price=0;
        $items=0;
        $row_fetch=mysqli_fetch_assoc($result_cart);
        if($row_fetch){
            $qty=$row_fetch['quantity'];
            $product_price=$row_fetch['productprice']; 
            $sub_total=$qty * $product_price;
            $sub_total_price += $sub_total;  
            $items += $qty; 
            $pro_names = $row_fetch['producttitle'];
        }


    if (!isShippingAddressFilled()) {
        echo "Please fill all the required fields and select Cash on Delivery.";
    } else {
        $sql_inset="INSERT INTO `order`(`items`, `user_id`,  `subtotal`, `product_names`, `address`, `payment_method`) VALUES ('$items','$username_id','$sub_total_price' , '$pro_names', '$area $city $pincode ', '$payment_method')";
        $result_insert=mysqli_query($conn,$sql_inset);
        if($result_insert){
            $sql_delete="DELETE FROM `cart` WHERE `userid` = '$username_id' ";
            $result_delete=mysqli_query($conn,$sql_delete);
            if($result_delete){
                echo "successful";
                header("location: checkout.php");
            }else{
                echo "not deleted";
                exit;
            }
        }
        
    }
}
include ("include/header.php");

?>

<body>

    <div class="addtocart">
        <div class="main">
            <div class="cart_content">
                <h2>Your Shopping Cart</h2>
                <div class="cart_box ">
                    <h4 class="shipping">Shipping Address <i class="fa fa-solid fa-plus plus_sign"></i></h4>
                    <form method="post" class="add_address">
                        <div class="cart_form">
                            <span class="error-message"></span>
                            <!-- <input type="hidden" name="id" value="<?php //echo $id?>"> -->

                            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                            <textarea type="text" id="area" name="area" placeholder="Area, Street, Sector, Village"
                                required></textarea>
                            <div class="inputbox">
                                <input type="text" id="city" name="city" placeholder="Town/City" required>
                                <select name="state" id="state" class="form-control" required style="height:40px;">
                                    <option value="NULL">choose your state</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                    </option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="inputbox">
                                <input type="number" id="pincode" name="pincode" placeholder="PIN code [0-9]" required>
                                <input type="number" id="number" name="number" placeholder="Mobile Number" required>
                            </div>

                        </div>

                        <div class="cart_box payment">
                            <h4>Payment Method <i class="fa fa-solid fa-plus paymnet_expand"></i></h4>
                            <div class="cart_payment">
                                <div class="choose_paymnet">
                                    <input type="radio" class="radio_btn" name="cod" value="cash on delivery">Cash on
                                    Delivery
                                </div>
                                <div class="popup_btn">
                                <input type="submit" name="addtocart_btn" value="Buy Now" class="buypro cart_btn">
                                <input type="submit" name="removetocart" value="Cancel" class="cancelcart cart_btn">
</div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- product cart part -->
            <div class="cart_product">
                <h4>Your Order</h4>
                <div class="cartproducts">
                    <div class="cart-prod">
                        <table>
                            <tr>
                                <th>Product Title</th>
                                <th>Quantity</th>
                                <th>Product Price</th>
                            </tr>
                            <?php
                    $sub_total =0; 
                    $items=0;
                    $cart_query="SELECT * FROM `cart` WHERE `userid`='$username_id' ";
                    $cart_result=mysqli_query($conn,$cart_query);
                        while($row = mysqli_fetch_assoc($cart_result)) {
                            $prod_sub_total=$row['quantity'] * $row['productprice'];
                            $sub_total += $prod_sub_total;
                    ?>
                            <tr>
                                <td class="product_logo btopbottom"><img
                                        src=".\assets\images\<?php echo $row['productimg'] ?>" alt="logo">
                                    <span><?php echo $row['producttitle'] ?></span>
                                </td>
                                <td class="btopbottom">
                                    <div class="quantity_box">
                                        <form action="#" class="form_for_cart" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                            <button class="sub_qty" name="sub_qty">-</button>
                                            <input type="number" value="<?= $row['quantity']; ?>" class="qty_class"
                                                name="product_qty">
                                            <button class="add_qty" name="add_qty">+</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="btopbottom"><i
                                        class="fa-solid fa-indian-rupee-sign"></i><?php echo $prod_sub_total ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <th colspan="2">Total Price</th>
                                <th><i class="fa-solid fa-indian-rupee-sign"></i><?= $sub_total ?> </th>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include('./include/footer.php');
?>