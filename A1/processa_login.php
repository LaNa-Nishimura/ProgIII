<?php
require_once 'classes/sessao.php';
require_once 'classes/autenticador.php';
require_once 'classes/usuario.php';

Sessao::iniciar();
Autenticador::inicializarUsuarios(); // Certifica que os usuários foram inicializados corretamente

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $lembrar = isset($_POST['lembrar']);

    // Faz o login com o Autenticador
    $usuario = Autenticador::login($email, $senha);

    if ($usuario) {
        Sessao::set('usuario', $usuario->getNome());

        // Salva o cookie
        if ($lembrar) {
            setcookie('lembrar_email', $email, time() + 86400 * 30);
        }

        header("Location: dashboard.php");
        exit;
    }
    
    else {
        echo "<p>Login inválido! Verifique seu e-mail e senha.</p><a href='login.php'>Tentar novamente</a>";
    }
}
?>