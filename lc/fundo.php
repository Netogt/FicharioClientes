<?php
include("conectbd.php");
include("configsite.php");
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo_azul.png" type="image/x-icon">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fundo.css">

    <title>Tabela de Clientes</title>

</head>
<body>
    <section class="tlfundo">

        <img class="imglogo" src="../imagens/logo_branca.png" alt="Logo Tabela">
        <h1 class="titulofund">Tabela de Clientes</h1>

    </section>
    <section class="fundolg" id="fundolg" >

        <header class="cabecalho"> 

            <h2 style="font-weight:bold;">LOGIN</h2>

        </header>
        
        <form class="elementslg" action="login.php" method="Post">

            <p id="mensagenerro" style="position: absolute; top: 40px; font-size: 20px; color: red; display:none;">login ou senha esta incorreto</p>

            <div class="linelg">

                <label class="labellg" for="nome">Nome</label>
                <input class="inputlg" type="text" name="lgnome" required="" id="nome" required="" placeholder="Digite seu Nome">

            </div>

            <div class="linelg">

                <label class="labellg" for="senha">Senha</label>
                <input class="inputlg" type="password" name="lgsenha" required="" id="senha" required="" placeholder="Digite sua Senha">

            </div>

            <div class="caixacd">

                <h3 class="cadastro" onclick="cadastrarusuario()">Cadastre-se</h3>

            </div>

            <button class="btnlg">Login</button></a>
            
        </form>

    </section> 

    <section class="fundocd" id="fundocd1">

        <div  class="cabecalhocd"><h2>Novo Usuário</h2><i class="bi bi-backspace" id="exitcd" onclick="voltarlogin()"></i>

        </div>

        <form class="formcd" method="Post" action="post.php" enctype='multipart/form-data' style="position: relative">

            <section class="columncd sec1">

                <div class="cl2cd"><label class="labelcd" for="nome">Nome</label>

                    <input class="inputcd" type="text" name="nomecd" required="" placeholder="Digite seu nome">

                </div>

                <div class="cl2cd">

                    <label class="labelcd" for="senha">Senha</label>
                    <input class="inputcd" type="password" name="senhacd" required="" placeholder="Digite uma senha" id="senhacf1">

                </div>

                <div class="cl2cd">

                    <label class="labelcd" for="cfsenha">Confimar Senha</label>
                    <input class="inputcd" type="password" name="cfsenhacd" required="" placeholder="Confime a senha" id="senhacf2"> 

                </div>
                <p style="position: absolute; bottom: 20px; color: red; font-size: 20px; display: none;" id="senhanc">Senha não coincidem</p>

            </section>

            <section class="columncd">

                <img class="imgpfcd" src="../imagens/ace.png" alt="imagen de perfil" id="imagencliente">

                <div class="cl2cd">

                    <h3 style="font-size: 30px;">Selecione uma imagem</h3>
                    <label class="labelfilecd" for="imagemcl" onclick="verifica()">imagem</label>
                    <input class="inputselcd" type="file" name="dropzone" onchange="foi()" id="imagemcl">

                </div>

                <button class="btncd" type="submit">Cadastrar</button>

            </section>       

        </form>

    </section>

    <?php
    
    $loginerro = $_GET['dados'];
    if($loginerro == 'incorretos'){
        
        echo"
        
        <script>

        var perro = document.getElementById('mensagenerro');

        perro.style.display = 'block';

        </script>

        ";

    };
    
    ?>


    <script src="../index.js"></script>
    <script>
        var p = document.getElementById('senhanc')
        var esc = document.getElementById('fundocd1')
        var esc1 = document.getElementById('fundolg')

    </script>
    <?php


 $teste = $_GET['teste'];


    
    $cadastro = $_GET['cadastro'];


     if($cadastro == "erro"){
        echo "
            <script>
                esc1.style.display = 'none';
                esc.style.display = 'block';
                p.style.display = 'block';
                p.innerHTML = 'Usuário já cadastrado.';
            </script>
        ";
     }else if($cadastro == "senhadf"){
        echo "
            <script>
                esc1.style.display = 'none';
                esc.style.display = 'block';
                p.style.display = 'block';
                
            </script>
        ";

     }

    ?>
        <script>
        var photo = document.getElementById('imagencliente')
        var file = document.getElementById('imagemcl')
        function foi(){


            let reader = new FileReader();

            reader.onload = () => {

                photo.src = reader.result;

            }

            reader.readAsDataURL(file.files[0])
        }
        var nomedocl = document.getElementById('nomedocl');

    
    </script>
</body>
</html>