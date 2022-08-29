<?php

namespace App\Controller;
use App\Model\ProdutoModel;

class ProdutoController
{//método index para devolver uma view
    public static function index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();


        include VIEWS . 'Produto/ListaProduto.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {
                include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);


        include VIEWS . 'Produto/FormProduto.php';


    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {
      
       include 'Model/ProdutoModel.php';

       $model = new ProdutoModel();

       $model->id = $_POST['id'];
       $model->Produto = $_POST['Produto'];
       $model->Estoque = $_POST['Estoque'];
       $model->Preco = $_POST['Preco'];
       $model->ID_categoria = $_POST['ID_categoria'];

      
       $model->save();


       header("Location: /produto");

    }
    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        $model->delete((int)$_GET['id']);


        header("Location: /produto");//manda o usuário para outra rota


        
    }

}