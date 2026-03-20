<?php
echo 'database';
require_once 'configs/config.php';

class Database
{
    private static $conn;
    public static function connectPDO()
    {
        try {
            if (class_exists('PDO')) {
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // sử dụng tiếng việt
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,              // đẩy ngoại lệ vào exception
                );
                $dsn = _DRIVER . ':host=' . _HOST . '; dbname=' . _DB;
                self::$conn = new PDO($dsn, _USER, _PASS, $options);
                echo "Successful database connection" . '<br>';


            }
        } catch (Exception $ex) {
            // echo 'Lỗi kết nối: ' . $ex->getMessage();
            require_once './modules/errors/404.php';
            die();
        }

        return self::$conn;
    }
}

?>