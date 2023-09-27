<?php
session_start();
include_once './conexao/conexao.php';
include_once './includes/dashboard.php';
include_once './includes/seguranca.php';
include_once './leitura/usuario.php';
?>
<body>
<div class="row container">
<br>
<?php include_once './includes/wallpaper.php'; ?>
<center><h4>Bem vindo <font color="green"><?php echo $dados['nome'] ?></font></h4></center>
<fieldset class="formulario">
<br>
<h5 class="light center"><b>Sistema de Abertura de Portas</b></h5>
<br>
<center><a class="btn red" href="porta_beta.php" width="300px"><i class="material-icons left">exit_to_app</i>Portão beta</a></center>
<br>
</fieldset>
</div>
</body>
