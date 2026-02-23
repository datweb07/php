<?php

/*
Parse error: lỗi cú pháp -> php không chạy được
Fatal error: lỗi nghiêm trọng
Warning: cảnh báo, code vẫn chạy được
Notice: nhắc nhở 
Exception (Exception error) --> dùng try-catch
*/

try{
    $age = -20;
    if ($age < 0){
        throw new Exception("Tuổi không thể âm");
    }
    echo 'Tuổi hợp lệ: ' . $age;
}
catch (Exception $e){
    echo 'Có lỗi: ' . $e -> getMessage();
};

?>