<?php
// eu te amo
spl_autoload_register(function($ClasseChamada){

    $classe_controller = 'Controller/' . $ClasseChamada . '.php';
    $classe_model = 'Model/' . $ClasseChamada . '.php';
    $classe_dao = 'Dao/' . $ClasseChamada . '.php';

    if(file_exists($classe_controller)){
    
        include $classe_controller;
        
    }
        else if(file_exists($classe_model)){
        
            include $classe_model;
    
        }
    
        else if(file_exists($classe_dao)){
         
            include $classe_dao;
    
        }
    
    });
    
    ?>

