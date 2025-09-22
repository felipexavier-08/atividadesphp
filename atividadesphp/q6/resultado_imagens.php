<?php
$qtd = $_POST["quantidade"];

echo "<h2>Você escolheu $qtd imagens:</h2>";

for ($i = 1; $i <= $qtd; $i++) {
    echo "<img src='https://imgs.search.brave.com/vQv6AGRhqElKfDH0he-0JqeEoLxGtC2IAnsN1Oy9BzU/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuc2Vla2xvZ28u/Y29tL2xvZ28tcG5n/LzQ0LzEvZ29kb3Qt/bG9nby1wbmdfc2Vl/a2xvZ28tNDQxODA2/LnBuZw' width='100' style='margin:5px;'>";
}
?>
