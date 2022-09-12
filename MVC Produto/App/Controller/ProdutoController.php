<?php

namespace App\Controller;
use App\Model\ProdutoModel;

class ProdutoController extends Controller
{//método index para devolver uma view
    public static function index()
    {
        
        $model = new ProdutoModel();
        $model->getAllRows();


        parent::render ('Produto/Lista', $model);
    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {

        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);


            parent::render ('Produto/Lista', $model);

    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {
      
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

        $model = new ProdutoModel();

        $model->delete((int)$_GET['id']);


        header("Location: /produto");//manda o usuário para outra rota


        
    }

}