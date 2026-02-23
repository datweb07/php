<?php
/*
session (phiên làm việc): là nơi lưu trữ thông tin trên server, cho mỗi người dùng

Khác với cookie (lưu trữ trên trình duyệt), session an toàn hơn vì người dùng không truy cập trực tiếp được
*/

session_start();        // bắt buộc có

// $_SESSION['dat'] = 'Học PHP';   // tạo session có tên là dat
unset($_SESSION['dat']);
if (isset($_SESSION['dat'])) {
    echo $_SESSION['dat'];
}


?>