<?php

class PessoaController
{
    public static function index()
    {
        include 'View/modulos/Pessoa/ListaPessoa.php';

    }
    
    public static function form()
    {

        include 'View/modulos/Pessoa/FormPessoa.php';


    }

    public static function save()
    {
      
       include 'Model/PessoaModel.php';

       $model = new PessoaModel();
       
       $model->nome = $_POST['nome'];
       $model->cpf = $_POST['cpf'];
       $model->data_nasc = $_POST['data_nasc'];
      
       $model->save();


       header("Location: /pessoa");

    }

}