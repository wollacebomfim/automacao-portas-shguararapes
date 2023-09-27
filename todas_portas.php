<?php
session_start();
include_once './conexao/conexao.php';
include_once './includes/dashboard.php';
include_once './includes/seguranca.php';
include_once './includes/usuario.php';
?>

<body>
<div class="row container">

<br>
<?php include_once './includes/wallpaper.php'; ?>


<h5 class="light center"><b>SISTEMA DE GERENCIAMENTO DE TODAS AS PORTAS</b></h5>
<fieldset class="formulario">
<br><br>
<center><a class="btn red" href="../portas/porta_beta.php" width="300px"><i class="material-icons left">exit_to_app</i>Portão beta</a></center>
<br>
</fieldset>
<br>
<center><a class="btn blue" href="administracao.php" width="300px">voltar</a></center>
</div>
</body>
