<?php

include('../include/connection.php');

if (isset($_POST['contact_btn'])){

$First_name = $_POST['cfname'];
$Last_name = $_POST['clname'];
$Email = $_POST['cemail'];
$Phone = $_POST['cphone'];
$message = $_POST['cmessage'];

$mysql = "INSERT INTO `contact_us` VALUES ('','$First_name','$Last_name','$Email','$Phone','$message')";

if( mysqli_query($conn,$mysql)){
    echo 
    "<script>
    alert('Data Inserted');
    </script>";
    header('location: ../userdashboard.php');
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