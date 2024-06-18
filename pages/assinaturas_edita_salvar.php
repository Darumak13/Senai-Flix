<?php

    include 'config.php';

    if(!isset($_POST['id'])) {
        echo"Usuario não informado";
        exit();
    }
    
    $id = $_POST['id'];

    // Segunda parte ( Salvando dados )
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id_cliente = $_POST['id_cliente'];
        $plano = $_POST['plano'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 1;
        
        $q = "UPDATE assinaturas SET id_cliente='$id_cliente', plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim',  data_cadastro='$data_cadastro', 
                                data_atualizacao='$data_atualizacao' WHERE id='$id'";
    
        if($conn->query($q) == TRUE){
            echo "Cadastro atualizado com sucesso";
        } else{
            echo "Erro ao editar";
        }
    }


    
    header('location: ../index.php?pagina=assinaturas_listar');
?>

