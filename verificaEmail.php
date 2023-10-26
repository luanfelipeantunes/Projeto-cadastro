<?php 
    $email = $_REQUEST['email'];
    $conexao = new mysqli("localhost", "root", "123456", "cadastro");

    $stmt = $conexao -> prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if($resultado->num_rows > 0){
        echo "existe";
    }else{
        echo "nExiste";
    }

    $conexao->close();

?>