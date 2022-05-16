<?php

//conexao com banco de dados 

$conecta = mysqli_connect("localhost", "root", "")or die("Erro ao conectar!");
$banco = mysqli_select_db($conecta,'luiz');
mysqli_set_charset($conecta,'utf8');


?>


