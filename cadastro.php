<?php
session_start();
include_once './conexao/conexao.php';
include_once './includes/dashboardadministrativa.php';
include_once './includes/seguranca.php';

?>

<body>
<div class="row container"><br>
<?php include_once './includes/wallpaper.php'; ?>
<form method="POST" action="./processar/cadastrar.php">


<div class="row">                                   <!-- 1 -->
<div class="col s12 m4 offset-m4">                  <!-- 2 -->
<div class="card">                                  <!-- 3 -->
<div class="card-action white lighten-1 black-text">
<h3>Cadastro Usuário</h3>
</div>

        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div class="notification is-sucess">
        <center><p class='center green-text'>Cadastro efetuado, volte ao login !</p></center>
        </div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
        <?php if(isset($_SESSION['usuario_existe'])): ?>
        <div class="notification is-info">
        <center><p class='center red-text'>O login já existe, informe outro !</p></center>
        </div>
        <?php endif; unset($_SESSION['usuario_existe']); ?>
        

<div class="card-content">
<div class="form-field">
<label for="nome">Seu nome completo</label>
<input name="nome" type="text"  placeholder="SEU NOME COMPLETO" required>
</div><br>
                    
                            
<div class="form-field">
<label for="login">Seu login</label>
<input name="login" type="text"  placeholder="SEU LOGIN" required>
</div><br>

<div class="form-field">
<label for="senha">Senha (somente numeros)</label>
<input name="senha" type="text"  minlength="11" maxlength="11" size="11" placeholder="INSIRA SUA SENHA" required onkeypress="return onlynumber();">
</div><br>                      
<br> 

<center>
<a href="../administracao.php"class="btn red">Voltar</button></a>
<button type="submit" class="btn blue">Cadastrar</button>
</center>



</form>
</div>


</body>
