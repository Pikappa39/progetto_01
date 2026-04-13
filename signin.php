<?php
session_start();
require "conn.php";

$stmt = $pdo->prepare("SELECT * FROM utenti WHERE email = ?");
$stmt->execute([$_POST['email3']]);
$user = $stmt->fetch();

if ($user && password_verify($_POST['password3'], $user['password'])) {
        $_SESSION['user'] = [
        "id" => $user["id"],
        "nome" => $user["nome"]
    ];

    echo "Login OK";
} else {
    echo "Errore login";
}
?>
