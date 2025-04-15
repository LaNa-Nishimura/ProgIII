<?php
require_once 'classes/usuario.php';
require_once 'classes/autenticador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtém os dados do formulário. Caso a chave não exista, atribui um valor vazio.
    $nome  = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Verifica se todos os campos foram preenchidos
    if ($nome && $email && $senha) {
        
        // Cria um novo objeto da classe 'Usuario' com os dados fornecidos
        $usuario = new Usuario($nome, $email, $senha);
        
        // Chama o método 'registrar' da classe 'Autenticador' para registrar o usuário
        Autenticador::registrar($usuario);
        
        // Exibe uma mensagem de sucesso e fornece um link para a página de login
        echo "<p>Cadastro realizado com sucesso!</p><a href='login.php'>Ir para login</a>";
    }
    
    else {
        // Exibe uma mensagem de erro se algum campo não foi preenchido
        echo "<p>Todos os campos são obrigatórios.</p><a href='cadastro.php'>Voltar</a>";
    }
}
?>