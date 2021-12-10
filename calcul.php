<?php require("utils.inc.php");
 start_page('calcul');
 $op1 = $_GET['number1'];
 $op2 = $_GET['number2'];
 $op = $_GET['op'];
 $res = 0;
 switch ($op) {
   case '+':
     $res = $op1 + $op2;
     echo $res;
     break;

   case '-':
     $res = $op1 - $op2;
     echo $res;
     break;

   case '*':
     $res = $op1 * $op2;
     echo $res;
     break;

   case '/':
     $res = $op1 / $op2;
     echo $res;
     break;

   default:
     echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
     break;

 };


  ?>





















  <?php
    end_page();
  ?>
