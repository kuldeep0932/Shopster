    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>

    <!-------------------------Jacket category page -------------->
    <div class="form_head">Jackets</div>
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
                <!----------------------------------------Product List Container Product 1 ---------------------------->
                <?php
                                            
                                            include ("./include/connection.php");
                                            $query = "SELECT * FROM `product` WHERE `productcat`='Jackets'";
                                            $result = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $productid =$row['productid'];
                                                ?>
                <form action="../Project\product_detail.php" method="POST">

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
                            <!-- <a href="#"><i class="fa-regular fa-heart "></i></a> -->
                            <input type="hidden" name="productid" value="<?= $productid ?>">
                            <!-- <button type="submit" name="product_view" style="position:relative;">click</button> -->
                            <!-- <a href="#"><i class="fa-regular fa-eye " id="prev"></i></a> -->
                        </div>
                        <button type="submit" name="product_view"><i class="fa-solid fa-eye"></i> View Product Details</button>
                    </div>
                    <div class="status"><?php echo $row['productstatus'] ?></div>
                    <!------------Popup content will show on click the eye icon on hover -->
                    <!-- <div class="popup_content" id="popup_container">
                        <div class="content_container">
                            <img src="assets\images\<?php echo $row['productimg'] ?>" alt="product2">
                            <div class="content_text">
                                <h3>Tropical Leaf Print Ruched Top</h3>
                                <div class="price_container">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <?php echo $row['productprice'] ?>
                                </div>
                                <p>Maximize comfort with this printed T-shirt designed with a round neck and short
                                    sleeves.Look pretty in a kurta from u women's wear and get it in pink. limeroad has
                                    something</p>
                                <a href="../Project\product_detail.php">View Product Detail</a>
                                <div class="popup_btn">
                                    <a href="#"><button>Buy Now</button></a>
                                    <a href="#" data-id="<?php echo $row['id'] ?>"><button class="add_to_cart">Add to cart</button></a>
                                </div>
                                <i class="fa-solid fa-xmark fa-2x close" id="close"></i>
                            </div>
                        </div>
                    </div> -->
                    </div>
                    </form>

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