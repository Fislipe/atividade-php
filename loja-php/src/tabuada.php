<form>
    <input name="numero" placeholder="Digite um número">
    <button> Calcular Tabuada</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = intval($_POST["numero"]);
    echo "<h2>Tabuada do $numero</h2>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$numero x $i = " . ($numero * $i) . "</p>";
    }
}
?>
