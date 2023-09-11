<?php

include('../include/connection.php');


if(isset($_POST['deletecat'])){

        $id = mysqli_real_escape_string($conn,$_POST['deletecat']);
    
        $catdelete = "DELETE FROM `category` WHERE id = '$id'";
        $query_run = mysqli_query($conn,$catdelete);
    
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



if (isset($_POST['category_submit'])){

$catimg = $_POST['catimage'];
$cattitle = $_POST['catname'];
// $productprice = $_POST['productprice'];
// $productstatus = $_POST['productstatus'];

$mysql = "INSERT INTO `category`(`id`, `catimage`, `catname`) VALUES ('','$catimg','$cattitle')";

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