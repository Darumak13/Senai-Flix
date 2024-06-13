<?php   
include 'config.php';

$sql = "SELECT * FROM clientes_flix ";

$resultado = $conn -> query($sql);

?>

<table border="1" whidht='50%'>
    <tr>
      <th>ID</th>
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
        <td><a href = 'editar.php?id=".$linha['id']."'>Editar</td>
        <td><a href = 'deletar.php?id=".$linha['id']."'>Remover</a></td>
        </tr>";
    
    }
    
    ?>

    </table>