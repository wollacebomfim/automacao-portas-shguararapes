<?php
  if(!isset($_SESSION['logado'])):
    header('Location: ../index.php');
  endif;
  if($_SESSION['logado']){
    $segundos = time() - $_SESSION['logado'];
  }
  if( $segundos > $_SESSION['limite']){
    unset($_SESSION['logado']);
    unset($_SESSION['limite']);

    
  }else{
   $_SESSION['logado'] = time();
  }
  ?>
