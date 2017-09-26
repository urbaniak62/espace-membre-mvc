<?php
function connection(){
  try {
    $bdd= new PDO("mysql:host=localhost;dbname=espace-membre;charset=utf8",'root','chniak24dec78-');
  }
   catch (Exception $e)
    {
    die('Erreur : '.$e->getMessage());
  }
  return $bdd;
}
