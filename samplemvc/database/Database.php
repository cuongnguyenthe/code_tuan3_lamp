<?php

class Database
{
    private static $databasename = 'dtbduanphp';
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';

    private static $conn = null;

    function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // One connection through whole application
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";" . "dbname=" . self::$databasename, self::$username, self::$password);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

//Phương thức tĩnh disconnect() để huỷ kết nối. Việc hủy kết nối tức là gán cho biến chứa kết nối $conn giá trị là null;
    public static function disconnect()
    {
        self::$conn = null;
    }
}

?>