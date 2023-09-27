<?php 
include_once './conexao/conexao.php';
$querySelect = $conexao->query("SELECT * FROM aberturas ORDER BY data_abertura ASC ");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $id_usuario = $registros['id_usuario'];
    $nome = $registros['nome'];
    $login = $registros['login'];
    $porta = $registros['porta'];
    $estado = $registros['estado'];
    $data_abertura = date('d-m-Y H:i:s' , strtotime($registros['data_abertura']));

echo "<tr>";
echo "<td>$id</td><td>$login</td><td>$nome</td><td>$porta</td><td><font color='blue'>$estado</font</td><td><font color='red'>$data_abertura</font></td>";
echo "</tr>";
endwhile;
?>