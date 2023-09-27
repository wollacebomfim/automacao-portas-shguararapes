<?php
 require_once '../conexao/conexao.php';
 session_start();

if(empty($_POST['login']) || empty($_POST['senha'])){
	header('Location: ../index.php');					
	exit();												
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$verificacao1 = "SELECT * FROM usuarios WHERE login = '{$login}' and senha = md5('{$senha}') and acess_level = 0";	
$verificacao2 = "SELECT * FROM usuarios WHERE login = '{$login}' and senha = md5('{$senha}') and acess_level = 1"; 	
$resultado2 = mysqli_query($conexao, $verificacao2);

		if(mysqli_num_rows($resultado1) == 1){ 
		$dados = mysqli_fetch_array($resultado1);
		$_SESSION['logado'] = true;
		$_SESSION['id_login'] = $dados ['id'];
		$id = $_SESSION['id_login'];
		$id = $dados['id'];
		$nome = $dados['nome'];
		$login = $dados['login'];
		$sql = $conexao->query("INSERT INTO acessos VALUES(default, '$id', '$nome', '$login', NOW())");		
		$atualiza_acesso = $conexao->query("UPDATE usuarios SET data_atualizacao = NOW() WHERE id = '$id'"); 
		$tempolimite = 4000;
		$_SESSION['logado'] = time();
		$_SESSION['limite'] = $tempolimite;
		mysqli_close($conexao);
		header('Location: ../menu.php');				
		exit();

			}elseif($resultado2 == 1){
			$dados = mysqli_fetch_array($resultado2);
			$_SESSION['logado'] = true;
			$_SESSION['id_login'] = $dados ['id'];
			$id = $_SESSION['id_login'];
			$id = $dados['id'];
			$nome = $dados['nome'];
			$login = $dados['login'];
			$sql = $conexao->query("INSERT INTO acessos VALUES(default, '$id', '$nome', '$login', NOW())");	
			$atualiza_acesso = $conexao->query("UPDATE usuarios SET data_atualizacao = NOW() WHERE id = '$id'"); 
			$tempolimite = 4000;
			$_SESSION['logado'] = time();
			$_SESSION['limite'] = $tempolimite;
			mysqli_close($conexao);
			header('Location: ../administracao.php'); 
			exit();
		
				}else{
				$_SESSION['nao_autenticado'] = true;
				header('Location: ../index.php');	
				mysqli_close($conexao);
				exit();
				}
				?>