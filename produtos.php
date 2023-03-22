<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/produtos.css">

    <title>Produtos</title>
</head>

<body>
    <div><?php include("menu-header2.php"); ?></div>
    
    <div class="telaproduto">


        <div class="telacadastro">
            <form action="produtos1.php" method="POST">

                <h2>Cadastrar Produtos</h2>

                <br><br>
                <input class="barra" type="text" name="descricao" placeholder="Nome do Produto" required>
                <br><br>

                <br>
                <input class="barra" type="text" name="qtdProduto" placeholder="Quantidade" required>
                <br><br>

                <br>
                <input class="barra" type="text" name="precoProduto" placeholder="Valor" required>
                <br><br>

                <br>
                <input class="barra" type="text" name="situacao" placeholder="Situação" required>
                <br><br>

                <br>    
                <input class="barra" type="date" name="dataCadastro" placeholder="Data para Cadastro" required>
                <br><br>              
                
                
                <input class="butao" type="submit" value="Cadastrar" id="button">
                <br><br>
                <input class="butao" type="submit" value="Consultar" id="button">
                
            </form>

        </div>
    </div>



</body>

</html>