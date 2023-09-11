<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopster - Fashion Store</title>
    <link rel="shortcut icon"
        href="./assets/images/fav.png"
        type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/login.js"></script>
</head>

<body>
    <!-----------Top header discount section------------>
    <div class="header_top">
        <div class="main">
            WOW offers! 40-50% Off Top Trending Product
            <!-- <div class="dark_icon">
            Dark Mode:<i class="fa-solid fa-moon" id="dark_logo"></i>
        </div> -->
        </div>
    </div>
    <!----------Top header social nav bar------------->
    <div class="header_social_nav">
        <div class="main">
            <div class="headersocial_icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            
            <?php 
        session_start();
    if(!empty($_SESSION['Email'])){
        echo '
        <div class="registration_icons" id="registration">
            
        <div class="login">
            <div class="user_nav">
            <div class="setting">'.$_SESSION['User_Name'].'<i class="fa-sharp fa-solid fa-gear"></i>                    
            <ul>
            <a href="userdashboard.php"><li>Go To Dashboard</li></a>
            <a href="logout.php"><li>Log Out</li></a>
            </ul>
        </div>
    </div>
           </div>
    </div>';
    }else{
        echo '
        <div class="registration_icons" id="registration">
            
        <div class="login">
            Login
            <ul>
                <li><a href="../Project\login.php">User Login</a></li>
                <li><a href="../Project\adminlogin.php">Admin Login</a></li>
            </ul>
        </div>
        <a href="../Project\register.php" class="register">Register</a>
    </div>';
    }
                ?>

        </div>
    </div>
    <!-----------Header Top Main Nav bar--------------------->
    <div class="header_topmain_nav">
        <div class="main">
            <i class="fa-solid fa-bars" id="bars"></i>
            <div class="main_navbar">
                <nav id="nav_bar">
                    <ul id="navigation_bar">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="../Project\jacketscategory.php">Jackets</a></li>
                        <li><a href="../Project\glassescategory.php">Glasses</a>
                            <!-- <ul>
                            <li>
                                <div>
                                    <a href="#" class="bold">New Collection</a>
                                    <a href="#">Clothes Collection</a>
                                    <a href="#">Purse Collection</a>
                                    <a href="#">Wallet Collection</a>
                                    <a href="#">Watch Collection</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="bold">Footware</a>
                                    <a href="#">Flip Flops</a>
                                    <a href="#">Sport Shoes</a>
                                    <a href="#">Sandles</a>
                                    <a href="#">Formal Shoes</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="bold">Acessories</a>
                                    <a href="#">Luggage & Travel</a>
                                    <a href="#">Backpacks</a>
                                    <a href="#">Goggles</a>
                                    <a href="#">Stylish Belts</a>
                                </div>
                            </li>
                        </ul> -->
                        </li>
                        <li><a href="../Project\handbagscategory.php">Handbags</a></li>
                        <li><a href="../Project\sneakerscategory.php">Sneakers</a></li>
                        <li><a href="../Project\blog.php">Blog</a></li>
                    </ul>
                </nav>
            </div>
            <div class="logo">
                <a href="./index.php"><img src=".\assets\images\shopster_logo.png" alt="shopster logo"></a>
            </div>
            <div class="nav_icons">
                <input type="text" placeholder="Search........." id="search-box">
                <a href="#"><i class="fa-solid fa-magnifying-glass" id="search_icon"></i></a>
                <a href="#"><i class="fa-regular fa-heart"><span>0</span></i></a>
                <a href="addtocart.php"><i class="fa-solid fa-cart-shopping cart"><span>0</span></i></a>
            </div>
        </div>
        <!-- <div class="atc">
           <div class="atc_head">Weldfsd
        <i class="fa-solid fa-x close_cart"></i>
</div>
        </div> -->
    </div>