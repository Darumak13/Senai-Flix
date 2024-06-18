<?php

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_cliente = $_POST['id_cliente'];
    $plano = $_POST['plano'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $data_cadastro = date("Y-m-d H:i:s");
    $data_atualizacao = date("Y-m-d H:i:s");
    $status = 1;

    $sql = "INSERT INTO assinaturas(id_cliente, plano, data_inicio, data_fim, data_cadastro, data_atualizacao, status)VALUES('$id_cliente', '$plano', '$data_inicio', '$data_fim', '$data_cadastro', '$data_atualizacao', status)";

    if ($conn->query($sql) == TRUE) {
        echo "Cadastro realizado com suceso!";
    } else {
        echo "Erro ao inserir no registro" . $conn->error;
    }
}
$resultado_assinaturas = $conn->query("SELECT * FROM assinaturas WHERE status=1");

header('location: ../index.php?pagina=assinaturas_listar');
?>
