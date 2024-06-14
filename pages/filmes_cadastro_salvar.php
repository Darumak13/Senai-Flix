<?php

    include 'config.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $ano_lancamento = $_POST['ano_lancamento'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $data_cadastro = date("Y-m-d H:i:s");;
        $data_atualizacao = date("Y-m-d H:i:s");;
        $status = 1;

        $sql = "INSERT INTO filmes(titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, status)VALUES('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$data_cadastro', '$data_atualizacao', status)";

        if($conn -> query($sql)== TRUE){
            echo"Cadastro realizado com suceso!";
        } else {
            echo "Erro ao inserir no registro".$conn->error;
        }   
    }
    $resultado_filmes = $conn -> query("SELECT * FROM filmes WHERE status=1");

    header('location: ..index.php?pagina=filmes_listar');
?>