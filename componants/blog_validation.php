<?php

include('../include/connection.php');

if (isset($_POST['blog_btn'])){

$blogtitle = $_POST['blogtitle'];
$blogdate = $_POST['blogdate'];
$blogimage = $_POST['blogimg'];
$blogdsc = $_POST['blogdsc'];
$blogfpara = $_POST['fpara'];
$blogspara = $_POST['spara'];

$mysql = "INSERT INTO `blog`(`id`, `blogtitle`, `blogdate`, `blogimg`, `blogdsc`, `fpara`, `spara`) VALUES ('','$blogtitle','$blogdate','$blogimage','$blogdsc','$blogfpara','$blogspara')";

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