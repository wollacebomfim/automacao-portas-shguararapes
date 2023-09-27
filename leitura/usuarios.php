<?php 
include_once './conexao/conexao.php';
$querySelect = $conexao->query("SELECT * FROM usuarios ORDER BY nome ASC ");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $login = $registros['login'];
    $data_cadastro = date('d-m-Y H:i:s' , strtotime($registros['data_cadastro']));

echo "<tr>";
echo "<td>$id</td><td>$login</td><td>$nome</td><td>$data_cadastro</td><td><a href='editar.php?id=$id'><i class='material-icons'>edit</<td><td><a href='./processar/deletar.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>