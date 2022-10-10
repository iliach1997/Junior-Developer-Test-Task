<?php

namespace Product\DbConnect;

use PDO;

// connection mysql 
class DbConnect
{
    public $pdo;

    private function connectDB($host, $dbname, $userName, $password)
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $userName, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function prepareQuery($query, $array)
    {
        $this->connectDB("localhost", "junior_developer", "root", "");

        $statement = $this->pdo->prepare($query);

        foreach ($array as $key => $value) {
            $val = $value != "" ? $value : null;
            $statement->bindValue($key, $val);
        }

        $statement->execute();
    }
}
