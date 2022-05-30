<?php
    include("configsite.php");
    include("conectbd.php");
    include("enviarimgs.php");

    date_default_timezone_set('America/Sao_Paulo');
    $data = date("Y-m-d");
    $hora = date("H:i:s");

    // cadastro funcionarios

    $cdnomefunci = $_POST['nomecd'];
    $cdsenhafunci = $_POST['senhacd'];
    $cdsenhafunci1 = $_POST['cfsenhacd'];
    // $cdnomeimgfunci = $_POST['imagemcd'];
    if($cdsenhafunci === $cdsenhafunci1){

        $vfuser = mysqli_query($conecta, "Select * from funcionarios where nome = '$cdnomefunci'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());
        while($regsn=mysqli_fetch_assoc($vfuser)){

            $busnome=$regsn['nome'];
        
        
        }


        if($busnome === $cdnomefunci){
            header("Location: fundo.php?cadastro=erro");
        }else{

            $query = mysqli_query($conecta, "INSERT INTO $tabelafuncioarios (`nome`, `senha`, `perfil`) VALUES ('$cdnomefunci', '$cdsenhafunci', '$imagencliente')");
           
            if($query){
                header("Location: fundo.php?cadastro=ok");
            };
        } 
    }else {
        header("Location: fundo.php?cadastro=senhadf");
    }

   
















?>