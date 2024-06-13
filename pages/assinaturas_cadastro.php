<?php

    include 'config.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id_cliente = $_GET['id_cliente'];
        $plano = $_POST['plano'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $data_cadastro = date("Y-m-d H:i:s");;
        $data_atualizacao = date("Y-m-d H:i:s");;
        $status = 1;
 
        $sql = "INSERT INTO assinaturas(id_cliente, plano, data_inicio, data_fim, data_cadastro, data_atualizacao, status)VALUES('$id_cliente', '$plano', '$data_inicio', '$data_fim', '$data_cadastro', '$data_atualizacao', status)";

        if($conn -> query($sql)== TRUE){
            echo"Cadastro realizado com suceso!";
        } else {
            echo "Erro ao inserir no registro".$conn->error;
        }   
    }
    $resultado_assinaturas = $conn -> query("SELECT * FROM assinaturas WHERE status=1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Clientes</h2>
    <form method="post">
        <label for="plano">Plano:</label>
        <input type="text" name="plano" placeholder="Informe o plano"> 

        <label for="data_inicio">Data Inicio</label>
        <input type="date" id="data_inicio" name="data_inicio"> 

        <label for="data_fim">Data Final</label>
        <input type="date" id="data_fim" name="data_fim"> <br>

        <label for="data_cadastro">Data de Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro">

        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>