<?php 

    include 'config.php';

    if(!isset($_GET['id'])) {
        echo"Usuario não informado";
        exit();
    }
    
    $id = $_GET['id'];

    $q = "SELECT * FROM assinaturas WHERE id='$id'";
    $sql = "SELECT * FROM clientes_flix";

    $resultado = $conn->query($q);
    $resul = $conn -> query($sql);
    
    if($resultado->num_rows <= 0){    
        echo"Usuário não encontrado";
        exit();
    }
    
    if($resul->num_rows <= 0){    
        echo"Usuário não encontrado";
        exit();
    }
    
    $linha = $resultado->fetch_assoc();
    $linha2 = $resul->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h2>Editar Plano</h2>
    <form action="pages/assinaturas_edita_salvar.php" method="post">
        Plano: <input type="text" name="plano" value="<?php echo $linha['plano']?>"> <br>
        <label for="plano">Cliente:</label>
        <select name="id_cliente">
            <option value="<?php echo $linha2['id']; ?>"><?php echo $linha2['nome']; ?></option>
        </select> <br>
        Data Inicio: <input type="date" name="data_inicio" value="<?php echo $linha['data_inicio']?>"> <br>
        Data Fim: <input type="date" name="data_fim" value="<?php echo $linha['data_fim']?>"> <br>
        Data Cadastro: <input type="date" name="data_cadastro" value="<?php echo $linha['data_cadastro']?>"> <br>
        Data Atualização: <input type="date" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>"> <br>
        <input type="submit" value="Atualizar"> <br>
    </form>
    <br>
    <a href="index.php?pagina=assinaturas_listar">Voltar para a lista</a>
</body>
</html>