<?php

// config/routes.php
//$router->map('GET', '/', 'HomeController@showHomePage');

$router->map('GET', '/', 'StagiaireController@showAllStagiaires');

// Route pour Ajouter un stagiaire
//$router->map('GET', '/add', ['App\Controllers\StagiaireController', 'showAddForm']);
$router->map('GET', '/add', 'StagiaireController@showAddForm');

//$router->map("POST", "/add", ['App\Controllers\StagiaireController', 'addStagiaire']);
$router->map('POST', '/add', 'StagiaireController@addStagiaire');

// Routes pour mettre à jour un stagiaire

$router->map('GET', '/update/[i:id]', 'StagiaireController@showUpdateForm');
$router->map('POST', '/update/[i:id]', 'StagiaireController@updateStagiaire');

// Route pour supprimer un stagiaire
$router->map('GET', '/delete/[i:id]', 'StagiaireController@deleteStagiaire');



/*$router->map('GET', '/update/[i:id]', ['App\Controllers\StagiaireController', 'showUpdateForm']);
$router->map('GET', '/update/[i:id]', ['App\Controllers\StagiaireController', 'getSelectedStagiaire']);
$router->map('POST', '/update/[i:id]', ['App\Controllers\StagiaireController', 'updateStagiaire']);
*/

//$router->map('GET', '/delete/[i:id]', ['App\Controllers\StagiaireController', 'deleteStagiaire']);


