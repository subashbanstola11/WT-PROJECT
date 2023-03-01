<?php 
require_once('../dbcon.php');
session_start();
if($_POST) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $encrypt_pass = md5($password);  
    $notAuth = false;
    $result = $conn -> query('SELECT * FROM users');
    while($user = $result->fetch_assoc()) {
        if($user['email'] == $username && $user['password'] == $encrypt_pass) {
            header('location: ../dashboard.php');
            $_SESSION['user'] = $user['email'];
            break;
        } else {
            $notAuth = true;
        }
    }
    if($notAuth) {
        header('location: ../login.php?notAuth='.$notAuth);
    }
}
?>