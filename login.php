<?php
  require 'utils.inc.php';
  start_page('Login');
  ficheCSS('login.css');
  session_start();
?>



<?php

  echo "<h2> Page de login </h2>" . '<br/>';
  echo '<h2>' . $_SESSION['error'] . '<br/>';


?>

<div>
  <br/>

<form class="formlogin" action="test-pass.php" method="POST" name="formulairedelogin">
  Identifiant : <input type="text" name="login"/><br/>
  Mot de passe  : <input type="password" name="motdepasse"/><br/>
  <input class="seconnecter" type="submit" name="action" value="Se connecter"/> <br/>
</form>

</div>

<?php
  end_page();
?>
