<?php
include_once '../conexao/conexao.php';
session_start();
unset($_SESSION['logado']);
header('Location: ../index.php');
exit();
session_destroy();
?>