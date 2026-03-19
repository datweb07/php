<?php

require './model/User.php';
require './controller/User.php';

// namespace giúp tổ chức mã nguồn theo nhóm
// tránh xung đột tên class, function, const khi có sự trùng lặp.

use Model\User as UserModel;
use Controller\User as UserController;

$user1 = new UserModel();

?>