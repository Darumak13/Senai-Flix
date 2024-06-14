<?php

    include 'config.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM clientes_flix WHERE id = '$id'";

    $resultado = $conn->query($sql);

    header('location: ../index.php?pagina=clientes_listar');
?>