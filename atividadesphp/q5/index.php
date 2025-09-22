<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Faixa Etária</title>
</head>
<body>
    <h2>Selecione sua faixa etária</h2>
    <form action="resultado_idade.php" method="post">
        <input type="radio" name="faixa" value="Menor de 18 anos"> Menor de 18 anos<br>
        <input type="radio" name="faixa" value="18 a 35 anos"> Entre 18 e 35 anos<br>
        <input type="radio" name="faixa" value="35 a 65 anos"> Entre 35 e 65 anos<br>
        <input type="radio" name="faixa" value="Acima de 65 anos"> Acima de 65 anos<br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

