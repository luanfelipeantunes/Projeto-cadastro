        <?php

        $conexao = new mysqli('localhost', "root", "123456", 'cadastro');
        if ($conexao->connect_error) {
            die("Erro na conexão" . $conexao->connect_error);
        }

        $stmt = $conexao->prepare("INSERT INTO users (nome, sobrenome, email, senha) VALUES (?,?,?,?)");

        $nome = $_REQUEST['nome'];
        $sobrenome = $_REQUEST['sobrenome'];
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];

        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);

        $stmt->execute();

        if ($stmt->error) {
            echo "<p>Houve um erro na inserção dos dados!!</p>";
        }else{
            header("Location: listagem.php");
        }

        $conexao->close();


        ?>
