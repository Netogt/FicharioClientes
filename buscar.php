<?php
include("conectbd.php");
include("configsite.php");

    if(!isset($_GET['pesquisa'])){
        header("Location: index.php");
        exit;
    }

    $pesqui = $_GET['pesquisa'];

    if($pesqui === ''){
        header("Location: index.php?");
    };
    if($pesqui){
        header("Location: index.php?busca=$pesqui");
    };

?>