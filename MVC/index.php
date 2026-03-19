<?php

require_once 'configs/config.php';
require_once 'configs/database.php';
require_once 'app/Models/CoreModel.php';
require_once 'app/Models/Users.php';
require_once 'app/Models/Groups.php';

$user = new User();

echo '<pre>';
print_r($user -> getAllUsers());
echo '<pre>';


$data = [
    'fullname' => 'oke',
    'email' => 'oke123@gmail.com',
    'phone' => '123456789',
    'address' => 'VN'
];

$group = new Group();

echo '<pre>';
print_r($group -> getAllGroups());
echo '<pre>';

?>