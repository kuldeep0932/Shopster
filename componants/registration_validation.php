<?php

include('../include/connection.php');

if (isset($_POST['submit'])){

$First_name = $_POST['firstname'];
$Last_name = $_POST['lastname'];
$Email = $_POST['email'];
$Phone = $_POST['number'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['confpassword'];

$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mysql = "INSERT INTO `registration_form` VALUES ('','','$First_name','$Last_name','$Email','$Phone','','$pass','$Confirm_Password')";

if( mysqli_query($conn,$mysql)){
    echo 
    "<script>
    alert('Data Inserted');
    </script>";
    header('location: ../login.php');
}else{
    echo 
    "<script>
    alert('Data NOT Inserted');
    </script>";
}


}else{
    echo 
    "<script>
    alert('Data NOT Inserted');
    </script>";
}

 ?>