
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Assinaturas</h2>
    <form action="pages/assinaturas_cadastro_salvar.php" method="post">
        <label for="plano">Plano:</label>
        <input type="text" name="plano" placeholder="Informe o plano"> 

        <label for="data_inicio">Data Inicio</label>
        <input type="date" id="data_inicio" name="data_inicio"> 

        <label for="data_fim">Data Final</label>
        <input type="date" id="data_fim" name="data_fim"> <br>

        <label for="data_cadastro">Data de Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro">

        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <a href="index.php?pagina=assinaturas_listar">Voltar para a lista</a>
</body>
</html>