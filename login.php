<?php
  require 'utils.inc.php';
  start_page('Login');
  session_start();
?>



<?php

  echo "Page de login" . '<br/>';
  echo $_SESSION['error'];
?>


<form action="test-pass.php" method="POST" name="formulairedelogin">
  Identifiant : <input type="text" name="login"/><br/>
  Mot de passe  : <input type="password" name="motdepasse"/><br/>
  <input type="submit" name="action" value="ok"/> <br/>
</form>

<?php
  end_page();
?>
