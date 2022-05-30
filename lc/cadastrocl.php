<?php
include("configsite.php");
include("conectbd.php");


date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d");
$hora = date("H:i:s");


$nomecliente = $_POST['nomecl'];
$numerocliente = $_POST['numerocl'];
$emailcliente = $_POST['emailcl'];
$pedidocliente = $_POST['pedidocl'];
$vlpedidocliente = $_POST['valorpedidocl'];
$etpedidocliente = $_POST['entradapedidocl'];

include("enviarimgs.php");


$query = mysqli_query($conecta, "INSERT INTO `dadosclientes` (`nomecl`, `numerocl`, `emailcl`, `pedidocl`, `valorcl`, `entradacl`, `imagencl`, `datacdcl`) VALUES ('$nomecliente', '$numerocliente', '$emailcliente', '$pedidocliente', '$vlpedidocliente', '$etpedidocliente', '$imagencliente', '$data')");

if($query){
    header("Location: ../index.php?cadastrocliente=realizado");
    
}

?>