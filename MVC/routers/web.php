<?php

$router -> get('/users', 'UserController@index');

$router -> post('/users', 'UserController@index');

echo '<pre>';
print_r($router -> getRoute());
echo '<pre>';

?>