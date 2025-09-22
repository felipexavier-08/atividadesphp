<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esportes</title>
</head>
<body>
    <h2>Selecione seus esportes favoritos</h2>
    <form action="resultado_esportes.php" method="post">
        <input type="checkbox" name="esportes[]" value="Natação"> Natação<br>
        <input type="checkbox" name="esportes[]" value="Futebol"> Futebol<br>
        <input type="checkbox" name="esportes[]" value="Vôlei"> Vôlei<br>
        <input type="checkbox" name="esportes[]" value="Basquete"> Basquete<br>
        <input type="checkbox" name="esportes[]" value="Tênis"> Tênis<br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

