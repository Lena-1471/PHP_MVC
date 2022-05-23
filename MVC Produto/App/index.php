<?php

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
       echo "página inicial";
    break;    

    case '/pessoa':
        PessoaController::index();
    break;
    
    case '/pessoa/form':
        PessoaController::form();
    break;
    
    case '/pessoa/form/save':
        PessoaController::save();
        break;

   default:
   echo "erro 404 :(";
   break;
}

switch($url)
{
    case '/':
       echo "página inicial";
    break;    

    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
    break;
    
    case '/produto/form/save':
        ProdutoController::save();
        break;

   default:
   echo "erro 404 :(";
   break;
}
