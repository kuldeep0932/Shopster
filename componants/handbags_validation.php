<?php

include('../include/connection.php');


if(isset($_POST['handbags_delete'])){

        $id = mysqli_real_escape_string($conn,$_POST['handbags_delete']);
    
        $delete = "DELETE FROM `handbags_category` WHERE id = '$id'";
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



if (isset($_POST['handbags_submit'])){

$handbagsimg = $_POST['handbagimage'];
$handbagstitle = $_POST['handbagtitle'];
$handbagsprice = $_POST['handbagprice'];
$handbagsstatus = $_POST['handbagstatus'];

$mysql = "INSERT INTO `handbags_category` (`id`, `handbagtitle`, `handbagimage`, `handbagprice`, `handbagstatus`) VALUES ('','$handbagstitle','$handbagsimg','$handbagsprice','$handbagsstatus')";

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