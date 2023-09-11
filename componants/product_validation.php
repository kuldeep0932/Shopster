<?php

include('../include/connection.php');


if(isset($_POST['delete'])){

        $id = mysqli_real_escape_string($conn,$_POST['delete']);
    
        $delete = "DELETE FROM `product` WHERE id = '$id'";
        $query_run = mysqli_query($conn,$delete);
    
        if($query_run){
           echo
           '<script>
           alert("delete sucess");
           </script>';
    header('location: ../userpanel.php');
        }
        else{
            echo
            '<script>
            alert("delete not sucess");
            </script>';
      
}
}



if (isset($_POST['product_submit'])){

$productimg = $_POST['productimg'];
$producttitle = $_POST['producttitle'];
$productprice = $_POST['productprice'];
$productstatus = $_POST['productstatus'];
$productcat = $_POST['productcat'];

$mysql = "INSERT INTO `product`(`id`,`producttitle`, `productprice`, `productstatus`, `productimg`, `productcat`) VALUES ('','$producttitle','$productprice','$productstatus','$productimg','$productcat')";

if( mysqli_query($conn,$mysql)){
    echo 
    "<script>
    alert('Data Inserted');
    </script>";
    header('location: ../userpanel.php');

}else{
    echo 
    "<script>
    alert('Data NOT Inserted');
    </script>";
}


}

 ?>