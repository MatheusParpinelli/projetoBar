<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Editar Cardápio</title>
</head>
<body>
<?php include("menu-header.php"); ?>
    <?php include ("conectabanco.php") ?>
    <?php $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 1"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 2"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status2 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 3"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status3 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 4"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status4 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 5"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status5 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 6"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status6 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 7"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status7 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 8"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status8 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 9"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status9 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 10"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status10 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 11"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status11 = $linha['nomeItem'];

    $select = "SELECT nomeItem FROM cardapio WHERE idCardapio = 12"; 
    $resultado = mysqli_query($banco, $select); 
    $linha = mysqli_fetch_assoc($resultado);
    $status12 = $linha['nomeItem'];

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
    
<div class="telaeditarcardapio">
    <h1>Editar Itens do Cardápio</h1>
        <form action="salvareditarcardapio.php" method="post">
        <div class="inputreservacadastro">
        <?php include('conectabanco.php');?>
        </div> 
        <br>
        <div class="">
        <label><h5><?php echo "$status";?> <span>R$<?php echo "$valor1";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status" id="status" >

        <label><h5><?php echo "$status2";?> <span>R$<?php echo "$valor2";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status2" id="status2" >


        <label><h5><?php echo "$status3";?><span>R$<?php echo "$valor3";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status3" id="status2" >
     

        <label><h5><?php echo "$status4";?> <span>R$<?php echo "$valor4";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status4" id="status2" >
      
        
        <label><h5><?php echo "$status5";?> <span>R$<?php echo "$valor5";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status5" id="status2" >
 
        </div>

        <label><h5><?php echo "$status6";?> <span>R$<?php echo "$valor6";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status6" id="status2" >


        <label><h5><?php echo "$status7";?> <span>R$<?php echo "$valor7";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status7" id="status2" >       
     

        <label><h5><?php echo "$status8";?> <span>R$<?php echo "$valor8";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status8" id="status2" >
        

        <label><h5><?php echo "$status9";?> <span>R$<?php echo "$valor9";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status9" id="status2" >


        <label><h5><?php echo "$status10";?> <span>R$<?php echo "$valor10";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status10" id="status2" >


        <label><h5><?php echo "$status11";?> <span>R$<?php echo "$valor11";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status11" id="status2" >


        <label><h5><?php echo "$status12";?> <span>R$<?php echo "$valor12";?></span></h5> </label> 
        <label>Status:</label>
        <input type="text" name="status12" id="status2" >    

        <br>
        <br>
        <input type="submit" name="update" value="Atualizar">
        </form>

    </div>


</body>
</html>
