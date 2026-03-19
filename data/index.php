<?php

require_once 'User.php';

$user1 = new User();
$res = $user1->getAll();

echo '<pre>';
print_r($res);
echo '<pre>';


$data = [
    'fullname' => 'Test',
    'email' => 'test@gmail.com',
    'phone' => '123456789',
    'address' => 'VN'
];

// $resIns = $user1->insert($data);
// echo '<pre>';
// print_r($resIns);
// echo '<pre>';
?>