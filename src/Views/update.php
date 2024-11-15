

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
     <div class="card">
        <div class='card-header'>Modifier un employe</div>
      <div class="card-body bg-light">

     <a href="" class="btn btn-sm btn-secondary mt-4 mb-2 mr-2"> 
    <i class="fas fa-home"></i>
    
     </a>
         <form action="" method="POST">
         <input type="hidden" name="id" value="<?php echo $id;?>">

          <div class="form-group">
            <label for="nom">Nom</label>
            <input type='text' name='nom' class='form-control'  
             placeholder='nom' value="<?php echo $Stagiaire->nom;?>"></input>
          </div>
          <div class="form-group">
            <label for="prenom">prenom</label>
            <input type='text' name='prenom' class='form-control'
             value="<?php echo $Stagiaire->prenom;?>" placeholder='prenom'></input>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type='text' name='age' class='form-control' 
            value="<?php echo $Stagiaire->age;?>" placeholder='age'></input>
          </div>
          <div class="form-group">
            <label for="login">Login</label>
            <input type='text' name='login' class='form-control' 
            value="<?php echo $Stagiaire->login;?>" placeholder='login'></input>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type='text' name='password' class='form-control'
             value="<?php echo $Stagiaire->password;?>" placeholder='password'></input>
          </div>

          <div class="form-group">
          <button type='submit' name='submit' class='btn btn-primary mt-4'>Valider</button>
         </div>

         </form>


     </div>
    </div>
  </div>
 </div>
 </div>
