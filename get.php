<?php
// get là một phương thức gửi dữ liệu từ client (trình duyệt) lên server, thông qua URL (query string)
// $_GET


if (!empty($_GET)) {
    echo 'get';
    echo '<pre>';
    print_r($_GET);
    echo '<pre>';
}
?>

<form action="./result.php" method="GET">
    <input type="text" name="fullname" placeholder="Họ tên">
    <input type="password" name="password" placeholder="Mật khẩu">
    <button type="submit">Gửi</button>
</form>