<?php 
include_once './conexao/conexao.php';
$querySelect = $conexao->query("SELECT * FROM acessos ORDER BY data_acesso ASC ");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $login = $registros['login'];
    $data_acesso = date('d-m-Y H:i:s' , strtotime($registros['data_acesso']));

echo "<tr>";
echo "<td>$id</td><td>$login</td><td>$nome</td><td><font color='red'>$data_acesso</font></td>";
echo "</tr>";
endwhile;
?>