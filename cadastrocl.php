<?php

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

/* inicia a sessão */
session_start();
 

 
$dir = __DIR__ . DIRECTORY_SEPARATOR . "../upload/";

if(!is_dir($dir)){
	mkdir($dir, 0777, true);
}



if(isset($_FILES['dropzone'])){
	
	
	$extensao = strtolower(substr($_FILES['dropzone']['name'], -5)); // PEGA EXTENSÃO OS 4 ULTIMOS CARACTERES
	$novo_nome = md5(time()) . $extensao; // CRIPTOGRAFA A DATA E HORA PARA NÃO HAVER FOTOS IGUAIS	
	
    
   if(move_uploaded_file($_FILES['dropzone']['tmp_name'], $dir . DIRECTORY_SEPARATOR . $novo_nome)
	  //efetua upload 
	  

	 
	 ){



		$imagencliente = $novo_nome;
		
       echo "Upload de aquivo Concluido! Agora finalize o Pedido :)";

	    
	 }
	
	}


$query = mysqli_query($conecta, "INSERT INTO `dadosclientes` (`nomecl`, `numerocl`, `emailcl`, `pedidocl`, `valorcl`, `entradacl`, `imagencl`, `datacdcl`) VALUES ('$nomecliente', '$numerocliente', '$emailcliente', '$pedidocliente', '$vlpedidocliente', '$etpedidocliente', '$imagencliente', '$data')");

if($query){
    header("Location: ../index.php?cadastrocliente=realizado");
    
}

?>