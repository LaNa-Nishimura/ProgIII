<?php
session_start();
session_destroy(); // Destroi todas as variáveis de sessão
setcookie('lembrar_email', '', time() - 3600); // Apaga o cookie do e-mail
header("Location: login.php");
exit;
