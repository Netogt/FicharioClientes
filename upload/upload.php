<?php



$uploaddir = '/uploads/';

$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {



    echo "Arquivo válido e enviado com sucesso.\n";



} else {



    echo "Possível ataque de upload de arquivo!\n";


}



?>