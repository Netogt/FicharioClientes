<?php 
  include("lc/configsite.php");
  include("lc/$conectabd");
  
        $cod1=$_GET['toke'];
        if ($cod1 != ''){ 

                $ifcli = mysqli_query($conecta, "Select * from $tabelaclientes where id = '$cod1'") or die("N&atilde;o foi poss&iacute;vel buscar as not&iacute;cias ".mysqli_error());
        
                while($msifcli=mysqli_fetch_assoc($ifcli)){
        
                    $nomecli1=$msifcli['nomecl'];
                    $numerocli1=$msifcli['numerocl'];
                    $emailcli1=$msifcli['emailcl'];
                    $datacli1=$msifcli['datacdcl'];
                    $pedidocli1=$msifcli['pedidocl'];
                    $valorpdcli1=$msifcli['valorcl'];
                    $entradapdcli1=$msifcli['entradacl'];
                    $imagemcli1=$msifcli['imagencl'];
                    $restapedido1 = floatval($valorpdcli1)- floatval($entradapdcli1);
                    $restapedido = floatval($restapedido1);
        
                };
            } else{
                    header("Location:index.php");
                    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .backif{
          color: white;     
        }
  </style>
  <link rel="stylesheet" href="index.css">
  <link rel="shortcut icon" href="imagens/logo_azul.png" type="image/x-icon">
    <!-- CSS icons bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
   <!--INFORMACOS DOS CLIENTES-->

   
      
    <div class="fundoclientes">
        <section class="heddercliente">
            <h2 class="tldadosclientes">Cliente</h2>
            <a onclick="voltarin1()" class="bi bi-backspace backspacecd backif" style="text-decoration: none;"></a>
            <!-- <a href="index.php" class="bi bi-backspace backspacecd backif" style="text-decoration: none;"></a> -->
        </section>
        <section class="secao2cliente"  id="secaoms">
            <div class="caixasclientes caixa1s">
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Nome:</h2>
                    <p class="paragrafoclientes" id="nomedocl"><?=$nomecli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Numero:</h2>
                    <p class="paragrafoclientes"><?=$numerocli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">E-mail:</h2>
                    <p class="paragrafoclientes"><?=$emailcli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Data do Pedido:</h2>
                    <p class="paragrafoclientes"><?=$datacli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Pedido:</h2>
                    <p class="paragrafoclientes"><?=$pedidocli1?></p>
                </div>
            </div>
            <div class="caixasclientes">
                <img class="perfildocliente" src="upload/<?php echo"$imagemcli1";?>" alt="">
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Valor Total:</h2>
                    <p class="paragrafoclientes"><?=$valorpdcli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Entrada:</h2>
                    <p class="paragrafoclientes"><?=$entradapdcli1?></p>
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Resta:</h2>
                    <p class="paragrafoclientes">R$ <?=$restapedido?></p>
                </div>
            </div>
            <i class="bi bi-pencil" onclick="abrirmsed()"></i>
        </section>

        <!--INFORMACOS DOS CLIENTES PARTE 2-->

        <form class="formularioed" id="formularioed" method="Post" action="lc/alterarcl.php" enctype='multipart/form-data'>
            <div class="caixasclientes caixa1s">
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Nome:</h2>
                    <input class="inputddsclinte1" type="text" name="nomeed" id="nomecliente" placeholder="Nome">
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Numero:</h2>
                    <input class="inputddsclinte1" type="tel" name="numeroed" id="numerocliente1" >
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">E-mail:</h2>
                    <input class="inputddsclinte1" type="email" name="Emailed" id="emailcliente1" placeholder="aaaaaaaa@aaaa.com">
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Data do Pedido:</h2>
                    <input class="inputddsclinte1" type="date" name="datapded" id="datapedido1" placeholder="">
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Pedido:</h2>
                    <input class="inputddsclinte1" type="text" name="pedidoed" id="pedidocliente1" placeholder="Pedido">
                </div>
            </div>
            <div class="caixasclientes">
                <div>
                    <label for="imagemcl"><img class="perfildocliente" src="upload/<?php echo"$imagemcli1";?>" alt="" style="cursor:pointer;" id="imagencliente"></label>
                    <input type="file" onchange="foi()" name="dropzone" style="display:none;" id="imagemcl">
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Valor Total:</h2>
                    <input class="inputddsclinte1" type="number" name="valortotaled" id="valortotalcliente1" placeholder="R$: 0,00">
                </div>
                <div class="divdadosclintes1">
                    <h2 class="tituloclientes">Entrada:</h2>
                    <input class="inputddsclinte1" type="number" name="entradaed" id="entradacliente1" placeholder="R$: 0,00">
                </div>
                
            </div>
            <div class="opsedcl">
                <input type="hidden" name="codcl" value="<?php echo"$cod1"; ?>">
                <a href="index.php" class="bi bi-x xx"></a>
                <button type="submit" class="bi bi-check2" style="border:none; background-color:#fff"></button>
            </div>
        </form>
    </div>
    <script>   
        var cecaoms = document.getElementById('secaoms');
        var formmsed = document.getElementById('formularioed')
        function voltarin1(){ 
            if(cecaoms.style.display === 'none'){
                formmsed.style.display= 'none';
                cecaoms.style.display= 'flex';
            }else{
                window.location.href = "index.php";
            }
            
        }
    </script>
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
    
</body>
</html>