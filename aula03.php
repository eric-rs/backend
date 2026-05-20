<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>

<body>
    <h1 style="color: #0051ff;">Formulário de Cadastro</h1>
    <form action="receber1.php" method="post" enctype="multipart/form-data">
        Nome: <input type="text" name="nome" required>
        e Sobrenome: <input type="text" name="sobrenome" required><br><br>
        Data de Nascimento: <input type="date" name="nascimento" required> e
        Sexo:
        <select name="sexo">
            <option value="definir">Selecionar</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Intersexo</option>
        </select><br><br>
        Altura: <input type="number" name="altura" required> cm e
        Peso: <input type="number" name="peso" required> kg<br><br>
        Disponibilidade de Horário:<br>
        <input type="radio" name="horario" value="Matutino"> Manhã
        <input type="radio" name="horario" value="Vespertino"> Tarde
        <input type="radio" name="horario" value="Noturno"> Noite
        <input type="radio" name="horario" value="Diurno"> Dia
        <input type="radio" name="horario" value="Integral"> Integral
        <br><br>
        Área(s) de Interesse:<br>
        <input type="checkbox" name="area[]" value="Front End"> Front End
        <input type="checkbox" name="area[]" value="Back End"> Back End
        <input type="checkbox" name="area[]" value="Full Stack"> Full Stack
        <input type="checkbox" name="area[]" value="Mobile"> Mobile
        <br>
        <input type="checkbox" name="area[]" value="Análise de Dados"> Análise de Dados
        <input type="checkbox" name="area[]" value="Segurança"> Segurança
        <input type="checkbox" name="area[]" value="DevOps"> DevOps
        <input type="checkbox" name="area[]" value="Inteligência Artificial"> IA
        <br>
        <input type="checkbox" name="area[]" value="Outros"> Outros
        <input type="text" name="Outros" placeholder="Especifique se 'Outros'">
        <br><br>
        Foto de Perfil: <i>(Opcional)</i><br><input type="file" name="arquivo">
        <br><br>
        <input style="background-color: #0d3fac; color: white; padding: 10px 20px; border: none; cursor: pointer;" type="reset" value="Limpar Formulário">
        <input style="background-color: #078b0c; color: white; padding: 10px 20px; border: none; cursor: pointer;" type="submit" value="Submeter Inscrição">
    </form>
</body>

</html>
