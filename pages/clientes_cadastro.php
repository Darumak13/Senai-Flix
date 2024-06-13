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
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Informe o seu nome"> 

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail"> 

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe o seu CPF"><br>

        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" placeholder="Informe o seu endereço"> 

        <label for="bairro">Bairro</label>
        <input type="text" id="bairro" name="bairro" placeholder="Infome o seu bairro"> <br>

        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" placeholder="Informe a sua cidade"> 

        <label for="estado">Estado</label>
        <input type="text" id="estado" name="estado" placeholder="Informe o seu estado"> <br>

        <label for="cep">CEP</label>
        <input type="text" id="cep" name="cep"  placeholder="Informe o seu cep">

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone"><br>

        <label for="data_cadastro">Data de Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro">

        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>