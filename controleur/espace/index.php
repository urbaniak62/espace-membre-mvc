<?php
require_once("../../models/espace/data.php");


/*------------confirmation-présence-des variable---------------*/

if (isset($_POST['pseudo']) && isset($_POST['pass'])
&&isset($_POST['confirmpass'])&&isset($_POST['mail'])) {
  $pseudo=$_POST['pseudo'];
  $pass=$_POST['pass'];
  $confirmpass=$_POST['confirmpass'];
  $mail=$_POST['mail'];

  /*----------cryptage-des-mots-de-pass-----------*/
$pass=sha1($pass);
$confirmpass=sha1($confirmpass);

if ($pass===$confirmpass) {
  insert($pseudo,$pass,$mail);

echo "yyyy";
}
else {
  echo "pas good";
}
}

  require_once('../../vues/espace/indexvue.php');

// if (isset($_POST['pseudo']) && isset($_POST['pass']){
//   $pseudo=$_POST['pseudo'];
//   $pass=$_POST['pass'];
//   $pass=sha1($pass);
//
//
// }
 ?>
