<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="processa_cadastro.php">
        <label>Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label>E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <p>Já tem uma conta? <a href="login.php">Fazer login</a></p>
</body>
</html>