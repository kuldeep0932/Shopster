<?php 
include('./include/connection.php');
session_start();
if($_SESSION['is_adminlogin']){
    $email=$_SESSION['email'];
}
else{
    echo "<script>location.href='adminlogin.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href=".\assets\css\web.css">
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./js/jquery.js"></script>
</head>

<body>


    <!----------------------------------------Admin Panel Dashboard and navigation Section--------------------------------------------------------->
    <div class="user_container">
        <div class="admin_sidebar">
            <div class="title">
                <img src=".\assets\images\shopster_logo.png" alt="shopster logo">
            </div>
            <div class="side_nav">
                <div class="dash dashboard_tab side_nav_active"><i class="fa-regular fa-folder"></i>Dashboard</div>
                <div class="dash customer_tab"><i class="fa-solid fa-users"></i>Customers</div>
                <div class="dash product_tab"><i class="fa-solid fa-rectangle-list"></i>Products</div>
                <div class="dash order_tab"><i class="fa-solid fa-cart-shopping"></i>Orders</div>
                <div class="dash blog_tab"><i class="fa-solid fa-pencil"></i>Blogs</div>
                <a href="../Project/logout.php">
                    <div class="dash logout_tab"><i class="fa-solid fa-arrow-right-to-bracket"></i>Logout</div>
                </a>
                <div class="dark_icon dash" style="display:flex; flex-direction:row-reverse; justify-content:left;">
                    Mode:<i class="fa-solid fa-moon" id="dark_logo"></i>
                </div>
            </div>
        </div>
        <div class="admin_logo">
            <div class="user_logo">
                <h2 class="admin_title">Admin Dashboard</h2>
                <div class="user">
                    <img src="admin.jpg" alt="">
                    Admin<b><?php 
                    include ("./include/connection.php");
                    $query = "SELECT * FROM `admin`";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result))
                    echo $row['name']?></b>
                    <!-- <div class="setting">Kuldeep <i class="fa-sharp fa-solid fa-gear"></i>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Your Order</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="dashboard_content">
                <div class="dashboard">
                    <div class="first_col">
                        <div style="display: flex; gap: 10px;">
                            <div class="contetn_card customer_tab"><i class="fa-solid fa-users fa-2x"></i>
                                <h4>Customers</h4>
                            </div>
                            <div class="contetn_card product_tab"><i class="fa-solid fa-rectangle-list fa-2x"></i>
                                <h4>Products</h4>
                            </div>
                            <div class="contetn_card order_tab"><i class="fa-solid fa-cart-shopping fa-2x"></i>
                                <h4>Orders</h4>
                            </div>

                        </div>
                        <div>
                            <div class="contetn_card best_products">
                                <div class="list_head">
                                    <h4>Best Products</h4>
                                </div>
                                <div class="list_product">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                            <tr>
                                                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product` WHERE `productcat`='Home'";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <td class="product_logo"><img
                                                        src=".\assets\images\<?php echo $row['productimg'] ?>"
                                                        alt="logo"><?php echo $row['producttitle'] ?></td>
                                                <td><?php echo $row['productprice'] ?></td>
                                                <td><?php echo $row['productstatus'] ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second_col">
                        <div class="contetn_card best_products">
                            <div class="list_head">
                                <h4>New Customers</h4>
                            </div>
                            <div class="list_product">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>User Id</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Phone </th>
                                        </tr>
                                        <tr class="profileview">
                                            <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM registration_form";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['firstname'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['number'] ?></td>
                                        </tr>
                                        <?php
                                            }
                                            ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="contetn_card best_products">
                        <div class="list_head">
                            <h4>Recent Orders</h4>
                        </div>
                        <div class="list_product">
                            <table class="recent_product">
                                <tbody>
                                <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Payment Method</th>
                                                <th>Order date and time</th>
                                            </tr>
                                            <tr>
                                                <?php
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `order`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <td><?php echo $row['order_no'] ?></td>
                                                <td><?php echo $row['product_names'] ?></td>
                                                <td><?php echo $row['payment_method'] ?></td>
                                                <td><?php echo $row['orderdate'] ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------Admin panel Customer Dashboard section-------------------------------------------------->
                <div id="customer_dash">
                    <div class="first_col">
                        <div class="contetn_card best_products">
                            <div class="list_head">
                                <h4>New Customers</h4>
                            </div>
                            <div class="list_product">
                                <form action="componants\customer_validation.php" method="POST">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>User Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Phone </th>
                                                <th>Action</th>
                                            </tr>
                                            <tr class="profileview">
                                                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM registration_form";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['firstname'] ?></td>
                                                <td><?php echo $row['lastname'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['number'] ?></td>
                                                <td>
                                                    <!-- <button>Edit</button> -->
                                                    <button name="deletecs" value="<?php echo $row['id'] ?>"
                                                        class="remove_button"><i class="fa-solid fa-trash-can"></i>
                                                        Delete</button>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                            <!-- <tr class="profileview">
                                            <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                    alt="logo">
                                                <h5>User Name</h5>
                                            </td>
                                            <td>test@gmail.com</td>
                                            <td>1001</td>
                                            <td>Approved</td>
                                        </tr>
                                        -->
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="second_col profilecard" style="display: none;">
                        <div class="contetn_card best_products">
                            <div class="user_profile">
                                <div class="profile_logo">
                                    <img src="admin.jpg" alt="">
                                    <h4>Admin</h4>
                                </div>
                                <div class="profile_details">
                                    <div>
                                        <h4>User-ID :</h4>1001
                                    </div>
                                    <div>
                                        <h4>Admin Name :</h4>Kuldeep Kumar
                                    </div>
                                    <div>
                                        <h4>Email Address :</h4>kuldeep0932k@gmail.com
                                    </div>
                                    <div>
                                        <h4>Phone No :</h4>9882269381
                                    </div>
                                    <div>
                                        <h4>Address :</h4>Near Sunder Cinema Road, Saproon, Solan 173211(H.P)
                                    </div>
                                </div>
                                <div class="profile_btn">
                                    <button id="update_btn">Edit Profile</button>
                                    <button>Remove Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------------------------------------Admin panel product dashboard section------------------------------------------------------------------------------>
                <div id="product_dash">

                    <div class="first_col">
                        <!---------------Product table of the dashoard----------------->
                        <div class="contetn_card best_products">
                            <div class="list_head">
                                <div class="product_head" style="display: flex; gap: 10px; align-items: center;">
                                    <h4>Product List</h4>
                                    <button class="anproduct">Add New Product</button>
                                </div>
                            </div>
                            <div class="list_product">
                                <form action="componants\product_validation.php" method="POST">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Categories</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $productid =$row['productid'];
                                                ?>
                                                <td class="product_logo"><img
                                                        src=".\assets\images\<?php echo $row['productimg'] ?>"
                                                        alt="logo"><?php echo $row['producttitle'] ?></td>
                                                <td><?php echo $row['productprice'] ?></td>
                                                <td><?php echo $row['productstatus'] ?></td>
                                                <td><?php echo $row['productcat'] ?></td>
                                                <td class="action_btn">
                                                    <div class="edit edit_product" value="<?php echo $row['productid'] ?>">Edit</div>
                                                    <div class="remove"><button name="delete"
                                                            value="<?php echo $row['id'] ?>"><i
                                                                class="fa-solid fa-trash-can"></i> Delete</button></div>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <!-- second col if necessery -->
                    <div class="second_col product_preview">
                        <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                        <div class="contetn_card">
                            <div class="product_list_container">
                                <img src="assets\images\<?php echo $row['productimg'] ?>" alt="product1">
                                <a href="#">
                                    <h4>Tropical Leaf Print Ruched Top</h4>
                                </a>
                                <div class="price_container">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <?php echo $row['productprice'] ?>
                                </div>
                                <!-------------------------------Content will show on hover the image -->
                                <div class="content">
                                    <div class="side_icons">
                                        <a href="#"><i class="fa-regular fa-heart "></i></a>
                                        <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                                    </div>
                                    <button><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                                </div>
                                <div class="status"><?php echo $row['productstatus'] ?></div>
                            </div>
                            <div class="profile_btn">
                                <button class="profile_update" id="update_btn">Edit Product</button>
                                <button>Remove Product</button>
                            </div>
                        </div>
                        <?php
                                            }
                                            ?>
                    </div>
                    <!--------------Category section------------------------>
                    <div style="width: 100%; margin-top: 20px;">
                        <div class="second_col category_preview">
                            <div class="contetn_card">
                                <div class="shoping_category">
                                    <div class="category_container">
                                        <a href="#"><img src="assets\images\jackets.avif" alt="Jackets">
                                            <h4>Jackets</h4>
                                        </a>
                                    </div>


                                </div>
                                <div class="profile_btn">
                                    <button id="update_btn" class="category_edit_btn">Edit Category</button>
                                    <button>Remove Category</button>
                                </div>
                            </div>
                        </div>
                        <div class="first_col">
                            <div class="contetn_card best_products">
                                <div class="list_head">
                                    <div class="product_head" style="display: flex; gap: 10px; align-items: center;">
                                        <h4>Categories List</h4>
                                        <button class="ancategory">Add New Category</button>
                                    </div>
                                </div>
                                <div class="list_product">
                                    <form action="componants/category_validation.php" method="POST">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Categories</th>

                                                    <th>Action</th>

                                                </tr>
                                                <tr>
                                                    <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                    <td class="product_logo"><img
                                                            src=".\assets\images\<?php echo $row['catimage'] ?>"
                                                            alt="logo"><?php echo $row['catname'] ?></td>
                                                    <td class="action_btn">
                                                        <div class="edit edit_cat" value="<?php echo $row['id'] ?>">Edit</div>
                                                        <div class="remove"><button name="deletecat"
                                                                value="<?php echo $row['id'] ?>"><i
                                                                    class="fa-solid fa-trash-can"></i> Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_dash">
                    <div class="contetn_card best_products">
                        <div class="list_head">
                            <div class="product_head" style="display: flex; gap: 10px; align-items: center;">
                                <h4>Recent Orders</h4>
                            </div>
                        </div>
                        <div class="list_product">
                            <table class="recent_product">
                                <tbody>
                                <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Payment Method</th>
                                                <th>Order date and time</th>
                                            </tr>
                                            <tr>
                                                <?php
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `order`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <td><?php echo $row['order_no'] ?></td>
                                                <td><?php echo $row['product_names'] ?></td>
                                                <td><?php echo $row['payment_method'] ?></td>
                                                <td><?php echo $row['orderdate'] ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!------------------------blog dahsboard add new blog  -->
                <div class="blog_dash">
                    <div class="contact_card best_products">
                        <div class="list_head">
                            <div class="product_head" style="display: flex; gap: 10px; align-items: center;">
                                <h4>Add New Blog</h4>
                            </div>
                        </div>
                        <form action="componants\blog_validation.php" method="POST">
                            <div class="inputbox">
                                <div class="box">
                                    <label>Blog Title: </label>
                                    <input type="text" name="blogtitle">
                                </div>
                                <div class="box">
                                    <label>Choose Date: </label>
                                    <input type="date" name="blogdate">
                                </div>
                            </div>
                            <div class="inputbox">
                                <div class="box">
                                    <label>Choose Image: </label>
                                    <input type="file" name="blogimg">
                                </div>
                                <div class="box">
                                    <label>Enter Description: </label>
                                    <input type="text" name="blogdsc">
                                </div>
                            </div>
                            <div class="textbox">
                                <label>Enter First Paragraph: </label>
                                <textarea id="" cols="30" rows="5" name="fpara"></textarea>
                            </div>
                            <div class="textbox">
                                <label>Enter Second Paragraph: </label>
                                <textarea id="" cols="30" rows="5" name="spara"></textarea>
                            </div>
                            <div class="box">
                                <button type="submit" name="blog_btn">Add Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------Order View recipet popup---------------------------------------------------------------->
    <div class="order_recipet">
        <div class="order_view">
            <div class="order_formtitle">
                <h2>Order Invoice</h2>
                <i class="fa-solid fa-x close_orderform"></i>
            </div>
            <div class="invoice_table">
                <div class="invoice_logo">
                    <h2>Shopster</h2>
                </div>
                <div class="order_list">
                    <table border="2">
                        <tr>
                            <th colspan="2" class="brnone blnone bbnone">Order Id :</th>
                            <th colspan="2" class="brnone blnone bbnone" style="text-align:right;">
                                <div class="invoice_content">
                                    <button id="invoice_edit">Edit Invoice</button>
                                    <button onclick="window.print();">Download Invoice</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4" class="btnone">OID-011</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="brnone blnone btnone bbnone">Order Status :</th>
                            <th colspan="2" class="brnone blnone btnone bbnone" style="text-align:right;">Order Date :
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2" class="brnone blnone btnone">Deliverd</td>
                            <td colspan="2" class="brnone blnone btnone" style="text-align:right;">20/06/2023</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="brnone blnone btnone bbnone">Bill From :</th>
                            <th colspan="2" class="brnone blnone btnone bbnone" style="text-align:right;">Bill To :</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="brnone blnone btnone bbnone">Shopster.pvt.ltd, admin@gmail.com, Near
                                Sunder Cinema Road Saproon, Solan.(H.P). 173211</td>
                            <td colspan="2" class="brnone blnone btnone bbnone">Shopster.pvt.ltd, admin@gmail.com, Near
                                Sunder Cinema Road Saproon, Solan.(H.P). 173211</td>
                        </tr>
                        <tr>
                            <th class="brnone blnone">Item name</th>
                            <th class="brnone blnone">Price</th>
                            <th class="brnone blnone">Quantity</th>
                            <th class="brnone blnone">Total Cost</th>
                        </tr>
                        <tr>
                            <td class="brnone blnone">Tropical Leaf Print Ruched Top</td>
                            <td class="brnone blnone">370</td>
                            <td class="brnone blnone">1</td>
                            <td class="brnone blnone">400</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right;" class="btnone bbnone">Sub Total : 370</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right;" class="btnone bbnone">Shipping Charges : 30</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right; font-weight:700;" class="btnone bbnone">Total : 400
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="add_order_recipet">
        <div class="order_view">
            <div class="order_formtitle">
                <h2>Add Order Invoice</h2>
                <i class="fa-solid fa-x close_orderinvoice"></i>
            </div>
            <div class="invoice_table">
                <div class="invoice_logo">
                    <h2>Shopster</h2>
                </div>
                <form action="#">
                    <div class="order_list">
                        <table border="2">
                            <tr>
                                <th colspan="2" class="brnone blnone bbnone">Order Id :</th>
                                <th colspan="2" class="brnone blnone bbnone" style="text-align:right;">
                                    <div class="invoice_content">
                                        <input type="submit" value="Add Invoice" id="invoice_edit"
                                            style="border:1px solid var(--colorred);">
                                        <button onclick="window.print();">Download Invoice</button>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td colspan="4" class="btnone"><input type="text" name="order_id" id=""></td>
                            </tr>
                            <tr>
                                <th colspan="2" class="brnone blnone btnone bbnone">Order Status :</th>
                                <th colspan="2" class="brnone blnone btnone bbnone" style="text-align:right;">Order Date
                                    :</th>
                            </tr>
                            <tr>
                                <td colspan="2" class="brnone blnone btnone"><input type="text" name="status" id="">
                                </td>
                                <td colspan="2" class="brnone blnone btnone" style="text-align:right;"><input
                                        type="date" name="date" id=""></td>
                            </tr>
                            <tr>
                                <th colspan="2" class="brnone blnone btnone bbnone">Bill From :</th>
                                <th colspan="2" class="brnone blnone btnone bbnone"
                                    style="text-align:right; vertical-align:top;">Bill To :
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2" class="brnone blnone btnone bbnone"><textarea name="address" id=""
                                        cols="30" rows="10" style="width:100%; height:200px;"></textarea></td>
                                <td colspan="2" class="brnone blnone btnone bbnone"
                                    style="text-align:right; vertical-align:top;"><textarea name="address" id=""
                                        cols="30" rows="10" style="width:100%; height:200px;"></textarea></td>
                            </tr>
                            <tr>
                                <th class="brnone blnone">Item name</th>
                                <th class="brnone blnone">Price</th>
                                <th class="brnone blnone">Quantity</th>
                                <th class="brnone blnone">Total Cost</th>
                            </tr>
                            <tr>
                                <td class="brnone blnone"><input type="text" name="item name" id=""></td>
                                <td class="brnone blnone"><input type="text" name="price" id=""></td>
                                <td class="brnone blnone"><input type="text" name="quantity" id=""></td>
                                <td class="brnone blnone"><input type="text" name="total cost" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align:right;" class="btnone bbnone">Sub Total : <input
                                        type="text" name="subtotal" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align:right;" class="btnone bbnone">Shipping Charges :
                                    <input type="text" name="shipping_charges" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align:right; font-weight:700;" class="btnone bbnone">Total :
                                    <input type="text" name="total" id="">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-----------------------Product Edit form open when click on edit product button on product preview card--------------------------->
    <div class="productedit_popup" id="productedit_popup">
        <div class="product_content">
            <div class="product_formtitle">
                <h2>Edit Product</h2>
                <i class="fa-solid fa-x close_productform"></i>
            </div>

            <div class="product_form">
                <form action="componants/product_edit_validation.php" method="POST">
            <?php
            include ("./include/connection.php");
            $query = "SELECT * FROM `product` ";
            $result = mysqli_query($conn,$query);
            
    if($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
?>
<div class="product_img">
                        <input type="file" name="productimg" id="productimg" value="<?php echo $row['productimg'] ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <a href="#">Remove Image</a>
                    </div>
                    <div class="input_box">
                        <label for="producttitle">Product Title :</label>
                        <input type="text" name="producttitle" id="producttitle" value="<?php echo $row['producttitle'] ?>">
                    </div>
                    <div class="input_box">
                        <label for="productprice">Product Price :</label>
                        <input type="text" name="productprice" id="productprice" value="<?php echo $row['productprice'] ?>">
                    </div>
                    <div class="input_box">
                        <label for="product productstatus">Product Status :</label>
                        <select name="productstatus" id="" value="<?php echo $row['productstatus'] ?>">
                            <option value="Available">In Stock</option>
                            <option value="Out of Stock">Out of Stock</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <label for="productprice">Product Price :</label>
                        <select name="productcat" id="">
                            <option value="Home">Home</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Glasses">Glasses</option>
                            <option value="Handbags">Handbags</option>
                            <option value="Sneakers">Sneakers</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <div class="profile_btn">
                            <button id="update_profile" name="update_product" type="submit">Update Product</button>
                        </div>
                    </div>
                    <?php
                } ?>
                </form>
            </div>
        </div>
    </div>
    <!-----------------------Category Edit form open when click on edit product button on category preview card--------------------------->
    <div class="catedit_popup" id="catedit_popup">
        <div class="category_content">
            <div class="cat_formtitle">
                <h2>Edit Product</h2>
                <i class="fa-solid fa-x close_catform"></i>
            </div>

            <div class="product_form">
                <form action="">
                    <div class="product_img">
                        <img src="./assets\images\jackets.avif" alt="">
                        <div class="uploadbtn">
                            <input type="file" name="productimg" id="productimg">
                            <a href="#">Remove Image</a>
                        </div>
                        <div class="input_box">
                            <label for="cattitle">Category Title :</label>
                            <input type="text" name="cattitle" id="cattitle">
                        </div>
                    </div>

                    <div class="input_box">
                        <div class="profile_btn">
                            <button id="update_profile">Save Category</button>
                            <button>Remove Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------Add new product form popup section-------------------------->
    <div class="addproduct_popup" id="addproduct_popup">
        <div class="addproduct_content">
            <div class="product_formtitle">
                <h2>Add Product</h2>
                <i class="fa-solid fa-x close_addproductform closeform"></i>
            </div>

            <div class="addproduct_form">
                <form action="componants/product_validation.php" method="POST">
                    <div class="product_img">
                        <input type="file" name="productimg" id="productimg">
                        <a href="#">Remove Image</a>
                    </div>
                    <div class="input_box">
                        <label for="producttitle">Product Title :</label>
                        <input type="text" name="producttitle" id="producttitle">
                    </div>
                    <div class="input_box">
                        <label for="productprice">Product Price :</label>
                        <input type="text" name="productprice" id="productprice">
                    </div>
                    <div class="input_box">
                        <label for="product productstatus">Product Status :</label>
                        <select name="productstatus" id="">
                            <option value="Available">In Stock</option>
                            <option value="Out of Stock">Out of Stock</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <label for="productprice">Product Price :</label>
                        <select name="productcat" id="">
                            <option value="Home">Home</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Glasses">Glasses</option>
                            <option value="Handbags">Handbags</option>
                            <option value="Sneakers">Sneakers</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <div class="profile_btn">
                            <button id="update_profile" name="product_submit">Add Product</button>
                            <!-- <button>Remove Product</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------Add new category popup form---------------------------------------->
    <div class="catadd_popup" id="catadd_popup">
        <div class="categoryadd_content">
            <div class="catadd_formtitle">
                <h2>Add Category</h2>
                <i class="fa-solid fa-x close_addcatform"></i>
            </div>

            <div class="product_form">
                <form action="componants/category_validation.php" method="POST">
                    <div class="product_img">
                        <div class="uploadbtn">
                            <input type="file" name="catimage" id="productimg">
                            <a href="#">Remove Image</a>
                        </div>
                        <div class="input_box">
                            <label for="cattitle">Category Title :</label>
                            <input type="text" name="catname" id="cattitle">
                        </div>
                    </div>

                    <div class="input_box">
                        <div class="profile_btn">
                            <button id="update_profile" name="category_submit">Add Category</button>
                            <button>Remove Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------------User update form when click on the update button------------------>
    <div class="updateform_popup" id="updateform_popup">
        <div class="update_content">
            <div class="update_form">
                <h2>Update Profile</h2>
                <i class="fa-solid fa-x close_updateform"></i>
            </div>
            <form action="">
                <div class="user_pic">
                    <img src="admin.jpg" alt="user_logo">
                    <a href="#">Upload Image</a>
                    <a href="#">Remove Image</a>
                </div>
                <div class="input_container">
                    <div class="input_box">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="firstName" id="firstname">
                    </div>
                    <div class="input_box">
                        <label for="lastname">Last Name :</label>
                        <input type="text" name="lastName" id="lastname">
                    </div>
                    <div class="input_box">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input_box">
                        <label for="phone">Phone No :</label>
                        <input type="text" name="phoneNo" id="phone">
                    </div>
                    <div class="input_box address">
                        <label for="address">Address :</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input_box address">
                        <div class="profile_btn">
                            <button id="update_profile">Save Profile</button>
                            <button>Remove Account</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</bodY>

</html>