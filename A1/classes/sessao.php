<?php
class Sessao {

    // Método para iniciar a sessão
    public static function iniciar() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Método para armazenar um valor na sessão
    public static function set($chave, $valor) {
        $_SESSION[$chave] = $valor;
    }

    // Método para recuperar um valor da sessão
    public static function get($chave) {
        return $_SESSION[$chave] ?? null;
    }

    // Método para destruir a sessão
    public static function destruir() {
        session_destroy();
    }
}
?>