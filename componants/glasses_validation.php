<?php

include('../include/connection.php');


if(isset($_POST['glasses_delete'])){

        $id = mysqli_real_escape_string($conn,$_POST['glasses_delete']);
    
        $delete = "DELETE FROM `glasses_category` WHERE id = '$id'";
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



if (isset($_POST['glasses_submit'])){

$glassesimg = $_POST['glassesimage'];
$glassestitle = $_POST['glassestitle'];
$glassesprice = $_POST['glassesprice'];
$glassesstatus = $_POST['glassesstatus'];

$mysql = "INSERT INTO `glasses_category`(`id`, `glassesimage`, `glassestitle`, `glassesprice`, `glassesstatus`) VALUES ('','$glassesimg','$glassestitle','$glassesprice','$glassesstatus')";

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