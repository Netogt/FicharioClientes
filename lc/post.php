<?php

include("conectbd.php");


date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d");
$hora = date("H:i:s");

// cadastro funcionarios

$cdnomefunci = $_POST['nomecd'];
$cdsenhafunci = $_POST['senhacd'];
$cdnomeimgfunci = $_POST['imagemcd'];

$query = mysqli_query($conecta, "INSERT INTO `funcionarios` (`nome`, `senha`, `perfil`) VALUES ('$cdnomefunci', '$cdsenhafunci', '$cdnomeimgfunci')");

if($query){
    header("Location: fundo.php?cadastro=ok");
};












?>