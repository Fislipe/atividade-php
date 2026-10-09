<?php

try {
    $pdo = new PDO(
        'mysql:host=db;dbname=loja;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    echo 'conectou';
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
