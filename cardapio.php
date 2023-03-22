<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="assets/css/cardapio.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <?php include("menu-header.php"); ?>
    <?php include ("conectabanco.php") ?>
    <?php $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 1"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 2"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status2 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 3"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status3 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 4"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status4 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 5"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status5 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 6"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status6 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 7"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status7 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 8"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status8 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 9"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status9 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 10"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status10 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 11"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status11 = $linha['situacaoOnOff'];

    $select = "SELECT situacaoOnOff FROM cardapio WHERE idCardapio = 12"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status12 = $linha['situacaoOnOff'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 1"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status13 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 2"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status14 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 3"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status15 = $linha['descricao'];
   
    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 4"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status16 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 5"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status17 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 6"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status18 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 7"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status19 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 8"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status20 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 9"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status21 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 10"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status22 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 11"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status23 = $linha['descricao'];

    $select = "SELECT descricao FROM cardapio WHERE idCardapio = 12"; 
    $res = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($res);
    $status24 = $linha['descricao'];

    //////////////////////////////////////////////////////////////////

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 1"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor1 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 2"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor2 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 3"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor3 = $linha['valor'];
   
    $select = "SELECT valor FROM cardapio WHERE idCardapio = 4"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor4 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 5"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor5 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 6"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor6 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 7"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor7 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 8"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor8 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 9"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor9 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 10"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor10 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 11"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor11 = $linha['valor'];

    $select = "SELECT valor FROM cardapio WHERE idCardapio = 12"; 
    $resValor = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resValor);
    $valor12 = $linha['valor'];
    ?>

    
''
    <div class="corpo">
        <div class="titulo-da-sessao">
        <h4>Nosso Cardápio</h4>
            <p>Experimente nosso vasto cardápio de drink e petiscos, produzidos pelos melhores bartenders e cozinheiros.</p>
        </div>
            <div class="menus">
                <div class="colunas-menu">
                        <h4>Alcoólicos</h4>
                        <div class="singlemenu">
                            <img src="assets/drinks/beer-jar.jpg" alt="">
                            <div class="descricao-menu">
                                
                                
                               <label></label> <label><h5>Chopp <span>R$<?php echo "$valor1";?></span></h5> </label> 
                               <label>Status: <?php echo "$status";?></label>
                                <details> <p><?php echo "$status13";?></p> </details>
                                
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/mojito.jpg" alt="">
                            <div class="descricao-menu">
                            <label><h5>Mojito <span>R$<?php echo "$valor2";?></span> </h5> </label>
                            <label>Status: <?php echo "$status2";?></label>
                            <details> <p><?php echo "$status14";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/whiskey.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Whiskey <span>R$<?php echo "$valor3";?></span> </h5> </label>
                            <label>Status: <?php echo "$status3";?></label>
                            <details> <p><?php echo "$status15";?></p> </details>   
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/tequila.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Tequila <span>R$<?php echo "$valor4";?></span> </h5> </label>
                            <label>Status: <?php echo "$status4";?></label>
                            <details> <p><?php echo "$status16";?></p> </details>
                            </div>
                        </div>
            </div>
            <div class="colunas-menu">
                        <h4>Não Alcoólicos</h4>
                        <div class="singlemenu">
                            <img src="assets/drinks/bebida de limao.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Tropical de limão <span>R$<?php echo "$valor5";?></span> </h5> </label>
                            <label>Status: <?php echo "$status5";?></label>
                            <details> <p><?php echo "$status17";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/pinacolada.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Pinãcolada   <span>R$<?php echo "$valor6";?></span> </h5> </label>
                            <label>Status: <?php echo "$status6";?></label>
                            <details> <p><?php echo "$status18";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/suco laranja.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Suco de Laranja<span>R$<?php echo "$valor7";?></span> </h5> </label>
                            <label>Status: <?php echo "$status7";?></label>
                            <details> <p><?php echo "$status19";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/drinks/agua.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Água <span>R$<?php echo "$valor8";?></span> </h5> </label>
                            <label>Status: <?php echo "$status8";?></label>
                            <details> <p><?php echo "$status20";?></p> </details>
                            </div>
                        </div>
                        
            </div>
            <div class="colunas-menu">
                        <h4>Petiscaria</h4>
                        <div class="singlemenu">
                            <img src="assets/petiscaria/batata frita.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Batata Frita <span>R$<?php echo "$valor9";?></span> </h5> </label>
                            <label>Status: <?php echo "$status9";?></label>
                           <details> <p><?php echo "$status21";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/petiscaria/tiras de frango empanado.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Tiras de Frango <span>R$<?php echo "$valor10";?></span> </h5> </label>
                            <label>Status: <?php echo "$status10";?></label>
                            <details> <p><?php echo "$status22";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets//petiscaria/coxinha.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Coxinha <span>R$<?php echo "$valor11";?></span> </h5> </label>
                            <label>Status: <?php echo "$status11";?></label>
                            <details> <p><?php echo "$status23";?></p> </details>
                            </div>
                        </div>
                        <div class="singlemenu">
                            <img src="assets/petiscaria/bolinho-de-bacalhau.jpg" alt="">
                            <div class="descricao-menu">
                            <label> <h5>Bolinho de Bacalhau <span>R$<?php echo "$valor12";?></span> </h5> </label>
                            <label>Status: <?php echo "$status12";?></label>
                            <details> <p><?php echo "$status24";?></p> </details>
                            </div>

                            <br>
                            <br>
                            <br>
                        </div>
                        
            </div>
        </div>
    </div>
</body>
</html>