<?php

class ProdutoController
{//método index para devolver uma view
    public static function index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();


        include 'View/modulos/Produto/ListaProduto.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {

        include 'View/modulos/Produto/FormProduto.php';


    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {
      
       include 'Model/ProdutoModel.php';

       $model = new ProdutoModel();
       
       $model->Produto = $_POST['Produto'];
       $model->Estoque = $_POST['Estoque'];
       $model->Preco = $_POST['Preco'];
       $model->ID_categoria = $_POST['ID_categoria'];

      
       $model->save();


       header("Location: /produto");

    }

}