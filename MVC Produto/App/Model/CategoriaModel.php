<?php

class CategoriaModel
{
    public $id, $Categoria, $Descrição;

    public $rows;

    public function save()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $dao->insert($this);

    }

    public function getAllRows()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $this->rows = $dao->select();


    }

    public function getById(int $id)
    {

        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        return $dao->selectById($id);
    }
}