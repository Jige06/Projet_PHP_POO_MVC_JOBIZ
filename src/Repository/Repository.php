<?php

namespace App\Repository;
use App\Db\Mysql;

class Repository // class parent pour que les repository enfants heritent de cette classe
{
    protected \PDO $pdo; // protected donc accessible par tous les enfants

    public function __construct()
    {
        $mysql = Mysql::getInstance();
        $this->pdo = $mysql->getPDO();
    }
}