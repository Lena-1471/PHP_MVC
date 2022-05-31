<?php

 class CategoriaController
{//método index para devolver uma view
    public static function index()
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();
        $model->getAllRows();


        include 'View/modulos/Categoria/ListaCategoria.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {
        include 'Model/CategoriaModel.php';
        $model = new CategoriaModel();

        if(isset($_GET['id']))
        $model = $model->getById((int)$_GET['id']);


        include 'View/modulos/Categoria/FormCategoria.php';


    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {
      
       include 'Model/CategoriaModel.php';

       $model = new CategoriaModel();
       
       $model->id = $_POST['id'];
       $model->Categoria = $_POST['Categoria'];
       $model->Descricao = $_POST['Descricao'];

      
       $model->save();


       header("Location: /categoria");

    }

}