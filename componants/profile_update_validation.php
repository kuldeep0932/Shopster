<?php
include('../include/connection.php');

if(isset($_POST['profile_update'])){
    session_start();
    $First_name = $_POST['firstname'];
    $Last_name = $_POST['lastname'];
    $Email = $_POST['email'];
    $Phone = $_POST['number'];
    $image = $_POST['image'];
    $address = $_POST['address'];
    $id= $_SESSION['Id'];
    $update = "UPDATE `registration_form` SET `image`='$image',`firstname`='$First_name',`lastname`='$Last_name',`email`='$Email',`number`='$Phone',`address`='$address' WHERE `id`=$id";
 
    $query = mysqli_query($conn,$update);

   if($query){
    echo
    '<script>
    alert("Update sucess");
    </script>';
    header('location: ../userdashboard.php');
   }
   else{
        echo
        '<script>
        alert("Update not sucess");
        </script>';
   }


}


?>