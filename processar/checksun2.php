<?php

//Cria o socket
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//Conecta o socketc no ip e porta abaixo
socket_connect($sock,"localhost", 80);
//Envia 1 para abrir
if($_POST['estado']=="Abriu")
{
    socket_write($sock, "1");
}
//Envia 2 para fechar
if($_POST['estado']=="Fechou")
{
    socket_write($sock, "2");
}
socket_close($sock);


?>