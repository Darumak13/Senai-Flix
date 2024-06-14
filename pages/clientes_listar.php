<?php   
include 'config.php';

$sql = "SELECT * FROM clientes_flix ";

$resultado = $conn -> query($sql);

?>
  
  <style type="text/css">
    /*Configurações Padrões*/
    ul.menu,
    .menu li,
    .menu a {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }

    ul.menu ul {
        position: absolute;
        display: none;
        box-shadow: 3px 3px 2px #333;
    }

    /* Configurações nivel 1*/
    ul.menu {
        float: left;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 15px;
        border-radius: 5px;
        padding: 0 5px;
    }

    .menu li {
        float: left;
        width: auto;
        position: relative;
    }

    .menu li a {
        display: block;
        padding: 0 20px;
        line-height: 45px;
        height: 45px;
        float: left;
        transition: all 0.1s linear;
    }

    /* Configurações nivel 2*/
    .menu li:hover>ul.submenu-1 {
        display: block;
        top: 45px;
        left: 0;
        padding: 5px;
        width: 200px;
        border-radius: 0 0 5px 5px;
    }

    .menu ul.submenu-1 a {
        width: 160px;
        padding: 0 20px;
        border-radius: 5px;
    }

    /* Configurações nivel 2*/
    .menu li:hover>ul.submenu-2 {
        display: block;
        top: 0;
        left: 195px;
        padding: 5px;
        width: 200px;
        border-radius: 0 5px 5px 5px;
    }

    .menu ul.submenu-2 a {
        width: 160px;
        padding: 0 20px;
        border-radius: 5px;
    }

    /* Configurações nivel 3*/
    .menu li:hover>ul.submenu-3 {
        display: block;
        top: 0;
        left: 195px;
        padding: 5px;
        width: 200px;
        border-radius: 0 5px 5px 5px;
    }

    .menu ul.submenu-3 a {
        width: 160px;
        padding: 0 20px;
        border-radius: 5px;
    }


    /*Configurações de cores*/

    /*nivel 1*/
    .menu {
        background: #CCC;
    }

    .menu a {
        color: #000;
    }

    .menu li:hover>a {
        background: #999;
        color: #fff;
    }

    /*nivel 2*/
    .submenu-1 {
        background: #999;
    }

    .submenu-1 a {
        color: #fff;
    }

    .submenu-1 li:hover>a {
        background: #666;
    }

    /*nivel 3*/
    .submenu-2 {
        background: #666;
    }

    .submenu-2 a {
        color: #fff;
    }

    .submenu-2 li:hover>a {
        background: #333;
    }

    /*nivel 3*/
    .submenu-3 {
        background: #333;
    }

    .submenu-3 a {
        color: #fff;
    }

    .submenu-3 li:hover>a {
        background: #000;
    }
</style>

<ul class="menu">
    <!-- Esse é o 1 nivel ou o nivel principal -->
    <li><a href="#">Opções</a>
        <ul class="submenu-1">
            <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="index.php?pagina=clientes_cadastro">Cadastrar</a></li>
            <li><a href="#">Submenu 2</a></li>
            <li><a href="#">Submenu 3</a>
            </li>
        </ul>
</ul>

<br>
<br>
<br>
<br>
<br>

<div style="margin-top: 10%">

<table border="1" whidht='50%'>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Cep</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Data do Cadastro</th>
    <th>Data da atualização</th>
    <th>Editar</th>
    <th>Remover</th>      
    </tr>
    
    <?php
    while($linha = $resultado->fetch_assoc()){
      echo"<tr> 
      <td>".$linha['id']."</td>
      <td>".$linha['nome']."</td>
      <td>".$linha['cpf']."</td>
        <td>".$linha['endereco']."</td>
        <td>".$linha['bairro']."</td>
        <td>".$linha['cidade']."</td>
        <td>".$linha['estado']."</td>
        <td>".$linha['cep']."</td>
        <td>".$linha['email']."</td>
        <td>".$linha['telefone']."</td>
        <td>".$linha['data_cadastro']."</td>
        <td>".$linha['data_atualizacao']."</td>
        <td><a href = 'index.php?pagina=clientes_edita&id=".$linha['id']."'>Editar</td>
        <td><a href = 'index.php?pagina=clientes_remover&id=".$linha['id']."'>Remover</a></td>
        </tr>";
        
        }
        
        ?>

</table>
</div>