<?php
  require 'utils.inc.php';
  start_page('base');
?>

<?php
  $dbLink = mysqli_connect('mysql-testbd.alwaysdata.net', 'testbd', 'Hermione2012$') or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
  mysqli_select_db($dbLink , 'testbd_user') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
  $query = 'SELECT * FROM user' ;
    if(!($dbResult = mysqli_query($dbLink, $query)))
       {
       echo 'Erreur de requête<br/>';
       // Affiche le type d'erreur.
       echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
       // Affiche la requête envoyée.
       echo 'Requête : ' . $query . '<br/>';
      exit();
  }
  while($dbRow = mysqli_fetch_assoc($dbResult))
  {
    #var_dump($dbRow);
    echo 'idNb : ' . $dbRow['id'] . '<br/>';
    echo 'login du compte : ' . $dbRow['login'] . '<br/>';
    echo 'email du compte : ' . $dbRow['email'] . '<br/>';
    echo 'date de création du compte : ' . date('d.m.Y', strtotime($dbRow['date'])) . '<br/>' ;
    echo 'pays : ' . $dbRow['pays'] . '<br/>';
    echo 'sexe : ' . $dbRow['sexe'] . '<br/>';
    echo 'numéro de téléphone : ' . $dbRow['telephone'] . '<br/>';
    echo 'mot de passe : ' . $dbRow['motdepasse'] . '<br/>';
    echo '<br/><br/>';
  }




?>









<?php
  end_page();
?>
