<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/pokeController.php';

switch($uri_parse)
{
    case '/pokemon':
        pokeController::index();
    break;

    case '/pokemon/form':
        pokeController::form();
    break;

    case '/pokemon/save':
        pokeController::save();
    break;

    case '/pokemon/delete':
        pokeController::delete();
    break;

    /*
        default:
        header("Location: /");
        break;
    */
    
    
    
    
}