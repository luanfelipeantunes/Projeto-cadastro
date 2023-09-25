<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>



        <?php

        $conexao = new mysqli('localhost', "root", "123456", 'pessoas');
        if ($conexao->connect_error) {
            die("Erro na conexão" . $conexao->connect_error);
        }

        $stmt = $conexao->prepare("INSERT INTO usuários (nome, sobrenome, email, senha) VALUES (?,?,?,?)");

        $nome = $_REQUEST['nome'];
        $sobrenome = $_REQUEST['sobrenome'];
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];

        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);

        if ($stmt->execute()) {
            echo "<p>Inserção bem-sucedida!!</p>";
        } else {
            echo "Erro na inserção: " . $smtp->error;
        }
        ?>
    </main>

</body>

</html>