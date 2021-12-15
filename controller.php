<?php
  // Vérifie qu'il provient d'un formulaire
  require_once '_connec.php';
    
    $name = $_POST["name"]; 
    $firstname = $_POST["firstname"];
    if (!isset($name)){
      die("entrez votre nom");
    }
    if (!isset($firstname) || !filter_var($firstname)){
      die("entrez votre prenom");
    }  
    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ss', $name, $email); 
    
    if($statement->execute()){
      print "Salut " . $name . "!, votre adresse e-mail est ". $email;
    }else{
      print $mysqli->error; 
    }
  