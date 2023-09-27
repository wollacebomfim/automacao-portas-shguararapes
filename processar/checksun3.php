<?php
include_once '../conexao/conexao.php';
session_start();
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($sock,"10.0.0.100", 8080);
if($_POST['estado']=="Fechou")
{
    socket_write($sock, "5");
}
if ($_POST['estado']=="Abriu")
{
    socket_write($sock, "6");
}


$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);

$id = $dados['id'];
$nome = $dados['nome'];
$usuario = $dados['usuario'];
$porta = 3;
$estado = $_POST['estado'];

$sql = $conexao->query("INSERT INTO aberturas VALUES(default, '$id', '$nome', '$usuario', '$porta', '$estado', NOW())");
mysqli_close($conexao);



header("Location: ../portas.php");

socket_close($sock);





?>