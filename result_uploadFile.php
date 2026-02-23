<?php
// echo '<pre>';
// print_r($_FILES);
// echo '<pre>';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file'];
    $fileName = uniqid() . $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileError = $file['error'];

    if ($fileError === 0) {
        $targetDir = "uploads/";        // địa chỉ lưu ảnh upload

        // di chuyển ảnh vào thư mục upload
        if (move_uploaded_file($fileTmp, $targetDir . $fileName)) {
            echo 'Upload ảnh thành công';
        } else {
            echo 'Upload ảnh không thành công';
        }
    } else {
        echo 'Lỗi upload';
    }
}

?>