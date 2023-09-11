    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>

    <!-------------------------Jacket category page -------------->
    <div class="form_head">All Products</div>
    <div class="jackets_section">
        <div class="category">
            <div class="category_nav">
                <h4>Best selling</h4>
                <div class="flex_icon">
                    8 Products
                    <div class="four_bars">||||</div>
                    <div class="four_bars">|||</div>
                    <div class="four_bars">||</div>
                    <div class="four_bars"><i class="fa-solid fa-bars"></i></div>
                </div>
            </div>
            <div class="category_products">
                <div class="product_container">
                    <h1>Trending Products</h1>
                    <!----------------------------------------All Trending Products---------------------------->
                    <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                    <div class="product_list_container">
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
                                <a href="#"><i class="fa-regular fa-heart "></i></a>
                                <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                            </div>
                            <button data-id="<?php echo $row['id'] ?>" name="add_to_cart"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        </div>
                        <div class="status"><?php echo $row['productstatus'] ?></div>
                        <!------------Popup content will show on click the eye icon on hover -->
                        <div class="popup_content" id="popup_container">
                            <div class="content_container">
                                <img src="assets\images\<?php echo $row['productimg'] ?>" alt="product2">
                                <div class="content_text">
                                    <h3>Tropical Leaf Print Ruched Top</h3>
                                    <div class="price_container">
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                        <?php echo $row['productprice'] ?>
                                    </div>
                                    <p>Maximize comfort with this printed T-shirt designed with a round neck and short
                                        sleeves.Look pretty in a kurta from u women's wear and get it in pink. limeroad
                                        has
                                        something</p>
                                    <a href="../Project\product_detail.php">View Product Detail</a>
                                    <div class="popup_btn">
                                        <a href="#"><button>Buy Now</button></a>
                                        <a href="#" data-id="<?php echo $row['id'] ?>"><button class="add_to_cart">Add
                                                to cart</button></a>
                                    </div>
                                    <i class="fa-solid fa-xmark fa-2x close" id="close"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                            }
                                            ?>
                    <h1>Jackets Product</h1>
                    <!----------------------------------------All Jacket Category Products ---------------------------->
                    <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `jackets_category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                    <div class="product_list_container">
                        <img src="assets\images\<?php echo $row['jacketimage'] ?>" alt="product1">
                        <a href="#">
                            <h4><?php echo $row['jackettitle'] ?></h4>
                        </a>

                        <div class="price_container">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <?php echo $row['jacketprice'] ?>
                        </div>
                        <!-------------------------------Content will show on hover the image -->
                        <div class="content">
                            <div class="side_icons">
                                <a href="#"><i class="fa-regular fa-heart "></i></a>
                                <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                            </div>
                            <button data-id="<?php echo $row['id'] ?>" name="add_to_cart"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        </div>
                        <div class="status"><?php echo $row['jacketstatus'] ?></div>
                    </div>
                    <?php
                                            }
                                            ?>
                    <!----------------------------------------All Glasses Category Products---------------------------->
                    <h1>Glasses Product</h1>
                    <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `glasses_category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                    <div class="product_list_container">
                        <img src="assets\images\<?php echo $row['glassesimage'] ?>" alt="product1">
                        <a href="#">
                            <h4><?php echo $row['glassestitle'] ?></h4>
                        </a>

                        <div class="price_container">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <?php echo $row['glassesprice'] ?>
                        </div>
                        <!-------------------------------Content will show on hover the image -->
                        <div class="content">
                            <div class="side_icons">
                                <a href="#"><i class="fa-regular fa-heart "></i></a>
                                <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                            </div>
                            <button data-id="<?php echo $row['id'] ?>" name="add_to_cart"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        </div>
                        <div class="status"><?php echo $row['glassesstatus'] ?></div>
                    </div>
                    <?php
                                            }
                                            ?>
                    <!----------------------------------------All Handbags Category Products---------------------------->
                    <h1>Handbags Product</h1>
                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `handbags_category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <div class="product_list_container">
                    <img src="assets\images\<?php echo $row['handbagimage'] ?>" alt="product1">
                    <a href="#">
                        <h4><?php echo $row['handbagtitle'] ?></h4>
                    </a>
                    
                    <div class="price_container">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <?php echo $row['handbagprice'] ?>
                    </div>
                    <!-------------------------------Content will show on hover the image -->
                    <div class="content">
                        <div class="side_icons">
                            <a href="#"><i class="fa-regular fa-heart "></i></a>
                            <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                        </div>
                        <button data-id="<?php echo $row['id'] ?>" name="add_to_cart"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                    <div class="status"><?php echo $row['handbagstatus'] ?></div>
                    </div>
                    <?php
                                            }
                                            ?>
                    <!----------------------------------------All Sneakers Category Products---------------------------->
                    <h1>Sneakers Product</h1>
                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `sneakers_category`";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <div class="product_list_container">
                    <img src="assets\images\<?php echo $row['sneakersimage'] ?>" alt="product1">
                    <a href="#">
                        <h4><?php echo $row['sneakerstitle'] ?></h4>
                    </a>
                    
                    <div class="price_container">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <?php echo $row['sneakersprice'] ?>
                    </div>
                    <!-------------------------------Content will show on hover the image -->
                    <div class="content">
                        <div class="side_icons">
                            <a href="#"><i class="fa-regular fa-heart "></i></a>
                            <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a>
                        </div>
                        <button data-id="<?php echo $row['id'] ?>" name="add_to_cart"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                    <div class="status"><?php echo $row['sneakersstatus'] ?></div>
                    </div>
                    <?php
                                            }
                                            ?>
                </div>

            </div>
        </div>
    </div>

    <!--------------------------Footer--------------->
    <?php 
    include ('./include/footer.php');
?>