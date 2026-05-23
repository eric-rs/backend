<?php
    session_start();
    if (empty($_SESSION['login']) && empty($_SESSION['senha'])) {
        header('location:aula05.php');
    } else if ($_SESSION['nivel'] == "user") {
        header('location:usuario.php');
    } else {
        echo $_SESSION['login'];
?>
        <br>
<?php
        echo $_SESSION['senha'];
?>
        <br>
<?php
        echo $_SESSION['nivel'];
    }
?>
        <br>
        <a href="fechar.php">Sair do Sistema</a>