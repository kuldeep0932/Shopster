<!--------------------------Header-------------->
<?php 
    include ("include/header.php");
    ?>

<!------Slider Container With Navigation and Image-->
<div class="container">

    <div class="imagecontainer">
        <div class="navigation">
            <span id="left">
                <</span>
                    <span id="right">></span>
        </div>
        <div class="slidericon">
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="slide_image">
            <img src="assets\images\main-banner-1.webp" alt="slider_img1">
            <div class="cont">
                <p>New Arrival</p>
                <h2>Shopster Collection</h2>
                <a href="#">Shop Now</a>
            </div>
        </div>
        <div class="slide_image">
            <img src="assets\images\main-banner-2.webp" alt="slider_img2">
            <div class="cont1">
                <p>New Arrival</p>
                <h2>Black Slim Advanced</h2>
                <a href="#">Shop Now</a>
            </div>
        </div>
    </div>
</div>
<!-----------Shop By Category Section--------------------->
<div class="section_shopby">
    <h1>Shop By Category</h1>
    <div class="shoping_category">
        <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
        <div class="category_container">
            <a href="<?php echo $row['catlink'] ?>"><img src="assets\images\<?php echo $row['catimage'] ?>"
                    alt="Jackets">
                <h4><?php echo $row['catname'] ?></h4>
            </a>
        </div>
        <?php
            }
            ?>

    </div>

    <div class="shopby_banner main">
        <div class="banner_image">
            <img src="assets\images\sub-banner-1.webp" alt="Category-banner-image 1">
        </div>
        <div class="banner_image">
            <img src="assets\images\sub-banner-2.jpg" alt="Category-banner-image 2">
        </div>
    </div>
</div>
<!--------Trending Products------------------------------------------>
<div class="trending_products">
    <h1>Trending Products</h1>
    <span class="products">
        <div class="product_container">
            <!----------------------------------------Product List Container Product 1 ---------------------------->
            <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product` WHERE `productcat`='Home'";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $productid =$row['productid'];
                                                ?>

<div class="product_list_container">
                    <form action="../Project\product_detail.php" method="POST">
                    <img src="assets\images\<?php echo $row['productimg'] ?>" alt="product1">
                    <a href="#">
                        <h4><?php echo $row['producttitle'] ?></h4>
                    </a>

                    <div class="price_container">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <?php echo $row['productprice'] ?>
                    </div>
                    <!-------------------------------Content will show on hover the image -->
                    <div class="content">
                        <div class="side_icons">
                            <!-- <a href="#"><i class="fa-regular fa-heart "></i></a> -->
                            <input type="hidden" name="productid" value="<?= $productid ?>">
                            <!-- <button type="submit" name="product_view" style="position:relative;">click</button> -->
                            <!-- <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a> -->
                        </div>
                        <button type="submit" name="product_view"><i class="fa-solid fa-eye"></i> View Product
                            Details</button>
                    </div>
                    <div class="status"><?php echo $row['productstatus'] ?></div>

                </form>
                </div>

            <?php
                                            }
                                            ?>
        </div>
    </span>

    <a href="allproducts.php" class="all-products">All Products</a>
</div>
<!--------------------------------------Review Section------------------------------------------------------------------>
<div class="main_review_container">
    <h1>What People Are Saying</h1>
    <div class="section">
        <div class="review_navigation">
            <span id="r-left">
                << /span>
                    <span id="r-right">></span>
        </div>
        <div class="review_container">
            <p>
                "Many desktop publishing packages & web page editors now use Lorem Ipsum as their default text, and
                a search for 'lorem ipsum' will uncover many web sites still in their infancy. "
            </p>
            <div class="user_detail">
                <img src="assets\images\user.png" alt="user">
                <div class="user_info">
                    <h3>Stephnie K. Mack</h3>
                    <div>Web Designer</div>
                </div>
            </div>
        </div>
        <div class="review_container">
            <p>
                "Many desktop publishing packages & web page editors now use Lorem Ipsum as their default text, and
                a search for 'lorem ipsum' will uncover many web sites still in their infancy. "
            </p>
            <div class="user_detail">
                <img src="assets\images\user.png" alt="user">
                <div class="user_info">
                    <h3>Stephnie K. Mack</h3>
                    <div>Manager</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------Blog Section---------------------------------------------------------------------->
<div class="blog_container">
    <h1>Our Latest Blog</h1>
    <div class="blog_post_container">
        <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `blog`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
        <div class="blog_post">
            <img src="assets\images\<?php echo $row['blogimg'] ?>" alt="">
            <div class="blog_date">
                <?php echo $row['blogdate'] ?>
            </div>
            <div class="blog_desc">
                <h2><?php echo $row['blogtitle'] ?></h2>
                <p><?php echo $row['blogdsc'] ?></p>
                <a href="#">Read More <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
        <?php 
                                            }
                                            ?>

    </div>
    <a href="../Project\blog.php"><button class="all-products">Read More Blog</button></a>
</div>

<!--------------------------Footer--------------->
<?php 
    include ('./include/footer.php');
    ?>