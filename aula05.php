<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credenciamento</title>
</head>
<body>
    <h1>Boas-vindas ao sistema de credenciamento.</h1>
    <p>Insira suas credenciais para acessar seu perfil:</p><br>
    <form method="POST">
        Login: <input type="text" name="login" placeholder="Digite seu usuário">
        <br><br>
        Senha: <input type="password" name="senha" placeholder="Digite sua senha">
        <br><br>
        <input style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px;" type="submit" value="Acessar">
    </form>
    <div>
        <?php
            session_start();
            if (isset($_POST['login']) && isset($_POST['senha'])) {
                echo "Faça login para acessar seu perfil.";
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                if ($login == "eric_u" && $senha == "123") {
                    $_SESSION['login'] = $login;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nivel'] = "user";
                    header('location:usuario.php');
                } else if ($login == "eric_a" && $senha == "123") {
                    $_SESSION['login'] = $login;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nivel'] = "admin";
                    header('location:administrador.php');
                } else {
                    echo "Usuário ou senha inválidos!";
                }
            }
        ?>
    </div>
</body>
</html>