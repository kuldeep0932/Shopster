<?php
session_start();

include('../include/connection.php');

if (!isset($_SESSION['is_adminlogin'])) {
    if (isset($_REQUEST['email'])) {
        $email = mysqli_real_escape_string($conn, trim($_REQUEST['email']));
        $password = mysqli_real_escape_string($conn, trim($_REQUEST['password']));
        $sql = "SELECT email, `password` FROM `admin` WHERE email='" . $email . "' AND password ='" . $password . "' limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['email'] = $email;
    header('location: ../userpanel.php');
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
        }
    }
} else {
    header('location: ../userpanel.php');
    exit;
}
?>