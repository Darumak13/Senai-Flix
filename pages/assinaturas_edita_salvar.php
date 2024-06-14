<?php

    include 'config.php';

    $id = $_GET['id'];
    if(!isset($_GET['id'])) {
        echo"Usuario não informado";
        exit();
    }
    
    // Segunda parte ( Salvando dados )
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $plano = $_POST['nome'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
    
        $q = "UPDATE pets SET plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim',  data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";
    
        if($conn->query($q) == TRUE){
            echo "Cadastro atualizado com sucesso";
        } else{
            echo "Erro ao editar";
        }
    }


    
    header('location: ../index.php?pagina=assinaturas_listar');
?>

