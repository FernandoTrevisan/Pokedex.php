<?php


class pokeController 
{
    
    public static function index() 
    {
        include 'Model/pokeModel.php';
        
        $model = new pokeModel(); 
        $model->getAllRows();
       
       
       
        include 'View/modules/ListaPokemon.php';

    }



   
    public static function form()
    {
        
        include 'Model/pokeModel.php'; 
        $model = new pokeModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
        
        
        
        
        include 'View/modules/FormPokemon.php';
    }

    
    public static function save() {

        include 'Model/pokeModel.php'; 

        
        $model = new pokeModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->sexo = $_POST['sexo'];
        $model->natureza = $_POST['natureza'];
        $model->habilidades_add = $_POST['habilidades_add'];
        $model->alimentacao = $_POST['alimentacao'];

       
        $model->save();  

    
        header("Location: /pokemon"); 

  
    }

    public static function delete()
    {
        include 'Model/pokeModel.php'; 

        $model = new pokeModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /pokemon"); 
    }

}