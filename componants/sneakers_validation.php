<?php

include('../include/connection.php');


if(isset($_POST['sneakers_delete'])){

        $id = mysqli_real_escape_string($conn,$_POST['sneakers_delete']);
    
        $delete = "DELETE FROM `sneakers_category` WHERE id = '$id'";
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



if (isset($_POST['sneakers_submit'])){

$sneakersimg = $_POST['sneakersimage'];
$sneakerstitle = $_POST['sneakerstitle'];
$sneakersprice = $_POST['sneakersprice'];
$sneakersstatus = $_POST['sneakersstatus'];

$mysql = "INSERT INTO `sneakers_category` (`id`, `sneakerstitle`, `sneakersimage`, `sneakersprice`, `sneakersstatus`) VALUES ('','$sneakerstitle','$sneakersimg','$sneakersprice','$sneakersstatus')";

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