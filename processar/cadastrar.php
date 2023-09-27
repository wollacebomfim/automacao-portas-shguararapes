<?php 
session_start();
include("../conexao/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$login = mysqli_real_escape_string($conexao, trim($_POST['login']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$sql = "select count(*) as total from usuarios where usuarios = '$usuario'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
if($row['total'] >= 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../cadastro.php');
	exit;
}
$sql = "INSERT INTO usuarios VALUES (default, '$nome', '$login', '$senha', NOW())";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
$conexao->close();
header('Location: ../cadastrou.php');
exit;
?>





