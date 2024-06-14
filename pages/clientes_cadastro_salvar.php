<?php

    include 'config.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_cadastro = date("Y-m-d H:i:s");;
        $data_atualizacao = date("Y-m-d H:i:s");;
        $status = 1;

        $sql = "INSERT INTO clientes_flix(nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro, data_atualizacao, status)VALUES('$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$email', '$telefone', '$data_cadastro', '$data_atualizacao', status)";

        if($conn -> query($sql)== TRUE){
            echo"Cadastro realizado com suceso!";
        } else {
            echo "Erro ao inserir no registro".$conn->error;
        }   
    }
    $resultado_clientes_flix = $conn -> query("SELECT * FROM clientes_flix WHERE status=1");

    header('location: ../index.php?pagina=clientes_listar');
?>
