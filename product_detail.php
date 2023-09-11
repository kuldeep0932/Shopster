<!--------------------------Header-------------->
<?php 
    include ("./include/header.php");
    ?>

<!-------------------------Full Product Details Page Section -->

<div class="form_head">Product Details</div>
<!--Product details main container--------------------->
<div class="product_details">
    <div class="product_details_container">
    <?php
    include ("./include/connection.php");

                                            if(isset($_POST['product_view']) && isset($_POST['productid'])){
                                                $productid = $_POST['productid'];

                                            $query = "SELECT * FROM `product` WHERE `productid`='$productid'";
                                            $result = mysqli_query($conn,$query);
                                            $row=mysqli_fetch_assoc($result);
                                            if($row)
                                            {
                                            
                                                ?>
        
        <!-----------------Product image div ust for product image in background------------------->
        <div class="product_image">
            <img src="./assets/images/<?php echo $row['productimg'] ?>" alt="">
        </div>
        <!---------------------Product Description section------------>
        <div class="product_description">
            <!-----------------------------content text of product description--------->
            <div class="content_text">
                <h3><?php echo $row['producttitle'] ?></h3>
                <!---------------Price_container Original Price and discount price and discount percent---------->
                <div class="price_container">
                    <!-------------Original Price of Product--------------->
                    <div class="dis_price">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        430
                    </div>
                    <!--------------------Discounted Price-------->
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <?php echo $row['productprice'] ?>
                    <!------------Discount Percentage------------->
                    <div class="discount">SAVE 10%</div>
                </div>
                <p>Maximize comfort with this printed T-shirt designed with a round neck and short sleeves.Look
                    pretty in a kurta from u women's wear and get it in pink. limeroad has something for
                    everyone.lay your hands on xs size kurtas to wear them as casual wear.the best...</p>
                <div class="product_list">
                    <div class="list">
                        <h5>Vendor : <span>Puma</span></h5>
                    </div>
                    <div class="list">
                        <h5>Avaliability : <span>In Stock</span></h5>
                    </div>
                    <div class="list">
                        <h5>Tags : <span>Cotton, Summer, Vintage</span></h5>
                    </div>
                </div>
            
                <form action="componants\addtocart_validation.php" method="post">
                    <input type="hidden" name="productid" value="<?= $productid ?>">
                    <div class="list" style="margin-bottom:15px;">
                        <h5>Quantity : <span><input type="number" min="1" max="4" value="1" name="product_qty"></span></h5>
                    </div>
                    <div class="popup_btn">
                        <input type="hidden" name="productid" value="<?= $productid ?>">
                        <a href="#"><button>Buy Now</button></a>
                        <a href="#"><button name="add_to_cart" type="submit" class="add_to"><i class="fa-solid fa-cart-shopping"></i> Add to
                            cart</button></a>
                        <!-- <a href="#"><button>Buy Now</button></a> -->
                        <!-- <a href="#"><button class="add_to">Add to cart</button></a> -->
                    </div>
                </form>
            </div>
        </div>
        <?php } } ?>
    </div>
