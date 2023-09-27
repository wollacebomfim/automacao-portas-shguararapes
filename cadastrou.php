<?php
session_start();
include_once './conexao/conexao.php';
include_once './includes/dashboard.php';
include_once './includes/seguranca.php';

?>

<body>
<div class="row container">
<br>
<?php include_once './includes/wallpaper.php'; ?>

<h3>
        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div class="notification is-sucess">
        <center><h3 class='center green-text'>Cadastro efetuado</h3></center>
        </div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
        
        </h3>
</div>
<div class="card-content">
<div class="form-field">
    
        
        </div><br>

    
                    
<br>                                
<center>
<a href="usuarios.php"class="btn brown">Ir ao usuários</button></a>
</center>



</body>
