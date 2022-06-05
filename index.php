<?php
include("lc/configsite.php");
include("lc/$conectabd");


session_start();
$cod_id =   $_SESSION['id'];

if (empty($cod_id)){header("Location: lc/fundo.php?error_section");}


$busus = mysqli_query($conecta, "Select * from $tabelafuncioarios where id = '$cod_id'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());
while($uslog=mysqli_fetch_assoc($busus)){

    $imglogado=$uslog['perfil'];
    $nomelogado=$uslog['nome'];


}


?>

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
    <style>
        .buttoncdcl{
            display: flex;
            justify-content: center;
            align-items:center;
        }
    </style>

</head>
<body style="height: 100vh; max-width: 1580px; margin: auto; border: 0 1px solid black;">

    <!--HOME PAGE-->

    <section class="tlfundo">
        <img class="imglogo" src="imagens/logo_branca.png" alt="Logo Tabela">
        <h1 class="titulofund">Tabela de Clientes</h1>
        <div class="caixaperfil">
            <p class="nomeperf"><?php echo"$nomelogado";?></p>
            <img class="imgperfilus" src="upload/<?php echo"$imglogado";?>" alt="" onclick="mudarconta()">
        </div>
        <a href="lc/fundo.php" class="btnsairconta">Sair</a>
    </section>
    <main class="maiodosite">
        <section class="topmain" id="topmain">
            <form class="caixadepesquisa" id="caixadepesquisa" action="buscar.php" method="Get">               
                <input class="inputpes" type="search" placeholder="Pesquise" id="pesquisa" name="pesquisa">
                <label for="pesquisa"><button type="submit" style="font-size: 20px;cursor:pointer; border:none; background-color:#fff" class="bi bi-search"></button></label>
            </form>
            <p class="tbnovo" onclick="abrircadastrocs()">+ Novo</p>
        </section>
        <div class="divbtnresp" id="divbtnresp">
            <i class="bi bi-search respsearch" onclick="abrirpesquisa()"></i>
            <i class="bi bi-plus-circle tbnovoresp" onclick="abrircadastrocs()"></i>
        </div>    
        <div class="container" style="max-width: 1290px;" onclick="fecharpesquisa1()">           
            <div class=" row">
            
            <?php
                $buscarcl=$_GET['busca'];
                if ($buscarcl != ''){ 
        
                    $comando = "SELECT * FROM $tabelaclientes where nomecl LIKE '%$buscarcl%' ORDER BY id DESC";
                
                
                    } else{
                         $comando = "SELECT * FROM $tabelaclientes ORDER BY id DESC";
                        }
                $enviar = mysqli_query($conecta, $comando);
                $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
                

                foreach ($resultado as $produtos){
                $nomecli = $produtos['nomecl'];
                $pagarcli = $produtos['valorcl'];
                $perfilcli = $produtos['imagencl'];
                $codid = $produtos['id'];
                
                ?>  

                    <!-- contagem de linhas           
                        $sql = "SELECT * from dadosclientes";

                        if ($result = mysqli_query($conecta, $sql)) {
                    
                            Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                    }-->    
                                     
                <div class="col-md-6 col-lg-4" style=" margin-bottom: 20px; bac">
                    <div class="caixacliente" id="codid">
                       
                        <img class="perfilcliente" src="upload/<?php echo"$perfilcli"; ?>" alt="perfilcliente">
                        <div class="maiscliente">
                            <h2 class="nomecl"><?=$nomecli?></h2>
                            <div class="ifcliente">
                                <div class="textcl">
                                    <h3 class="ifvalor"><span id="vl1"> R$ <?=$pagarcli?></span></h3>
                                </div>
                                <a href="infclientes.php?toke=<?=$codid?>" class="mais"  style="text-decoration: none;">...</a>
                            </div>
                        </div>
                    </div>
                </div>                                      
                <?php
                    }
                   
                ?>                   
            </div>
        </div>
    </main>
    <!--CADASTRO DE CLIENTES-->

    <form action="lc/cadastrocl.php" method="Post" enctype='multipart/form-data'>
        <section class="fundocdcl" id="cadastrocl1" style="height:100%, width: 100%;">
        <div class="cadastrocl">
            <section class="haddercdcl">
                <div>
                    <h2 class="titulocdcl">Novo Cliente</h2>
                    <i class="bi bi-backspace" onclick="voltarin()"></i>
                </div>
            </section>
            <div class="formcdcl">
                <div class="divcdcl">
                    <section class="sectioncdcl">
                        <div class="alinglabel">
                            <label class="labelcdcl" for="nomecl">Nome</label>
                            <input class="inputcdcl" type="text" placeholder="Digite o nome" id="nomecl" name="nomecl">
                        </div>
                        <div class="alinglabel">
                            <label class="labelcdcl" for="numerocl">Numero</label>
                            <input class="inputcdcl" type="tel" placeholder="00 00000-0000" id="numerocl" name="numerocl">
                        </div>
                        <div class="alinglabel">
                            <label class="labelcdcl" for="emailcl">E-mail</label>
                            <input class="inputcdcl" type="text" placeholder="Digite o E-mail" id="emailcl" name="emailcl">
                        </div>
                    </section>
                    <section class="sectioncdcl">
                        <div class="alinglabel">
                            <label class="labelcdcl" for="pedidocl">Pedido</label>
                            <input class="inputcdcl" type="text" placeholder="Pedido" id="pedidocl" name="pedidocl">
                        </div>
                        <div class="alinglabel">
                            <label class="labelcdcl" for="vltotalcl">Valor Total</label>
                            <input class="inputcdcl" type="text" placeholder="Valor do pedido" id="vltotalcl" name="valorpedidocl">
                        </div>
                        <div class="alinglabel">
                            <label class="labelcdcl" for="entradacl">Entrada</label>
                            <input class="inputcdcl" type="text" placeholder="Valor da entrada" id="entradacl" name="entradapedidocl">
                        </div>
                    </section>
                </div>
                <div class="buttoncdcl" onclick="cdclp2()">Avançar</div>
            </div>
        </div>
        </section>

        <!--CADASTRO DE CLIENTES PARTE 2-->

        <section class="fundocdcl1" id="funcocdcl1">
            <div class="cadastrocl1">
                <section class="haddercdcl1">
                    <div>
                        <h2 class="titulocdcl1">Novo Cliente</h2>
                        <i class="bi bi-backspace" id="exitcd1" onclick="voltarin()"></i>
                    </div>
                </section>
                <div class="formcdcl1" >
                    <<div class="maincdcl">
                        <div>
                            <label for="imagemcl">
                                <img class="slimagencliente" src="imagens/ace.png" alt="" style="cursor:pointer;" id="imagencliente">
                            <label>
                            <input class="imputfile"  type="file"  onchange="foi()" required="" id="imagemcl" name="dropzone">
                        </div>
                        <h2 class="h2clcd">Selecione uma imagem</h2>
                        <label for="imagemcl" class="labelfile">Enviar</label>
                        </div>
                    <div class="botoescdcl">
                        <div class="buttoncdcl" onclick="cdclvtp1()">voltar</div>
                        <button class="buttoncdcl" type="submit">Avançar</button>
                    </div>
                </div>
            </div>
        </section>
    </form> 

   
        
    <script src="index.js"></script>
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
  

    <script>
   
   
    
   
    function cdclp2(){
        var vasio = document.getElementsByClassName('inputcdcl');
        var vs = [
         vasio[0].value,
         vasio[1].value,
         vasio[2].value,
         vasio[3].value,
         vasio[4].value,
         vasio[5].value
        ]
        
        if(vs[0] != '' && vs[1] != '' && vs[2] != '' && vs[3] != '' && vs[4] != ''&& vs[5] != ''){
    
        fundocdcl.style.display= 'none';
        fundocdcl1.style.display= 'block';
         }else{
             window.alert('Preencha todos os campos')
         }
    }
  

</script>

</body>
</html>