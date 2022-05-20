<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
       echo "página inicial";
    break;    

    case '/pessoa':
        PessoaConttoller::index();
    break;
    
    case '/pessoa/form':
        PessoaConttoller::form();
    break;
    
    

   default:
   echo "erro 404 :(";
   break;
}

