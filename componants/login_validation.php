<?php
include('../include/connection.php');

// session_start();

if (isset($_POST['login_submit'])) {


    $userNameEmail = $_POST['user_email'];
    $password = $_POST['user_password'];
    $result = mysqli_query($conn, "SELECT * FROM `registration_form` WHERE  email = '$userNameEmail'");

    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {

        if (password_verify($password, $row['password'])) {
            session_start();    
            $_SESSION['User_Name']=$row['firstname'] . " " . $row['lastname'];
            $_SESSION['Id']=$row['id'];
            $_SESSION['Image']=$row['image'];
            $_SESSION['First_Name']=$row['firstname'];
            $_SESSION['Last_Name']=$row['lastname'];
            $_SESSION['Email']=$row['email'];
            $_SESSION['Number']=$row['number'];
            $_SESSION['Address']=$row['address'];

            header('Location:../index.php');
        } 
        else {
            echo
                "<script> alert('Wrong Password'); </script>";
                header('location:../login.php');

        }
    } else {
        echo
            "<script> alert('User not registered'); </script>";
    }

}

?>