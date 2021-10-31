<?php
try {
    $conn = new PDO(
        'mysql:dbhost=localhost;dbname=todoaction',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ]
    );
} catch (PDOException $e) {
    return $e->getMessage();
}
