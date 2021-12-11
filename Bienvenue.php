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
<style>
h1 {color:green;}
</style>
<h1>Bienvenue</h1>

<p> Vous etes connecté au site avec succes

<?php } ?>


<?php
  end_page();
?>
