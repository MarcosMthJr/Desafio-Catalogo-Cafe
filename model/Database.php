<?php


class Database
{
    private $connection;

    public function __construct()
    {
        $file = __DIR__ . "/../database_config.ini";

        $config = parse_ini_file($file,true);

        extract($config["database"]);

        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ];

        $this->connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password,$options);

    }

    public function getConnection()
    {
        return $this->connection;
    }


}