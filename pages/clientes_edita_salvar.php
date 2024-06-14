<?php

    include 'config.php';

    $id = $_GET['id'];
    if(!isset($_GET['id'])) {
        echo"Usuario não informado";
        exit();
    }
    
    // Segunda parte ( Salvando dados )
    if($_SERVER['REQUEST_METHOD'] == "POST"){
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

        $q = "UPDATE clientes_flix SET nome='$nome', cpf='$cpf', endereco='$endereco',  bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', 
                    email='$email', telefone='$telefone', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";
    
        if($conn->query($q) == TRUE){
            echo "Cadastro atualizado com sucesso";
        } else{
            echo "Erro ao editar";
        }
    }


    
    header('location: ../index.php?pagina=clientes_listar');
?>

