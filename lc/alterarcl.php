<?php
include("configsite.php");
include("conectbd.php");

$nomeed = $_POST['nomeed'];
$numeroed = $_POST['numeroed'];
$emailed = $_POST['Emailed'];
$dataed = $_POST['datapded'];
$pedidoed = $_POST['pedidoed'];
$vlpedidoed = $_POST['valortotaled'];
$etpedidoed = $_POST['entradaed'];
$idus = $_POST['codcl'];

include("enviarimgs.php");

if($nomeed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set nomecl='$nomeed'  where id=$idus");
}
if($numeroed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set numerocl='$numeroed'  where id=$idus");
}
if($emailed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set emailcl='$emailed'  where id=$idus");
}
if($dataed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set datacdcl='$dataed'  where id=$idus");
}
if($pedidoed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set pedidocl='$pedidoed'  where id=$idus");
}
if($vlpedidoed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set valorcl='$vlpedidoed'  where id=$idus");
}
if($etpedidoed != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set entradacl='$etpedidoed'  where id=$idus");
}
if($imagencliente != ''){
    $sql22=mysqli_query($conecta, "Update $tabelaclientes set imagencl='$imagencliente'  where id=$idus");
}




if($sql22){
    header("Location: ../index.php?cliente=atualizado");
    
}else{
    header("Location: ../index.php");
}

?>




