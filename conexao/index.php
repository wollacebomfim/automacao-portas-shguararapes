<?php
session_start();
include_once './includes/menu.php';
include_once './includes/wallpaper.php';
?>


<body>
<form action="./processar/logando.php" method="POST">
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<center><h3> Login</br> </h3></center>
</div>

<?php if(isset($_SESSION['nao_autenticado'])): ?>
<div class="notification is-danger">
<center><p class='center red-text'> Usuário ou senha inválidos</p></center>
</div>
<?php endif; unset($_SESSION['nao_autenticado']); ?>
<center>


<div class="card-content">
<div class="form-field">
<label for="usuario">Usuário</label>
<input name="usuario" type="text"   placeholder="INSIRA SEU USUÁRIO" autofocus required>
</div><br>


<div class="form-field">
<label for="senha">Senha</label>
<input name="senha" type="password"  minlength="11" maxlength="11" size="11" placeholder="INSIRA SUA SENHA" required onkeypress="return onlynumber();">
</div><br>


<center>
<button type="submit" class="btn-large brown">Entrar</button>

<a href="#"class="btn-large red"> Administração</button></a>
</center>
<br>

</div>
</div>
</form>

</center>

<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>

</body>
</html>