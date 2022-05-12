<!DOCTYPE html>
<html lang="pt-br";>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo_azul.png" type="image/x-icon">
    <!-- CSS icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Tabela de Clientes</title>

</head>
<body style="height: 100vh; max-width: 1320px; margin: auto; border: 1px solid black;">

    <!--parte1-->

    <section class="tlfundo">

        <img class="imglogo" src="imagens/logo_branca.png" alt="Logo Tabela">

        <h1 class="titulofund">Tabela de Clientes</h1>

        <div class="caixaperfil">

            <p>Nome</p>

            <img class="imgperfilus" src="imagens/smPerfil.png" alt="Perfil" onclick="mudarconta()">

        </div>

        <a href="LoginCadastro/fundo.html" class="btnsairconta">Sair</a>

    </section>

    <main class="maiodosite" onclick="tirarmudarconta()" >

        <section class="topmain">
        
            <div class="caixadepesquisa">
                
                <input class="inputpes" type="search" placeholder="Pesquise" id="pesquisa">

                <label for="pesquisa"><i style="font-size: 20px;cursor:pointer;" class="bi bi-search"></i></label>

            </div>

            <p class="tbnovo" onclick="abrircadastrocs()">+ Novo</p>

        </section>

        <div class="container" style="max-width: 1120px;">
            
            <div class=" row">




                <div  id="resutfunc" aling='center'></div>
                    <?php
                    $cont=4;
                    for($i=0;$i<$cont;$i++){




                        echo"          
                            <div class='col-md-6 col-lg-4'>

                                <div class='caixacliente' id='cod_$i'>

                                    <img class='perfilcliente' src='imagens/smPerfil.png' alt='perfilcliente'>

                                    <div class='maiscliente'>

                                        <h2 class='nomecl'>Nome</h2>

                                        <div class='ifcliente'>

                                            <div class='textcl'>

                                                <h3 class='ifvalor'>A pagar:<span id='vl1'> R$ 50</span></h3>

                                            </div>

                                            <p class='mais' onclick='abrirms()'>...</p>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        ";

                    };

                    ?>

            </div>
        </div>
    </main>

    <!--parte2-->

    <section class="fundocdcl" id="cadastrocl1">

        <div class="cadastrocl">

            <section class="haddercdcl">

                <div>

                    <h2 class="titulocdcl">Novo Cliente</h2>

                    <i class="bi bi-backspace" onclick="voltarin()"></i>

                </div>

            </section>

            <form class="formcdcl">

                <div class="divcdcl">

                    <section class="sectioncdcl">

                        <div class="alinglabel">

                            <label class="labelcdcl" for="nomecl">Nome</label>

                            <input class="inputcdcl" type="text" required="" placeholder="Digite o nome" id="nomecl">

                        </div>

                        <div class="alinglabel">

                            <label class="labelcdcl" for="numerocl">Numero</label>

                            <input class="inputcdcl" type="tel" required="" name="numero" placeholder="00 00000-0000" id="numerocl" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">

                        </div>

                        <div class="alinglabel">

                            <label class="labelcdcl" for="emailcl">E-mail</label>

                            <input class="inputcdcl" type="text" required="" placeholder="Digite o E-mail" id="emailcl">

                        </div>

                    </section>

                    <section class="sectioncdcl">

                        <div class="alinglabel">

                            <label class="labelcdcl" for="pedidocl">Pedido</label>

                            <input class="inputcdcl" type="text" required="" placeholder="Pedido" id="pedidocl">

                        </div>

                        <div class="alinglabel">

                            <label class="labelcdcl" for="vltotalcl">Valor Total</label>

                            <input class="inputcdcl" type="text" required="" placeholder="Valor do pedido" id="vltotalcl">

                        </div>

                        <div class="alinglabel">

                            <label class="labelcdcl" for="entradacl">Entrada</label>

                            <input class="inputcdcl" type="text" required="" placeholder="Valor da entrada" id="entradacl">

                        </div>

                    </section>

                </div>

                <button class="buttoncdcl" type="submit" onclick="cdclp2()">Avançar</button>

            </form>
            
        </div>

    </section>

    <!--parte3-->

    <section class="fundocdcl1" id="funcocdcl1">

        <div class="cadastrocl1">

            <section class="haddercdcl1">

                <div>

                    <h2 class="titulocdcl1">Novo Cliente</h2>

                    <i class="bi bi-backspace backspacecd" id="exitcd1" onclick="voltarin()"></i>

                </div>

            </section>

            <form class="formcdcl1">

                <div class="maincdcl">

                    <img class="slimagencliente" src="imagens/ace.png" alt="">
                    
                    <h2 class="h2clcd">Selecione uma imagem</h2>

                    <label class="labelfile" for="imagemcl">File</label>

                    <input class="imputfile" type="file" required="" id="imagemcl">

                </div>

                <div class="botoescdcl">

                    <button class="buttoncdcl" onclick="cdclvtp1()">voltar</button>

                    <button class="buttoncdcl" type="submit" onclick="voltarin()">Avançar</button>

                </div>

            </form>
            
        </div>

    </section>

    <!--parte4-->

    <section>

        <div class="fundocdcl2" id="fundoms">
        
            <div class="fundoclientes">

                <section class="heddercliente">

                    <h2 class="tldadosclientes">Cliente</h2>

                    <i class="bi bi-backspace backspacecd" id="exitcd2" onclick="voltarin()"></i>

                </section>

                <section class="secao2cliente"  id="secaoms">

                    <div class="caixasclientes caixa1s">

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Nome:</h2>

                            <p class="paragrafoclientes">nome</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Numero:</h2>

                            <p class="paragrafoclientes">00000000000</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">E-mail:</h2>

                            <p class="paragrafoclientes">aaaaaaaaaaaaa@aaaa.aaaa</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Data do Pedido:</h2>

                            <p class="paragrafoclientes">00/00/0000</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Pedido:</h2>

                            <p class="paragrafoclientes">ssssssssssssssssssssssssssssss</p>

                        </div>

                    </div>
                    
                    <div class="caixasclientes">

                        <img class="perfildocliente" src="imagens/ace.png" alt="">

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Valor Total:</h2>

                            <p class="paragrafoclientes">R$ 000,00</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Entrada:</h2>

                            <p class="paragrafoclientes">R$ 00</p>

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Resta:</h2>

                            <p class="paragrafoclientes">R$ 00</p>

                        </div>

                    </div>

                    <i class="bi bi-pencil" onclick="abrirmsed()"></i>

                </section>

                <!--parte4.2-->

                <form class="formularioed" id="formularioed">

                    <div class="caixasclientes caixa1s">

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Nome:</h2>

                            <input class="inputddsclinte1" type="text" name="nome" id="nomecliente" required="" placeholder="Nome">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Numero:</h2>

                            <input class="inputddsclinte1" type="tel" name="numero" id="numerocliente1" required="" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="00 00000-0000">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">E-mail:</h2>

                            <input class="inputddsclinte1" type="email" name="Email" id="emailcliente1" required="" placeholder="aaaaaaaa@aaaa.com">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Data do Pedido:</h2>

                            <input class="inputddsclinte1" type="date" name="datapd" id="datapedido1" required="" placeholder="">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Pedido:</h2>
                            
                            <input class="inputddsclinte1" type="text" name="pedido" id="pedidocliente1" required="" placeholder="Pedido">
                        </div>

                    </div>
                    
                    <div class="caixasclientes">

                        <img class="perfildocliente" src="imagens/ace.png" alt="">

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Valor Total:</h2>

                            <input class="inputddsclinte1" type="number" name="valortotal" id="valortotalcliente1" required="" placeholder="R$: 0,00">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Entrada:</h2>
                            
                            <input class="inputddsclinte1" type="number" name="entrada" id="entradacliente1" required="" placeholder="R$: 0,00">

                        </div>

                        <div class="divdadosclintes1">

                            <h2 class="tituloclientes">Resta:</h2>

                            <input class="inputddsclinte1" type="number" name="resta" id="restacliente1" required="" placeholder="R$: 0,00">
                        </div>

                    </div>
                    
                    <i class="bi bi-x opcoes2"></i>

                    <i class="bi bi-check2 opcoes2"></i>
                
                   
                </form>

            </div>

        </div>

    </section>

    <script src="index.js"></script>

</body>
</html>