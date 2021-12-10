<?php
  require 'utils.inc.php';
  start_page('test-pass');
  $login = $_POST['login'];
  $password = $_POST['motdepasse'];
  session_start();
  $_SESSION['suid'] = session_id();
?>

<?php
  $dbLink = mysqli_connect('mysql-testbd.alwaysdata.net', 'testbd', 'Hermione2012$') or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
  mysqli_select_db($dbLink , 'testbd_user') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
  $query = "SELECT * FROM user WHERE login =  '" . $login . "' AND motdepasse =  '" . $password . "'";
  if(!($dbResult = mysqli_query($dbLink, $query)))
     {
       echo 'Erreur de requête<br/>';
       // Affiche le type d'erreur.
       echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
       // Affiche la requête envoyée.
       echo 'Requête : ' . $query . '<br/>';
      exit();
    }
  elseif ($dbRow = mysqli_fetch_assoc($dbResult))
    {
      header('Location: Bienvenue.php');
    }
  else
    {
      $_SESSION['error'] = 'Probleme';
      header('Location: login.php');
    }
?>







<?php
  end_page()
?>
