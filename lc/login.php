<?php
include("conectbd.php");


// login
$lgnomefunci = $_POST['lgnome'];
$lgsenhafunci = $_POST['lgsenha'];

$bus1 = mysqli_query($conecta, "Select * from funcionarios where nome = '$lgnomefunci'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());

$bus2 = mysqli_query($conecta, "Select * from funcionarios where senha = '$lgsenhafunci'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());

if($reg1=mysqli_fetch_assoc($bus1) && $reg2=mysqli_fetch_assoc($bus2)){

     header("Location: ../index.php");
    
} else {
    header("Location: fundo.php?dados=incorretos");
}











?>