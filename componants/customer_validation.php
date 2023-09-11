<?php

include('../include/connection.php');


if(isset($_POST['deletecs'])){

    $id = mysqli_real_escape_string($conn,$_POST['deletecs']);

    $delete = "DELETE FROM `registration_form` WHERE `id` = '$id'";
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




// if (isset($_POST['product_submit'])){

// $productimg = $_POST['productimg'];
// $producttitle = $_POST['producttitle'];
// $productprice = $_POST['productprice'];
// $productstatus = $_POST['productstatus'];

// $mysql = "INSERT INTO `product`(`id`, `productimg`, `producttitle`, `productprice`, `productstatus`) VALUES ('','$productimg','$producttitle','$productprice','$productstatus')";

// if( mysqli_query($conn,$mysql)){
//     echo 
//     "<script>
//     alert('Data Inserted');
//     </script>";
//     header('location: ../userpanel.php');

// }else{
//     echo 
//     "<script>
//     alert('Data NOT Inserted');
//     </script>";
// }


// }

 ?>