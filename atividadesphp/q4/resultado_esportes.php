<?php
if (!empty($_POST["esportes"])) {
    echo "<h2>Você selecionou:</h2>";
    foreach ($_POST["esportes"] as $esporte) {
        echo "- $esporte <br>";
    }
} else {
    echo "Nenhum esporte selecionado.";
}
?>
