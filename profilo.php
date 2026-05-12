<?php
session_start();

$nome = $_SESSION['user']['nome'] ?? "ospite";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <h1>Profilo utente</h1>

    <p>Benvenuto, <?php echo $nome; ?>!</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>