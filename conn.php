<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
    // Attiva modalità di errore eccezioni
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connessione fallita: " . $e->getMessage());
}
?>