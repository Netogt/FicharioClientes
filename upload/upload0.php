<?php


/* inicia a sessão */
session_start();
 

 
$dir = __DIR__ . DIRECTORY_SEPARATOR . "upload/";

if(!is_dir($dir)){
	mkdir($dir, 0777, true);
}



if(isset($_FILES['dropzone'])){
	
	
	$extensao = strtolower(substr($_FILES['dropzone']['name'], -5)); // PEGA EXTENSÃO OS 4 ULTIMOS CARACTERES
	$novo_nome = md5(time()) . $extensao; // CRIPTOGRAFA A DATA E HORA PARA NÃO HAVER FOTOS IGUAIS	
	
    
   if(move_uploaded_file($_FILES['dropzone']['tmp_name'], $dir . DIRECTORY_SEPARATOR . $novo_nome)
	  //efetua upload 
	  
	  
	 
	 ){




		
       echo "Upload de aquivo Concluido! Agora finalize o Pedido :)";

	    
	 }
	
	}
?>


 