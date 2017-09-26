<?php
require_once(__DIR__ . '../connection.php');
require_once('../controleur/espace/index.php');


function insert($pseudo,$mdp,$mail){

  $req=connection()->prepare("INSERT INTO membre (pseudo,pass,email) VALUES(:pseudo, :pass, :email)");
    $req->execute(array(
      ':pseudo' =>htmlspecialchars($pseudo),
      ':pass' =>htmlspecialchars($mdp),
      ':email' =>htmlspecialchars($mail)
    ));


}
echo "gg";
