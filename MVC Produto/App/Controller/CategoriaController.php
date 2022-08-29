<?php

namespace App\Controller;
use App\Model\CategoriaModel;


 class CategoriaController
{//método index para devolver uma view

    
    public static function index()
    {
        $model = new CategoriaModel();
        $model->getAllRows();


        include VIEWS . 'Categoria/ListaCategoria.php';

    }
    
    //devolve um formulário para o usuário   
    public static function form()
    {
        
        $model = new CategoriaModel();

        if(isset($_GET['id']))
        $model = $model->getById((int)$_GET['id']);


        include VIEWS . 'Categoria/FormCategoria.php';


    }


    //preenche uma model para mandar pro banco de dados
    public static function save()
    {    
        
       $model = new CategoriaModel();
       
       $model->id = $_POST['id'];
       $model->Categoria = $_POST['Categoria'];
       $model->Descricao = $_POST['Descricao'];

      
       $model->save();


       header("Location: /categoria");

    }
    public static function delete()
    {

        $model = new CategoriaModel();

        $model->delete((int)$_GET['id']);


        header("Location: /categoria");
           
    }

}