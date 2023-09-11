<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href=".\assets\css\web.css">
    <link rel="shortcut icon"
        href="./assets/images/fav.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./js/jquery.js"></script>
</head>

<body>
    <!----------------------------------------Admin Panel Dashboard and navigation Section--------------------------------------------------------->
    <div class="user_container">
        <div class="admin_sidebar">
            <div class="title">
                <a href="index.php"><img src=".\assets\images\shopster_logo.png" alt="shopster logo"></a>
            </div>
            <div class="side_nav">
                <div class="dash user_dash_tab side_nav_active"><i class="fa-solid fa-folder"></i>Dashboard</div>
                <div class="dash user_profile_tab"><i class="fa-solid fa-id-card"></i>My Profile</div>
                <div class="dash user_order_tab"><i class="fa-solid fa-cart-shopping"></i>Orders</div>
                <div class="dash user_acc_tab"><i class="fa-solid fa-gear"></i>Account Settings</div>
                <div class="dash user_contact_tab"><i class="fa-solid fa-circle-info"></i>Contact Us</div>
                <a href="logout.php"><div class="dash user_logout_tab"><i class="fa-solid fa-right-from-bracket"></i>Log Out</div></a>

                <div class="dash dark_icon">
                    <i class="fa-solid fa-moon" id="dark_logo"></i> Mode
                </div>
            </div>
        </div>
        <div class="admin_logo">
            <div class="user_logo">
                <h3 class="title-dash">Wellcome back to dashboard</h3>
                <div class="user_nav">
                    <img src="./assets/images/<?php
                    session_start();
                    echo $_SESSION['Image']?>" alt="">
                    <?php 
                    echo
                    '<div class="setting">'. $_SESSION['User_Name'] .''
                    ?>
                    <!-- <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Your Order</a></li>
                        <li><a href="#">Account Setting</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="dashboard_content">
            <div class="user_dashboard">
                <div class="first_col">
                    <div class="contetn_card user_profile_tab"><i class="fa-solid fa-id-card fa-2x"></i>
                        <h4>My Profile</h4>
                    </div>
                    <div class="contetn_card user_order_tab"><i class="fa-solid fa-cart-shopping fa-2x"></i>
                        <h4>Orders</h4>
                    </div>
                    <div class="contetn_card user_acc_tab"><i class="fa-solid fa-gear fa-2x"></i>
                        <h4>Account Settings</h4>
                    </div>
                    <div class="contetn_card user_contact_tab"><i class="fa-solid fa-circle-info fa-2x"></i>
                        <h4>Contact Us</h4>
                    </div>
                </div>
            </div>
            <div class="profile_tab">
                <div class="contetn_card">
                    <div class="profile_logo">
                        <img src="./assets/images/<?php echo $_SESSION["Image"]?>" alt="user profile">
                    </div>
                    <div class="view_content_profile">
                        <?php
                            echo
                            '<div class="view_detail">
                                <div class="profile_content">
                                    <div>
                                        <h4>First Name :</h4>
                                        <p>'.  $_SESSION["First_Name"].'</p>
                                    </div>
                                    <div>
                                        <h4>Last Name :</h4>
                                        <p>'.  $_SESSION["Last_Name"].'</p>
                                    </div>
                                </div>
                                <div class="profile_content">
                                    <div>
                                        <h4>Email Address:</h4>
                                        <p>'.  $_SESSION["Email"].'</p>
                                    </div>
                                    <div>
                                        <h4>Phone No :</h4>
                                        <p>'.  $_SESSION["Number"].'</p>
                                    </div>
                                </div>
                                <div class="profile_content">
                                    <h4>Address :</h4>
                                    <p>'.  $_SESSION["Address"].'</p>
                                </div>
                                <div class="profile_content profile_btn">
                                    <button id="update_btn" class="user_acc_tab">Edit Profile</button>
                                    <!-- <button>Remove Account</button> -->
                                </div>
                            </div>';
                            ?>
                    </div>
                </div>
            </div>
            <!----------------------Account Settings tab------------------------------------------->
            <div class="account_setting contetn_card">
                <form action="componants/profile_update_validation.php" method="POST" class="setting_form">
                    <div class="contetn_card">
                        <div class="profile_logo">
                            <img src="./assets/images/<?php echo $_SESSION["Image"]?>" alt="user profile">
                            <input type="file" name="image" id="">
                        </div>
                        <div class="view_content_profile">
                            <?php
                            echo
                            '<div class="view_detail">
                                <div class="profile_content">
                                    <div>
                                        <label for="name">First Name :</label>
                                        <input type="text" name="firstname" value="'. $_SESSION['First_Name'] .'">
                                    </div>
                                    <div>
                                        <label for="name">Last Name :</label>
                                        <input type="text" name="lastname" value="'. $_SESSION['Last_Name'] .'">
                                    </div>
                                </div>
                                <div class="profile_content">
                                    <div>
                                        <label for="name">Email Address :</label>
                                        <input type="text" name="email" value="'. $_SESSION['Email'] .'">
                                    </div>
                                    <div>
                                        <label for="name">Phone No :</label>
                                        <input type="text" name="number" value="'. $_SESSION['Number'] .'">
                                    </div>
                                </div>
                                <div class="profile_content">
                                    <div>
                                        <label for="name">Address :</label>
                                        <textarea name="address" id="" cols="41" rows="2">'. $_SESSION['Address'] .'</textarea>
                                    </div>
                                </div>
                                <div class="profile_content profile_btn">
                                    <button id="update_btn" name="profile_update">Update Profile</button>
                                    
                                </div>
                            </div>';
                            ?>
                             
                        </div>
                    </div>
                </form>
            </div>
            <!----------------------------------Contact Us tab------------------------------------------------->
            <div class="contact_dash">
                <div class="contact_card"><img src="./assets/images/contact.jpg" alt=""></div>
                <div class="contact_card">
                    <form action="componants\contactus_validation.php" method="POST">
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
            <!---------------------------------Order tab------------------------------------------------------->
            <div class="userorder_tab">
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
                                             $username_id = $_SESSION['Id'];
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `order` WHERE `user_id`='$username_id'";
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
        </div>
    </div>
    </div>
</body>

</html>