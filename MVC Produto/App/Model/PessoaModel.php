<?php

namespace App\Model;
use App\dao\PessoaDAO;

class PessoaModel
{
    public $id, $nome, $cpf, $data_nasc;

    public $rows;

    public function save()
    {
       
        //conexão no bd via construtor
        $dao = new PessoaDAO();


        if(empty($this->id))
        {//chama o insert 
            //recebe o  objeto da model já preenchido
            $dao->insert($this);
        }else{

            $dao->update($this);

        }
       
    }

    public function getAllRows()
    {

        //conexão via construtor
        $dao = new PessoaDAO();

        
        $this->rows = $dao->select();


    }


    public function getById(int $id)
    {

        $dao = new PessoaDAO();

        $obj =  $dao->selectById($id);

        return ($obj) ? $obj : new PessoaModel;
        /*if($obj)
        {
            return $obj;
        }else{
            return new PessoaModel();
        }*/
    }

    public function delete(int $id)
    {
        
        $dao = new PessoaDAO();

        $dao->delete($id);

    }
}




