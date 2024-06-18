<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de filmes</h2>
    <form action="pages/filmes_cadastro_salvar.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" placeholder="Informe o titulo do filme"> 

        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" placeholder="Faça uma breve descrição do filme"> 

        <label for="ano_lancamento">Ano de Lançamento</label>
        <input  type="number" min="1900" max="2099" step="1" value="2024" name="ano_lancamento" id="ano_lancamento"><br>

        <label for="genero">Gênero</label>
            <select name="genero" id="genero">
                <option value="terror">Terror</option>
                <option value="comedia">Comédia</option>
                <option value="acao">Ação</option>
                <option value="suspense">Suspense</option>
            </select>

        <label for="classificacao">Classificação</label>
            <select name="classificacao" id="classificacao" placeholder="Informe a classificação do filme">
                <option value="terror">Livre</option>
                <option value="comedia">10</option>
                <option value="acao">14</option>
                <option value="suspense">18+</option>
            </select>
        
        <label for="data_cadastro">Data de Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro"> 

        <br>

        <input type="file" id="foto" value="foto">

        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>