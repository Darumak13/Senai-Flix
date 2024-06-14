<?php 

    include 'config.php';

    $id = $_GET['id'];
    if(!isset($_GET['id'])) {
        echo"Usuario não informado";
        exit();
    }

    $q = "SELECT * FROM filmes WHERE id='$id'";
    $resultado = $conn->query($q);

    if($resultado->num_rows <= 0){    
        echo"Usuário não encontrado";
        exit();
    }
    
    $linha = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h2>Editar Filme</h2>
    <form method="post">
        Titulo: <input type="text" name="titulo" value="<?php echo $linha['titulo']?>"> <br>
        descricao: <input type="text" name="descricao" value="<?php echo $linha['descricao']?>"> <br>
        Ano de Lançamento: <input type="number" min="1900" max="2099" step="1" name="ano_lancamento" id="ano_lancamento value="<?php echo $linha['ano_lancamento']?>"> <br>
        Gênero: <select name="" id="">
                    <option value="<?php echo $linha['genero']?>">Terror</option>
                    <option value="<?php echo $linha['genero']?>">Comedia</option>
                    <option value="<?php echo $linha['genero']?>">Ação</option>
                    <option value="<?php echo $linha['genero']?>">Suspense</option>
                </select> <br>
        Gênero: <select name="" id="">
                    <option value="<?php echo $linha['classificao']?>">Livre</option>
                    <option value="<?php echo $linha['classificao']?>">10</option>
                    <option value="<?php echo $linha['classificao']?>">14</option>
                    <option value="<?php echo $linha['classificao']?>">18+</option>
                </select> <br>
        Data Cadastro: <input type="date" name="data_cadastro" value="<?php echo $linha['data_cadastro']?>"> <br>
        Data Atualização: <input type="date" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>"> <br>
        <input type="submit" value="Atualizar"> <br>
    </form>
    <br>
    <a href="index.php?pagina=assinaturas_listar">Voltar para a lista</a>
</body>
</html>