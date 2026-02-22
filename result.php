<?php

if (!empty($_GET)){
    echo $_GET['fullname'];
    echo '<pre>';
    print_r($_GET);
    echo '<pre>';
}
?>