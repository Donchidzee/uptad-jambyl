<?php 
session_start();

if ($_POST['user_login'] === 'login' && $_POST['user_password'] === 'password') {
    $_SESSION['logined'] = true;
} 

header('Location: /admin/adminController.php');