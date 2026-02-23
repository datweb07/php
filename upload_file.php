<?php
/*
input type = file (form)
$_FILE
*/


?>

<form action="./result_uploadFile.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>