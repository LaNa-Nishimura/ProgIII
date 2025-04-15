<?php
$emailSalvo = $_COOKIE['lembrar_email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="processa_login.php">
        <label>E-mail:</label><br>
        <input type="email" id="email" name="email" required value="<?= htmlspecialchars($emailSalvo) ?>"><br><br>

        <label>Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="checkbox" id="lembrar" name="lembrar">
        <label>Lembrar e-mail</label><br><br>

        <input type="submit" value="Entrar">
    </form>

    <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>
