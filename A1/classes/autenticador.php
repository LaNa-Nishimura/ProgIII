<?php
require_once 'usuario.php';

class Autenticador {
    private static $usuarios = [];

    // Registra um novo usuário
    public static function registrar(Usuario $usuario) {
        self::$usuarios[] = $usuario;
    }

    // Realiza o login de um usuário, percorrendo todos os usuários registrados
    public static function login($email, $senha) {
        foreach (self::$usuarios as $usuario) {
            // Verifica se o e-mail corresponde e se a senha é válida
            if ($usuario->getEmail() === $email && $usuario->autenticar($senha)) {
                return $usuario;
            }
        }
        return null;
    }

    // Usuário de teste
    public static function inicializarUsuarios() {
        self::registrar(new Usuario("Jake", "jake@gmail.com", "123"));
    }
}
?>