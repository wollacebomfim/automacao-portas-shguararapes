<?php
session_start();
include_once './conexao/conexao.php';
include_once './includes/dashboardadministrativa.php';
include_once './includes/seguranca.php';
include_once './leitura/usuario.php';
?>

<body>
<div class="row container">
<br>
<?php include_once './includes/wallpaper.php'; ?>


<center><h4>Bem vindo <font color="green"><?php echo $dados['nome'] ?></font></h4></center>
<fieldset class="formulario">
</left><h5 class="light center"><b>Administração Geral do Sistema</b></h5>
<br><br>
<center>
<a class="btn red" href="todas_portas.php" width="300px"><i class="material-icons left">lock_open</i>Todas as Portas</a>&nbsp;
<a class="btn orange" href="registros.php"><i class="material-icons left">assignment_turned_in</i>Registro de Acessos</a>&nbsp;
<a class="btn blue" href="aberturas.php"><i class="material-icons left">assignment_ind</i>Registro de Aberturas</a>&nbsp;
<a class="btn green" href="cadastro.php"><i class="material-icons left">person_add</i>Castradar Usuário</a>&nbsp;<a class="btn black" href="usuarios.php"><i class="material-icons left">person</i>Ver Usuários</a></br><br>
</center>
<br><br>
</fieldset>
</div>


</body>
