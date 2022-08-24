<?php

class pokeDAO
{
   
    private $conexao;


    
    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


   
    function insert(pokeModel $model) 
    {
        
        $sql = "INSERT INTO pokemon 
                (nome, sexo, natureza, habilidades_add, alimentacao ) 
                VALUES (?, ?, ?, ?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sexo);
        $stmt->bindValue(3, $model->natureza);
        $stmt->bindValue(4, $model->habilidades_add);
        $stmt->bindValue(5, $model->alimentacao);
        
       
        $stmt->execute();      
    }
    public function update(pokeModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, sexo=?, natureza=?, habilidades_add=?, alimentacao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sexo);
        $stmt->bindValue(3, $model->natureza);
        $stmt->bindValue(4, $model->habilidades_add);
        $stmt->bindValue(5, $model->alimentacao);
        $stmt->bindValue(6, $model->id);

        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM pokemon ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/pokeModel.php';

        $sql = "SELECT * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("pokeModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemon WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}
