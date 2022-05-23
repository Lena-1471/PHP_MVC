<?php

class PessoaController
{//método index para devolver uma view
    public static function index()
    {
        include 'View/modulos/Pessoa/ListaPessoa.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {

        include 'View/modulos/Pessoa/FormPessoa.php';


    }


    //preenche uma model para mandar pro banco de dados
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