<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:40
 */

namespace App\Core;


use Bootstrap\Bootstrap;

class DB
{
    private $conn;

    public function __construct()
    {
        $this->setConnection();
    }

    public static function getConnection()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new self();
        }
        return $inst->conn;
    }

    private function setConnection()
    {
        $data = Bootstrap::getConfig()['database'];

        try{
            $this->conn = new \PDO('mysql:host=' . $data['host'] . ';dbname=' . $data['dbname'], $data['user'], $data['password'], $data['options']);
        }catch (\PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}
