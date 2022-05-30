<?php
include("conectbd.php");
include("configsite.php");

// login
$lgnomefunci = $_POST['lgnome'];
$lgsenhafunci = $_POST['lgsenha'];

$bus1 = mysqli_query($conecta, "Select * from funcionarios where nome = '$lgnomefunci'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());
while($reg=mysqli_fetch_assoc($bus1)){

    $bussenha=$reg['senha'];
    $id=$reg['id'];


}




if($lgsenhafunci == $bussenha){




    session_start();
    $_SESSION['id']=$id;

     header("Location: ../index.php");
    
} else {
    header("Location: fundo.php?dados=incorretos");
}











?>