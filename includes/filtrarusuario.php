<?php
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM usuarios WHERE id='$id'");

  while($registros = $querySelect->fetch_assoc()):

 
  $nome = $registros['nome'];
  $usuario = $registros['usuario'];
  endwhile;
?>