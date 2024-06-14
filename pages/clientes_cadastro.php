
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Clientes</h2>
    <form action="pages/clientes_cadastro_salvar.php" method="post">
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