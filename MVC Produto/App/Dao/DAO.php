<?php

namespace App\Dao;

use \PDO;

class Dao {

    protected $conexao;


    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
}

