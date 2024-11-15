
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
     <div class="card">
        <div class='card-header'>Afficher les stagiaires</div>
      <div class="card-body bg-light">
 <a href="/stagiaire-testing/public/add" class="btn btn-sm btn-primary mt-4 mb-2 mr-2"> <i class="fas fa-plus"></i></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">login</th>
      <th scope="col">password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Stagiaires as $stagiaire):?>
    <tr>
      <th scope="row"><?php echo $stagiaire['id']; ?></th>
      <td><?php echo $stagiaire['nom'] ;?></td>
      <td><?php echo $stagiaire['prenom']; ?></td>
      <td><?php echo $stagiaire['age']; ?></td>
      <td><?php echo $stagiaire['login']; ?></td>
      <td><?php echo $stagiaire['password']; ?></td>
    
      <td>
       <a href="/stagiaire-testing/public/update/<?php echo $stagiaire['id']; ?>" class="btn btn-sm btn-warning"> <i class='fa fa-edit'></i></a>
        <a href="/stagiaire-testing/public/delete/<?php  echo $stagiaire['id'];?>" class="btn btn-sm btn-danger"><i class='fa fa-trash'></i></a>
      </td>
      
    </tr>
   <?php endforeach;?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>