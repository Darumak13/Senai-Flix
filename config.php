<?php 
        // Primeira parte ( Listagem ) 
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "senaiflix_daniels";
    
        $conn = new mysqli($servidor,$usuario,$senha,$banco);
        
        if ($conn->connect_error) {
            die("Erro conexão:" . $conn->connect_error);
        }
?>