<?php

?>

<style>
    body{
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 50%;
    }

    form input{
        margin-bottom: 8px;
    }
</style>

<form action="./result.php" method="POST">
    <input type="text" name="fullname" placeholder="Họ tên">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mật khẩu">
    <button type="submit">Đăng ký</button>
</form>