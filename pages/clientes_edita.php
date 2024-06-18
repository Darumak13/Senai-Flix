<?php 

    include 'config.php';

    $id = $_GET['id'];
    if(!isset($_GET['id'])) {
        echo"Usuario não informado";
        exit();
    }

    $q = "SELECT * FROM clientes_flix WHERE id='$id'";
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
<h2>Editar Cadastro do cliente</h2>
    <form action="pages/clientes_edita_salvar.php" method="post">
        Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>"> <br>
        CPF: <input type="text" name="cpf" value="<?php echo $linha['cpf']?>"> <br>
        Endereço: <input type="text" name="endereco" value="<?php echo $linha['endereco']?>"> <br>
        Bairro: <input type="text" name="bairro" value="<?php echo $linha['bairro']?>"> <br>
        Cidade: <input type="text" name="cidade" value="<?php echo $linha['cidade']?>"> <br>
        Estado: <input type="text" name="Estado" value="<?php echo $linha['estado']?>"> <br>
        CEP: <input type="text" name="cep" value="<?php echo $linha['cep']?>"> <br>
        E-mail: <input type="email" name="email" value="<?php echo $linha['email']?>"> <br>
        Telefone: <input type="text" name="telefone" value="<?php echo $linha['telefone']?>"> <br> 
        Data Cadastro: <input type="date" name="data_cadastro" value="<?php echo $linha['data_cadastro']?>"> <br>
        Data Atualização: <input type="date" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>"> <br>
        <input type="hidden" id="id" name="id" value="<?php echo $linha['id']?>"/>
        <input type="submit" value="Atualizar"> <br>
    </form>
    <br>
    <a href="index.php?pagina=clientes_listar">Voltar para a lista</a>
</body>
</html>