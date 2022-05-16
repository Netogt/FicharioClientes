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
    <section class="fundolg " >

        <header class="cabecalho"> 

            <h2 style="font-weight:bold;">LOGIN</h2>

        </header>
        
        <form class="elementslg" action="">

            <div class="linelg">

                <label class="labellg" for="nome">Nome</label>
                <input class="inputlg" type="text" name="nome" required="" id="nome" required="" placeholder="Digite seu Nome">

            </div>

            <div class="linelg">

                <label class="labellg" for="senha">Senha</label>
                <input class="inputlg" type="password" name="senha" required="" id="senha" required="" placeholder="Digite sua Senha">

            </div>

            <div class="caixacd">

                <h3 class="cadastro" onclick="cadastrarusuario()">Cadastre-se</h3>

            </div>

            <button class="btnlg">Login</button></a>
            
        </form>

    </section> 

    <section class="fundocd" >

        <div  class="cabecalhocd"><h2>Novo Usuário</h2><i class="bi bi-backspace" id="exitcd" onclick="voltarlogin()"></i>

        </div>

        <form class="formcd" method="post" action="post.php">

            <section class="columncd sec1">

                <div class="cl2cd"><label class="labelcd" for="nome">Nome</label>

                    <input class="inputcd" type="text" name="nome" required="" placeholder="Digite seu nome">

                </div>

                <div class="cl2cd">

                    <label class="labelcd" for="senha">Senha</label>
                    <input class="inputcd" type="password" name="senha" required="" placeholder="Digite uma senha">

                </div>

                <div class="cl2cd">

                    <label class="labelcd" for="cfsenha">Confimar Senha</label>
                    <input class="inputcd" type="password" name="cfsenha" required="" placeholder="Confime a senha">

                </div>

            </section>

            <section class="columncd">

                <img class="imgpfcd" src="../imagens/ace.png" alt="imagen de perfil">

                <div class="cl2cd">

                    <h3 style="font-size: 30px;">Selecione uma imagem</h3>
                    <label class="labelfilecd" for="imagenrc">imagem</label>
                    <input class="inputselcd" type="file" name="imagem" id="imagenrc">

                </div>

                <button class="btncd" type="submit">Cadastrar</button>

            </section>       

        </form>

    </section>

    <script src="../index.js"></script>
    
</body>
</html>