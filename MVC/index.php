<?php

foreach (glob(__DIR__ . '/configs/*.php') as $filename){
    require_once $filename;
}

foreach (glob(__DIR__ . '/core/*.php') as $filename){
    require_once $filename;
}

foreach (glob(__DIR__ . '/app/Models/*.php') as $filename){
    require_once $filename;
}

foreach (glob(__DIR__ . '/app/Controllers/*.php') as $filename){
    require_once $filename;
}

$router = new Router();

foreach (glob(__DIR__ . '/routers/*.php') as $filename){
    require_once $filename;
}


$projectName = '/hoc_php/MVC';

$requestUrl = str_replace($projectName, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$methodRes = $_SERVER['REQUEST_METHOD'];

$router -> path($methodRes, $requestUrl);








// $user = new UsersController();
// $user -> index();

// $user = new User();

// echo '<pre>';
// print_r($user -> getAllUsers());
// echo '<pre>';


// $data = [
//     'fullname' => 'oke',
//     'email' => 'oke123@gmail.com',
//     'phone' => '123456789',
//     'address' => 'VN'
// ];

// $group = new Group();

// echo '<pre>';
// print_r($group -> getAllGroups());
// echo '<pre>';

?>