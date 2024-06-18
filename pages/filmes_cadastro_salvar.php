<?php

    include 'config.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $ano_lancamento = $_POST['ano_lancamento'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $data_cadastro = date("Y-m-d H:i:s");;
        $data_atualizacao = date("Y-m-d H:i:s");
        $foto = $_FILES["foto"];
        $status = 1;

        // Diretório de destino para salvar o arquivo
        $diretorio_destino = "uploads/";

        $nome_arquivo = uniqid() . '' . basename($foto["name"]);

        // Gera um nome único para o arquivo
        $nome_arquivo = $diretorio_destino . $nome_arquivo;

        // Verifica a extensão do arquivo
        $extensoes_permitidas = array("jpg", "jpge","png","gif","webp", "jfif");
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        if (!in_array($extensao, $extensoes_permitidas)){
            echo "Somente arquivos JPG, JPGE, PNG, GIF, WEBP e JFIF são permitidos";
            exit();
        }

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($foto["tmp_name"],$caminho_arquivo)) {
            echo"O arquivo foi enviado com sucesso";
        } else {
            echo "Erro ao enviar o arquivo";
        }

        $sql = "INSERT INTO filmes(titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, foto, status)VALUES('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$data_cadastro', '$data_atualizacao', $nome_arquivo, status)";

        if($conn -> query($sql)== TRUE){
            echo"Cadastro realizado com suceso!";
        } else {
            echo "Erro ao inserir no registro".$conn->error;
        }   
    }
    $resultado_filmes = $conn -> query("SELECT * FROM filmes WHERE status=1");

    header('location: ..index.php?pagina=filmes_listar');
?>