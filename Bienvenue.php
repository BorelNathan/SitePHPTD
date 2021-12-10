<?php
  require 'utils.inc.php';
  start_page('Bienvenue');
  session_start();
  if(!isset($_SESSION['suid']))
  {
    die('Erreur d\'authentification');
  }
  else
  {


?>

<h1>CRINGE</h1>


<?php } ?>


<?php
  end_page();
?>
