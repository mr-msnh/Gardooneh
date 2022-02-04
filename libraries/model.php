<?php
class Model
{
    protected $connection;

    public function __construct()
    {
        try
        {
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
            $this->connection = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        }
        catch(PDOException $erro)
        {
            echo "connection lost";
            exit();
        }
    }
}