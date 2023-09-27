<?php
session_start();
require_once '../conexao/conexao.php';


$id = $_SESSION['id'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";


$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));



$queryInser = $conexao->query("UPDATE usuarios SET senha='$senha' WHERE id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: ../usuarios.php");
endif;

mysqli_close($conexao);