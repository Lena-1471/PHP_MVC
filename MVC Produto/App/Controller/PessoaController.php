<?php

namespace App\Controller;
use App\Model\PessoaModel;

class PessoaController
{//método index para devolver uma view
    public static function index()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();


        include VIEWS . 'Pessoa/ListaPessoa.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();

        if(isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);

      // var_dump($model);

        include VIEWS . 'Pessoa/FormPessoa.php';


    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {
      
       include 'Model/PessoaModel.php';
       
       //instancia da model
       $model = new PessoaModel();
       
       $model->id = $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cpf = $_POST['cpf'];
       $model->data_nasc = $_POST['data_nasc'];
      
       $model->save();


       header("Location: /pessoa");

    }

    public static function delete()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->delete((int)$_GET['id']);


        header("Location: /pessoa");//manda o usuário para outra rota


    }

}