</div>
<!----------------------Product Description and Reviews Tabs Section------------------------------------------>
<div class="description_tabs">
    <div class="tabs_content">
        <div class="tabs_button">
            <button id="desc_tab" class="active_tab">Description</button>
            <button id="Review_tab">Reviews</button>
        </div>
        <div class="desc_tab" id="desc_content">
            <p>Maximize comfort with this printed T-shirt designed with a round neck and short sleeves.Look pretty
                in a
                kurta from u women's wear and get it in pink. limeroad has something for everyone.lay your hands on
                xs
                size kurtas to wear them as casual wear.
                the best part? these beautiful styles can be taken from work to dinner in a jiffy! swank this kurta
                in
                vivid patterns priced at ₹1169. limeroad always gives you the hottest styles at the lowest prices.
            </p>
            <div>
                <ul>
                    <li>Type : Tees</li>
                    <li>Design :SImple</li>
                    <li>Neckline : Round Neck</li>
                    <li>Style : Casual</li>
                    <li>Fabric : Cotton</li>
                </ul>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper lacus non urna
                porttitor,
                sodales convallis nulla bibendum. Integer dignissim leo vitae lorem lacinia, eget aliquam diam
                consequat. Donec rhoncus nisl eget ornare egestas. Sed quis tempus ex. Nullam sit amet libero a urna
                fermentum blandit sed in ex. Curabitur vehicula sed turpis non pellentesque. Nulla maximus dolor
                vitae
                cursus placerat. Quisque dictum, ante at euismod imperdiet, lacus enim suscipit nisi, et imperdiet
                sapien turpis quis ipsum. Integer sed turpis dui. Maecenas eleifend consequat ante eu lacinia.
                Vestibulum iaculis sed ipsum vel venenatis.</p>
        </div>
        <div class="review_tab" id="rev_contnet">
            <div class="reviews">
                <div class="review_text">
                    <h2>Customer Reviews</h2>
                    <p>No Reviews Yet.</p>
                </div>
                <button id="form">Write A Review</button>
            </div>
            <div class="review_form" id="hide">
                <h4>WRITE A REVIEW</h4>
                <form>
                    <input type="text" placeholder="Enter name......">
                    <input type="text" placeholder="Enter email.....">
                    <input type="text" placeholder="Enter review title.....">
                    <textarea name="" id="" rows="5" placeholder="Write your comments here....."></textarea>
                    <div class="review_submit">
                        <button>Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="trending_products">
    <h1>You May Also Like</h1>
    <span class="products">
        <div class="product_container s-betweeen">
            <!----------------------------------------Product List Container Product 1 ---------------------------->
            <div class="product_list_container">
                <img src="./assets\images\trend5.webp" alt="">
                <a href="#">
                    <h4>Men's Sunglasses</h4>
                </a>
                <div class="price_container">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    150
                </div>
                <!-------------------------------Content will show on hover the image -->
                <div class="content">
                    <div class="side_icons">
                        <a href="#"><i class="fa-regular fa-heart "></i></a>
                        <a href="#"><i class="fa-regular fa-eye "
                                onclick="document.getElementById('id04').style.display='flex'"></i></a>
                    </div>
                    <button><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
                <!------------Popup content will show on click the eye icon on hover -->
                <div class="popup_content" id="id04" onclick="document.getElementById('id04').style.display='none'">
                    <div class="content_container">
                        <img src="./assets\images\trend5.webp" alt="product2">
                        <div class="content_text">
                            <h3>Men's Sunglasses</h3>
                            <div class="price_container">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                150
                            </div>
                            <p>Maximize comfort with this printed T-shirt designed with a round neck and short
                                sleeves.Look pretty in a kurta from u women's wear and get it in pink. limeroad has
                                something</p>
                            <a href="#">View Product Detail</a>
                            <div class="popup_btn">
                                <a href="#"><button>Buy Now</button></a>
                                <a href="#"><button class="add_to">Add to cart</button></a>
                            </div>
                            <i class="fa-solid fa-xmark fa-2x close"
                                onclick="document.getElementById('id04').style.display='none'"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------Product List Container Product 2 ---------------------------->
            <div class="product_list_container">
                <img src="./assets\images\trend2.webp" alt="">
                <a href="#">
                    <h4>Kiura Watch</h4>
                </a>
                <div class="price_container">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    700
                </div>
                <!-------------------------------Content will show on hover the image -->
                <div class="content">
                    <div class="side_icons">
                        <a href="#"><i class="fa-regular fa-heart "></i></a>
                        <a href="#"><i class="fa-regular fa-eye "
                                onclick="document.getElementById('id01').style.display='flex'"></i></a>
                    </div>
                    <button><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
                <!------------Popup content will show on click the eye icon on hover -->
                <div class="popup_content" id="id01" onclick="document.getElementById('id01').style.display='none'">
                    <div class="content_container">
                        <img src="./assets\images\trend2.webp" alt="product2">
                        <div class="content_text">
                            <h3>Kiura Watch</h3>
                            <div class="price_container">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                700
                            </div>
                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a
                                comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                            <a href="#">View Product Detail</a>
                            <div class="popup_btn">
                                <a href="#"><button>Buy Now</button></a>
                                <a href="#"><button class="add_to">Add to cart</button></a>
                            </div>
                            <i class="fa-solid fa-xmark fa-2x close"
                                onclick="document.getElementById('id01').style.display='none'"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------Product List Container Product 3 ---------------------------->
            <div class="product_list_container">
                <img src="./assets\images\trend3.webp" alt="">
                <a href="#">
                    <h4>Light Beige Court Shoes</h4>
                </a>
                <div class="price_container">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    400
                </div>
                <!-------------------------------Content will show on hover the image -->
                <div class="content">
                    <div class="side_icons">
                        <a href="#"><i class="fa-regular fa-heart "></i></a>
                        <a href="#"><i class="fa-regular fa-eye "
                                onclick="document.getElementById('id02').style.display='flex'"></i></a>
                    </div>
                    <button><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
                <!------------Popup content will show on click the eye icon on hover -->
                <div class="popup_content" id="id02" onclick="document.getElementById('id02').style.display='none'">
                    <div class="content_container">
                        <img src="./assets\images\trend3.webp" alt="product2">
                        <div class="content_text">
                            <h3>Light Beige Court Shoes</h3>
                            <div class="price_container">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                400
                            </div>
                            <p>Maximize comfort with this printed T-shirt designed with a round neck and short
                                sleeves.Look pretty in a kurta from u women's wear and get it in pink. limeroad has
                                something</p>
                            <a href="#">View Product Detail</a>
                            <div class="popup_btn">
                                <a href="#"><button>Buy Now</button></a>
                                <a href="#"><button class="add_to">Add to cart</button></a>
                            </div>
                            <i class="fa-solid fa-xmark fa-2x close"
                                onclick="document.getElementById('id02').style.display='none'"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------Product List Container Product 4 ---------------------------->
            <div class="product_list_container">
                <img src="./assets\images\trend4.webp" alt="">
                <a href="#">
                    <h4>Wedge-Heeled Suede Sandles</h4>
                </a>
                <div class="price_container">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    350
                </div>
                <!-------------------------------Content will show on hover the image -->
                <div class="content">
                    <div class="side_icons">
                        <a href="#"><i class="fa-regular fa-heart "></i></a>
                        <a href="#"><i class="fa-regular fa-eye "
                                onclick="document.getElementById('id03').style.display='flex'"></i></a>
                    </div>
                    <button><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
                <!------------Popup content will show on click the eye icon on hover -->
                <div class="popup_content" id="id03" onclick="document.getElementById('id03').style.display='none'">
                    <div class="content_container">
                        <img src="./assets\images\trend4.webp" alt="product2">
                        <div class="content_text">
                            <h3>Wedge-Heeled Suede Sandles</h3>
                            <div class="price_container">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                350
                            </div>
                            <p>Maximize comfort with this printed T-shirt designed with a round neck and short
                                sleeves.Look pretty in a kurta from u women's wear and get it in pink. limeroad has
                                something</p>
                            <a href="#">View Product Detail</a>
                            <div class="popup_btn">
                                <a href="#"><button>Buy Now</button></a>
                                <a href="#"><button class="add_to">Add to cart</button></a>
                            </div>
                            <i class="fa-solid fa-xmark fa-2x close"
                                onclick="document.getElementById('id03').style.display='none'"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </span>
</div>

<!--------------------------Footer--------------->
<?php 
    include ('./include/footer.php');
?>