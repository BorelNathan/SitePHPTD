<?php
  require 'utils.inc.php';
  start_page('Erreur de login');
?>

<?php
  $_SESSION['error'] = 'probeme';
  header('Location: login.php');

?>

<?php
  end_page();
?>
