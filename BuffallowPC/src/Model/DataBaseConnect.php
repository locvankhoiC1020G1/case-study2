<?php
namespace App\Model;
use mysql_xdevapi\Exception;
use PDO;

class DataBaseConnect
{
protected $dsn;
protected $user;
protected $password;
public function __construct()
{
    $this->dsn ="mysql:host=localhost;dbname=classicmodels";
    $this->user ="root";
    $this->password = "12345678";
}

    public function connect()
    {
        try {
            return new PDO($this->dsn,$this->user,$this->password);
        }
        catch (Exception $exception){
            echo "máy chủ bảo trì";
            exit();
        }
}
}