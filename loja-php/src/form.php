<form>
    <input name="nome" placeholder="Digite seu nome">
    <button> Enviar</button>
</form>


<?php

$_SERVER["REQUEST_METHOD"] === "POST" ? var_dump($_POST) : null;