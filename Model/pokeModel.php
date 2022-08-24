<?php

class pokeModel
{
    
    public $id, $nome, $sexo, $natureza, $habilidades_add, $alimentacao ;

    public $rows;

   
    public function save()
    {
        include 'DAO/pokeDAO.php';

        $dao = new pokeDAO();

        
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }

    }

    public function getAllRows()
    {
        include 'DAO/pokeDAO.php'; 
        
        $dao = new pokeDAO();

        
        $this->rows = $dao->select();

        
    }


    
    public function getById(int $id)
    {
        include 'DAO/pokeDAO.php'; 

        $dao = new pokeDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new pokeModel(); 

        
    }


   
    public function delete(int $id)
    {
        include 'DAO/pokeDAO.php'; 

        $dao = new pokeDAO();

        $dao->delete($id);
    }
}