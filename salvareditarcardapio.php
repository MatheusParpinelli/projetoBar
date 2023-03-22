<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cardápio</title>
</head>
<body>
<div>
    <?php include("menu-header.php"); ?>
    
<div>
    <?php include('conectabanco.php');

    //    var_dump($_POST);
    //    die();
if(isset($_POST['update'])){
    echo "Teste";
            $status = $_POST['status'];
            $status2 = $_POST['status2'];
            $status3 = $_POST['status3'];
            $status4 = $_POST['status4'];
            $status5 = $_POST['status5'];
            $status6 = $_POST['status6'];
            $status7 = $_POST['status7'];
            $status8 = $_POST['status8'];
            $status9 = $_POST['status9'];
            $status10 = $_POST['status10'];
            $status11 = $_POST['status11'];
            $status12 = $_POST['status12'];
            


            

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status' WHERE idCardapio = 1";
            echo $sqlUpdate;
            $resultado = $status != '' ? $banco->query($sqlUpdate) : '';
            echo $resultado;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status2' WHERE idCardapio = 2";
            echo $sqlUpdate;
            $resultado2 = $status2 != '' ? $banco->query($sqlUpdate) : '';
            echo $resultado2;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status3' WHERE idCardapio = 3";
            echo $sqlUpdate;
            $resultado3 = $status3 != '' ?$banco->query($sqlUpdate) : '';

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status4' WHERE idCardapio = 4";
            echo $sqlUpdate;
            $resultado4 = $status4 != '' ?$banco->query($sqlUpdate) : '';
            echo $resultado4;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status5' WHERE idCardapio = 5";
            echo $sqlUpdate;
            $resultado5 = $status5 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado5;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status6' WHERE idCardapio = 6";
            echo $sqlUpdate;
            $resultado6 = $status6 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado6;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status7' WHERE idCardapio = 7";
            echo $sqlUpdate;
            $resultado7 =$status7 != '' ? $banco->query($sqlUpdate): '';
            echo $resultado7;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status8' WHERE idCardapio = 8";
            echo $sqlUpdate;
            $resultado8 = $status8 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado8;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status9' WHERE idCardapio = 9";
            echo $sqlUpdate;
            $resultado9 = $status9 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado9;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status10' WHERE idCardapio = 10";
            echo $sqlUpdate;
            $resultado10 = $status10 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado10;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status11' WHERE idCardapio = 11";
            echo $sqlUpdate;
            $resultado11 = $status11 != '' ?$banco->query($sqlUpdate): '';
            echo $resultado11;

            $sqlUpdate = "UPDATE cardapio SET statusOnOff = '$status12' WHERE idCardapio = 12";
            echo $sqlUpdate;
            $resultado12 =$status12 != '' ? $banco->query($sqlUpdate): '';
            echo $resultado12;
            
        } 
?>


</div>
</body>
</html>