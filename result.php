<?php

// if (!empty($_GET)){
//     echo $_GET['fullname'];
//     echo '<pre>';
//     print_r($_GET);
//     echo '<pre>';
// }

// if (!empty($_POST)){
//     echo '<pre>';
//     print_r($_POST);
//     echo '<pre>';
// }

if (!empty($_REQUEST)){
    echo '<pre>';
    print_r($_REQUEST);
    echo '<pre>';
}


$fullname = "";
$error_fullname = "";

$email = "";
$error_email = "";

$password = "";
$error_password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // kiểm tra họ tên
    if (empty($_POST['fullname'])){
        $error_fullname = "Tên không được để trống";
    } else {
        $fullname = htmlspecialchars(trim($_POST['fullname']));
    }

    // kiểm tra email
    if (empty($_POST['email'])){
        $error_email = "Email không được để trống";
    }else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $error_email = "Email không đúng định dạng";
        }
        else{
            $email = htmlspecialchars(trim($_POST['email']));
        }
    }


    // kiểm tra password
    if (empty($_POST['password'])){
        $error_password = "Mật khẩu không được để trống";
    }
    else {
        if (strlen($_POST['password']) < 6){
            $error_password = "Mật khẩu phải chứa 6 ký tự";
        }
        else {
            $password = sha1(trim($_POST['password']));
        }
    }

    // in ra
    if ($error_fullname == ""){
        echo 'Tên hợp lệ: ' . $fullname . '<br>';
    }else {
        echo $error_fullname . '<br>';
    }

    if ($error_email == ""){
        echo 'Email hợp lệ: ' . $email . '<br>';
    }else {
        echo $error_email . '<br>';
    }


    if ($error_password == ""){
        echo 'Mật khẩu hợp lệ: ' . $password . '<br>';
    }else {
        echo $error_password . '<br>';
    }
}
?>