<?php
session_start();
include_once './includes/dashboardadministrativa.php';
include_once './includes/seguranca.php';
?>
<body>
<br>
      <center>  <h5 class="light">Aberturas / Fechamentos</h5><hr></center>
      <div class="row container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Registro</th>
                    <th>Usuário</th>
                    <th>Nome</th>
                    <th>Porta</th>
                    <th>Estado</th>
                    <th>Data e Hora</th>
 

</tr>
</thead>
<tbody><?php include_once './leitura/aberturas.php';?></tbody>
</table>
</div>
</div>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
