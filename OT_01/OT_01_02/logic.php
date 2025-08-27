<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["number"];
    
    if (is_numeric($numero)) {
        if ($numero % 2 == 0) {
            echo "<div class='result even'>O número $numero é PAR! 🌸</div>";
        } else {
            echo "<div class='result odd'>O número $numero é ÍMPAR! 🌸</div>";
        }
    } else {
        echo "<div class='result'>Por favor, digite um número válido!</div>";
    }
}
?>