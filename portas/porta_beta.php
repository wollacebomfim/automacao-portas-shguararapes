<?php
session_start();
include_once '../includes/dashboard.php';
include_once '../includes/seguranca.php';
?>

<body>
<div class="row container">
<br>
<?php include_once '../includes/wallpaper.php'; ?>


<fieldset class="formulario">
<h5 class="light center"><b>CONTROLES DA PORTA <font color="red">BETA</font><b></h5>
<br><br><br>
<center>                        
<form method="POST" action="../processar/acionabeta.php">
<button class="btn green" type="submit" value="Desceu" name="estado">Descer<i class="material-icons right">file_download</i></button>
<button class="btn black" type="submit" value="Parou" name="estado">Parar<i class="material-icons right">stop</i></button>
<button class="btn red" type="submit" value="Subiu" name="estado">Subir<i class="material-icons right">file_upload</i></button>
</form>
<br><br><br>
</fieldset>
</div>
<center><a class="btn blue" href="../administracao.php" width="300px">voltar</a></center>
</center>
</body>
