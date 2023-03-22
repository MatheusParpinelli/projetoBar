<!DOCTYPE html>
    <html lang="pt_BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inserir_produto</title>
    </head>

    <body>
        <div>
            <?php include("menu-header2.php"); ?>
        </div>
        <div>

            <?php

            include 'conectabanco.php';

            $descrição = $_POST['descricao'];
            $qtdproduto = $_POST['qtdProduto'];
            $precoproduto = $_POST['precoProduto'];
            $datacadastro = $_POST['dataCadastro'];
            $situacao = $_POST['situacao'];


            if ($descrição != "" and $qtdproduto != "" and $precoproduto != "" and $datacadastro != "" and $situacao != "") {
                $sql = "INSERT INTO produto (descricao, qtdProduto, precoProduto, dataCadastro, situacao)
            VALUES ('$descrição','$qtdproduto','$precoproduto','$datacadastro','$situacao')";
                // echo "$sql";
                $banco->query($sql);}
                if ($banco->affected_rows >= 1) {
                    echo "Produto cadastrado com sucesso!";
                }
             else {
                echo "Erro ao alterar produto";
            }

            $banco->close();

            ?>
        </div>

    </body>

    </html>