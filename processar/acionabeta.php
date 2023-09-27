<?php
include_once '../conexao/conexao.php';
session_start();


$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($sock,"10.0.0.100", 80);


//Inicia o soquete .
if($_POST['estado']=="Desceu")
{
    socket_write($sock, "1");
    

    
    //Pega os dados do usuário.
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
    //insere os dados do usuário no banco para fins de segurança.
    $id = $dados['id'];
    $nome = $dados['nome'];
    $usuario = $dados['usuario'];
    $porta = 1;
    $estado = $_POST['estado'];
    
    $sql = $conexao->query("INSERT INTO aberturas VALUES(default, '$id', '$nome', '$usuario', '$porta', '$estado', NOW())");
    mysqli_close($conexao);
    
    header("Location: ../portas/porta_beta.php");

}




//Inicia o soquete .
if($_POST['estado']=="Parou")
{
    socket_write($sock, "2");

    
//Pega os dados do usuário.
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
//insere os dados do usuário no banco para fins de segurança.
$id = $dados['id'];
$nome = $dados['nome'];
$usuario = $dados['usuario'];
$porta = 1;
$estado = $_POST['estado'];

$sql = $conexao->query("INSERT INTO aberturas VALUES(default, '$id', '$nome', '$usuario', '$porta', '$estado', NOW())");
mysqli_close($conexao);



header("Location: ../portas/porta_beta.php");
}





//Inicia o soquete .
if($_POST['estado']=="Subiu")
{
    socket_write($sock, "3");

    
//Pega os dados do usuário.
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
//insere os dados do usuário no banco para fins de segurança.
$id = $dados['id'];
$nome = $dados['nome'];
$usuario = $dados['usuario'];
$porta = 1;
$estado = $_POST['estado'];

$sql = $conexao->query("INSERT INTO aberturas VALUES(default, '$id', '$nome', '$usuario', '$porta', '$estado', NOW())");
mysqli_close($conexao);

header("Location: ../portas/porta_beta.php");
}



socket_close($sock);


?>