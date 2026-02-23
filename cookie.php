<?php

/*
Cookie là một tập tin nhỏ được lưu trữ trên máy người dùng, giúp ghi lại dữ liệu giữa các lần truy cập vào trình duyệt

setcookie(name, value, expire, path, domain, secure, httponly);
name: Tên của cookie
value: Giá trị của cookie
expire: thời điểm hết hạn (cookie mất)
path: đường dẫn áp dụng cookie
domain: tên miền mà áp dụng cookie
secure: true -> gửi cookie bằng https method
httponly: ngăn chặn js và tăng cường bảo mật


*/


// setcookie('dat', '99', time() + 2000);

if (isset($_COOKIE)){
    echo '<pre>';
    print_r($_COOKIE);
    echo '<pre>';
}
?>