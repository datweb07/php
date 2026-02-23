<?php

/*
Y: năm đầy đủ (2026)
y: năm viết tắt (26)
m: tháng
d: ngày
H: giờ
i: phút
s: giây

date_default_timezone_set()
Asia/Ho_Chi_Minh (Việt Nam)
UTC
America/New_York


*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date('Y:m:d H:i:s') . '<br>';

echo time() . '<br>';            // giá trị timestamp (số giây tính từ 0h0'0s 01/01/1970)

$strtime = strtotime("next monday");
echo date('Y:m:d H:i:s', $strtime) . '<br>';
?>