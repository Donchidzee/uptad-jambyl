<?php 
session_start();

if (md5($_POST['user_login']) === '94787023b0930175191651805d30e1c0' && md5($_POST['user_password']) === 'c215a1ae56816333af838b444d67158d') {
    $_SESSION['logined'] = true;
} 

header('Location: /admin/adminController.php');

