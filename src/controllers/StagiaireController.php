<?php 

namespace App\Controllers;
use App\Models\Stagiaire;

class StagiaireController{

    protected $db;

   // Dependency injection via the constructor
    public function __construct($db) {
        if (!$db) {
            throw new \Exception("Database connection is null.");
        }
        $this->db = $db;
    }
    

    public function showAllStagiaires() {
    // Create an instance of the Stagiaire model
    $stagiaireModel = new Stagiaire($this->db);
    
    // Call the getAll method to retrieve all stagiaires
    $Stagiaires = $stagiaireModel->getAll();
    
    // Pass the stagiaires to the view using an array
    require_once VIEWS . 'home.php';

    }


  
   
    public function showAddForm() {
        require_once VIEWS . 'add.php'; 
    }

    public function addStagiaire () {
            // If the form has been submitted, process the data
        if (isset($_POST['submit'])) {
            // Retrieve the data sent by the form
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'age' => $_POST['age'],
                'login' => $_POST['login'],
                'password' => $_POST['password']
            );
    
             // Create an instance of the Stagiaire model
            $stagiaireModel = new Stagiaire($this->db);
    
            // Call the method to add a stagiaire
            $stagiaires = $stagiaireModel->add($data);
    
           // Check if the addition was successful
            if ($stagiaires === 'ok') {
                   // If the addition is successful, redirect to the home page
                header('Location:/stagiaire-testing/public/');
                exit; // Always call `exit` after a redirection
            } else {
                // Otherwise, display the error
                echo $stagiaires;
            }
        } 
    }
    


 public function showUpdateForm($id) {
        // Create an instance of the Stagiaire model
        $stagiaireModel = new Stagiaire($this->db);
        // Use the getSelectedStagiaire method to retrieve the stagiaire
        $Stagiaire = $stagiaireModel->getStagiaire($id);
    
        // Pass the stagiaire to the view
        require_once VIEWS . 'update.php';
    }



public function updateStagiaire($id) {
    if (isset($_POST['submit'])) {
       
        $data = [
            'id' => $id,
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'age' => $_POST['age'],
            'login' => $_POST['login'],
            'password' => $_POST['password']
        ];

        // Create an instance of the Stagiaire model
           $stagiaireModel = new Stagiaire($this->db);
       // Call the method to update a stagiaire
           $stagiaires = $stagiaireModel->update($data);

        if ($stagiaires === 'ok') {
          
            header('Location:/stagiaire-testing/public/');
            
        } else {
            echo $stagiaires;
        }
    }
}


    public function deleteStagiaire($id) {
         
    
         // Create an instance of the Stagiaire model
           $stagiaireModel = new Stagiaire($this->db);
        // Call the method to update a stagiaire
           $stagiaires = $stagiaireModel->delete($id);
     
        if ($stagiaires === 'ok') {
            header('Location:/stagiaire-testing/public/');;
        } else {
            echo $stagiaires;  
        }
    }


}

?>