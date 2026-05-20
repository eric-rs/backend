<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissão de Formulário</title>
</head>

<body>
    <p>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        //$_GET $_POST
        //$_GET é uma supervariavel que recebe informações do formulário via get
        //$_POST é uma supervariavel que recebe informações do formulário via post

        echo "<h1 style=\"color: #0051ff;\">Dados Recebidos</h1>";
        echo "Nome completo: " . $_POST['nome'] . " " . $_POST['sobrenome'] . "<br>";
        echo "Altura: " . $_POST['altura'] / 100 . " m e Peso: " . $_POST['peso'] . " kg" . "<br>";
        $dataSelecionada = $_POST["nascimento"];
        echo "<br>Data de Nascimento: " . $dataSelecionada;
        $date = new DateTime($dataSelecionada);
        $date2 = new DateTime();
        $idade = $date->diff($date2);
        echo "Idade: " . $idade->format('%Y Anos');
        $date->modify('30 minutes');
        $dataBrasileira = $date->format('d/m/y h:i:s');
        echo "<br>Data de Nascimento: " . $dataBrasileira;
        if ($_POST['sexo'] != "definir" && isset($_POST['horario']) && isset($_POST['area']) && !empty($_FILES['arquivo']['name'])) {
            echo "<br> Sexo: " . $_POST['sexo'];
            echo "<br>Horário(s) disponível(is): " . $_POST['horario'];
            echo "<br>Área(s) de Interesse:";
        ?>
    <ul>
        <?php
            foreach ($_POST['area'] as $indice => $valor) {
                echo "<li> $valor </li>";
            }
        ?>
    </ul>
    <?php
            $diretorio_destino = "uploads/"; // Pasta onde o arquivo será salvo
            $arquivo = $_FILES['arquivo'];
            $caminho = $diretorio_destino . $arquivo['name'];
            // Move o arquivo da pasta temporária para o destino final
            if (move_uploaded_file($arquivo['tmp_name'], $caminho)) {
    ?>
        <img src="<?php echo $caminho; ?>" alt="">
<?php
            } else {
                echo "Erro ao enviar o arquivo.";
            }
        } else {
            header('location:aula03.php');
        }
?>
</p>

<a href="aula03.php">Voltar</a>
</body>

</html>
