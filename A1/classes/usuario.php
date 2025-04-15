<?php

class Usuario {
    private $nome;
    private $email;
    private $senhaHash; // Armazenar o hash da senha

    // Construtor que recebe nome, e-mail e senha
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        // Criptografa a senha com password_hash
        $this->senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    }

    // Método para obter o e-mail do usuário
    public function getEmail() {
        return $this->email;
    }

    // Método para autenticar o usuário, comparando a senha fornecida com o hash da senha armazenada
    public function autenticar($senha) {
        return password_verify($senha, $this->senhaHash);
    }

    // Método para obter o nome do usuário
    public function getNome() {
        return $this->nome;
    }
}

?>