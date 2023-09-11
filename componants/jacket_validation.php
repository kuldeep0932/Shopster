<?php

include('../include/connection.php');


if(isset($_POST['jackets_delete'])){

        $id = mysqli_real_escape_string($conn,$_POST['jackets_delete']);
    
        $delete = "DELETE FROM `jackets_category` WHERE id = '$id'";
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



if (isset($_POST['jacket_submit'])){

$jacketimg = $_POST['jacketimage'];
$jackettitle = $_POST['jackettitle'];
$jacketprice = $_POST['jacketprice'];
$jacketstatus = $_POST['jacketstatus'];

$mysql = "INSERT INTO `jackets_category`(`id`, `jacketimage`, `jackettitle`, `jacketprice`, `jacketstatus`) VALUES ('','$jacketimg','$jackettitle','$jacketprice','$jacketstatus')";

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