<?php

class PessoaDAO
{
    private $conexao;
//metodo construtor
    public function __construct()
    {
         // Criando a conexão
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    public function insert(PessoaModel $model)
    {
        //trecho sql com ? para substituições posteriores
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
        $sql = "SELECT * FROM pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pessoa WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();


       

    }


}