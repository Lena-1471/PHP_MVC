<?php

class PessoaDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }

    public function insert(PessoaModel $model)
    {

        $sql = "INSERT INTO pessoa(nome, cpf, data_nasc) VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nasc);

        $stmt->execute();

    }

    public function update(PessoaModel $model)
    {



    }


    public function select()
    {



    }




}