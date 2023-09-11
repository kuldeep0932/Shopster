<?php

session_start();
include('../include/connection.php');

if(!isset($_SESSION['Id'])){
    header("location:../login.php");
    exit;
}else{
    if(isset($_POST['add_to_cart']) && isset($_POST['productid'])){
        $username_id = $_SESSION['Id'];
       
            $productid=$_POST['productid'];
            $qty=$_POST['product_qty'];
            $sql= "SELECT * FROM `product` WHERE `productid`='$productid'";
            $result= mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result);
        
                if($row){
                $productid=$row['productid'];
                $productimg = $row['productimg'];
                $producttitle = $row['producttitle'];
                $productprice = $row['productprice'];
                $productstatus = $row['productstatus'];

                $sql_exist="SELECT * FROM `cart` WHERE (`userid`='$username_id' AND `productid`='$productid')";
                $result_exist=mysqli_query($conn, $sql_exist);
                if(mysqli_num_rows($result_exist)>0){
                    $row_exist=mysqli_fetch_assoc($result_exist);
                    $qty_exist=$row_exist['quantity'];
                    $new_qty=$qty_exist+$qty;
                    $sql_update="UPDATE `cart` SET `quantity` = '$new_qty' WHERE `userid`='$username_id' AND `productid`='$productid'";
                    $result_update=mysqli_query($conn,$sql_update);
                    if($result_update){
                        header("location:../addtocart.php");
                        exit;
                    }else{
                        echo "update failed";
                        exit;
                    }
                } 
                else{
                    $sql_cart_insert="INSERT INTO `cart`(`productid`, `userid`, `quantity`, `productimg`, `producttitle`, `productprice`) VALUES ('$productid','$username_id','$qty','$productimg','$producttitle','$productprice')";
                    $result=mysqli_query($conn,$sql_cart_insert);
                    if($result){
                        header("location:../addtocart.php");   
                        exit;                       
                    }else{
                        echo "insert failed";
                        exit;
                    }
            
                }
        }else{
            echo "id not provided";
            exit;
        }
    
    }else{
        header("location:../addtocart.php");
        exit;
    }
}
 
?>