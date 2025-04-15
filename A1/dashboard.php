<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$nomeUsuario = $_SESSION['usuario'];
$emailSalvo = $_COOKIE['lembrar_email'] ?? 'Não encontrado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($nomeUsuario) ?>!</h2>
    <p>E-mail associado: <?= htmlspecialchars($emailSalvo) ?></p>

    <p><a href="logout.php">Sair</a></p>
</body>
</html>
