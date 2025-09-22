<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);

echo "<h2>Seu IMC é: $imc</h2>";

if ($imc > 25) {
    echo "Você está acima do peso!<br>";
} else {
    echo "Você está saudável!<br>";
}
?>
