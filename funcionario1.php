<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
</head>
<body>
    <div>
    <?php include("menu-header2.php"); ?>
    </div>
    <div>
        <?php
    //error_reporting(0);
    include 'conectabanco.php';
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $sql = "SELECT cpf, nome, email FROM funcionario WHERE cpf = '$cpf'";
    $sla = "SELECT * FROM senhas WHERE fk_cpf = '$cpf'";
    $funcionario = $banco->query($sql);
    $row= mysqli_fetch_assoc($funcionario);
    $teste = $banco->query($sla); 
    $linha = mysqli_fetch_assoc($teste); 
    $datual = date('Y-m-d');
    
    if($linha != null){ 
    $d1 = $linha['dataAtual']; 
    $situacao = $linha['situacao']; 
    $tentativa = $linha['tentativas']; 
        function ddiasDatas($d1,$datual) {
            $diferenca = strtotime($d1) - strtotime($datual); 
            $dias = floor($diferenca / (60 * 60 * 24)); 
            return $dias;} 
    $ok = ddiasDatas($datual,$d1); 
            $_SESSION['fkcpf'] = $linha['fk_cpf']; 
        if($ok<3){
            if($situacao == 1){ 
                if($tentativa < 3){ 
                    if($senha == $linha['senhaAtual']){
                        $_SESSION['cpfF']=$row['cpf'];
                        $_SESSION['nomeF']=$row['nome'];
                        $_SESSION['emailF']=$row['email'];
                        $edita = "UPDATE senhas SET tentativas = 0 WHERE fk_cpf = $cpf";
                        $banco->query($edita);
                        header('Location: acessofuncionario.php');
                    }
                    else{
                        echo 'senha incorreta <br>';
                        $tentativa = $tentativa + 1;
                        $edita = "UPDATE senhas SET tentativas = '$tentativa' WHERE fk_cpf = '$cpf'";
                        $banco->query($edita);
                        if($tentativa == 3){
                            echo 'Usuario bloqueado';
                            $edita2 = "UPDATE senhas SET situacao = 0 WHERE fk_cpf = '$cpf'";
                            $banco->query($edita2);
                        }else{
                            echo 'tentar novamente'; 
                        }

                    }
                }else{
                    header('Location: trocasenha.php'); 
                
            }
            }
            else{
                echo "usuario bloqueado"; 
            }
            
        }
        else{
            header('Location: trocasenha.php');
        }
    }else{
        echo 'usuario nao encontrado';
    }
        $banco->close();
    //echo "$sql";
    
    
     ?>
    
    
    </div>
</body>
</html>