<?php
//incluindo banco de dados 

  include("conectbd.php");




//incluindo dados no banco



$nome = $_POST['nome1'];
$email = $_POST['email1'];
$cfemail = $_POST['email'];

$cont=0;

$bus= mysqli_query($conecta, "Select * from alunos where Email = ('$email')") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());

while($reg=mysqli_fetch_assoc($bus)){
	
    $cont=$cont+1;
	 
};



if($email === $cfemail){

    if($cont == 0){

        $query = mysqli_query($conecta, "INSERT INTO `alunos` (  `Nome`, `Email`) VALUES ('$nome', '$email')");
        
        header("Location: index.php?inscricao=ok");

    } else if($cont != 0) {

     header("Location: index.php?inscricao=emailcd");
   
    } else{
        header("Location: index.php?inscricao=erro");
    };
}else if($email != $cfemail){
    header("Location: index.php?inscricao=emailer");
}else{
    header("Location: index.php?inscricao=erro");
};
?>