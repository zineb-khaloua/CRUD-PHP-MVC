<?php

namespace App\Models;
use PDO;
use PDOException;

class Stagiaire{

    protected $db;
    // Le constructeur reçoit la connexion DB
    public function __construct($db) {
        if (!$db) {
            throw new \Exception("Database connection is null.");
        }
        $this->db = $db;
    }

    public function getAll(){
        $stmt=$this->db->prepare('SELECT * FROM stagiaire');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }
    public function getStagiaire($id) {
        //$id = $data['id'];
        //error_log('Fetching stagiaire with ID: ' . $id); // Log the ID
    
        try {
            
            $stmt = $this->db->prepare('SELECT * FROM stagiaire WHERE id = :id');
            $stmt->execute(array(":id" => $id));
            $stagiaire = $stmt->fetch(PDO::FETCH_OBJ);
    
            // Log the result for debugging
            if ($stagiaire) {
                error_log('Stagiaire found: ' . print_r($stagiaire, true));
            } else {
                error_log('No stagiaire found with ID: ' . $id);
            }
    
            return $stagiaire;
    
        } catch (PDOException $e) {
            error_log('Database error: ' . $e->getMessage());
            return null;
        }
    }
    


    public function add($data){
       
        $stmt=$this->db->prepare('INSERT INTO  stagiaire(nom,prenom,age,login,password)
                             VALUES(:nom,:prenom,:age,:login,:password)');
        
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':age',$data['age']);
        $stmt->bindParam(':login',$data['login']);
        $stmt->bindParam(':password',$data['password']);
        if( $stmt->execute()){
            return 'ok';
        }
        else{ 
            return 'error';
        }
       


    }
    public function update($data){
    
        $stmt=$this->db->prepare('UPDATE stagiaire SET 
        nom=:nom,prenom=:prenom,age=:age,login=:login,password=:password WHERE id=:id');
                             
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':age',$data['age']);
        $stmt->bindParam(':login',$data['login']);
        $stmt->bindParam(':password',$data['password']);
        if( $stmt->execute()){
            return 'ok';
        }
        else{ 
            return 'error';
        }
    }

    public function delete($id) {
       
    
        try {
          
            // Prepare the DELETE query
            $stmt =$this->db->prepare('DELETE FROM stagiaire WHERE id = :id');
            
            // Execute the query with the given ID
            $stmt->execute(array(":id" => $id));
    
            // Check if the deletion was successful
            if ($stmt->rowCount() > 0) {
                return 'ok'; // Successfully deleted
            } else {
                return 'No stagiaire found with the given ID.';
            }
    
        } catch (PDOException $e) {
            // Handle any database errors
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }
    
    
}
?>