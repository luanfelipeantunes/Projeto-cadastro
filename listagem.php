<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <table cellspacing="0">
            <?php

            $conexao = new mysqli("localhost", "root", "123456", "cadastro");

            //listando os usuários
            $consulta = "SELECT * FROM users";
            $resultado = $conexao->query($consulta);

            echo "<tr>";
            echo "<td id='borda-esquerda-arredondada'>Nome</td>";
            echo "<td>Sobrenome</td>";
            echo "<td>E-mail</td>";
            echo "<td id='borda-direita-arredondada'>Senha</td>";
            echo "</tr>";

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['sobrenome'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['senha'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>Nenhum resultado encontrado</p>";
            }

            ?>
        </table>
    </main>

</body>

</html>