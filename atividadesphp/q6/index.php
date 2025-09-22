<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imagens</title>
</head>
<body>
    <h2>Selecione um número de 1 a 10</h2>
    <form action="resultado_imagens.php" method="post">
        <select name="quantidade">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
