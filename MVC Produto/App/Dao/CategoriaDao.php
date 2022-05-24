<?php

class CategoriaDAO
{
    private $conexao;
//metodo construtor
    public function __construct()
    {
         // Criando a conexão
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    public function insert(CategoriaModel $model)
    {
        //trecho sql com ? para substituições posteriores
        $sql = "INSERT INTO Categoria(Categoria, Descricao) VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Categoria);
        $stmt->bindValue(2, $model->Descricao);




        $stmt->execute();

    }

    public function update(CategoriaModel $model)
    {



    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();


       

    }


    public function select()
    {
        $sql = "SELECT * FROM Categoria";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }




}