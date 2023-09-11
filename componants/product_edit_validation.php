<?php
include('../include/connection.php');

if(isset($_POST['update_product'])){
    $productimg = $_POST['productimg'];
$producttitle = $_POST['producttitle'];
$productprice = $_POST['productprice'];
$productstatus = $_POST['productstatus'];
$productcat = $_POST['productcat'];
$id = $_POST['id'];

$mysql = "UPDATE `product` SET `producttitle`='$producttitle',`productprice`='$productprice',`productstatus`='$productstatus',`productimg`='$productimg',`productcat`='$productcat' WHERE `id`='$id'";
 
    $query = mysqli_query($conn,$mysql);

   if($query){
    echo
    '<script>
    alert("Update sucess");
    </script>';
    header('location: ../userpanel.php');
   }
   else{
        echo
        '<script>
        alert("Update not sucess");
        </script>';
   }


}


?>

<!----------------------------Add new product form popup section-------------------------->
<!-- <div class="addproduct_popup" id="addproduct_popup">
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
                            <button id="update_profile" name="product_submit">Add Product</button> -->
                            <!-- <button>Remove Product</button> -->
                        <!-- </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->