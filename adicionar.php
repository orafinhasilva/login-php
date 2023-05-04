<?php

session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Caso não esteja, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Verifica se o usuário tem permissão para acessar a página
if ($_SESSION['nivel'] < 2) {
    // Caso não tenha, exibe uma mensagem de erro
    echo 'Você não tem permissão para acessar esta página.';
    exit;
}

// Verifica se o formulário de adição de usuário foi enviado
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['empresa']) && isset($_POST['nivel'])) {
    
    // Captura as informações do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $empresa = $_POST['empresa'];
    $nivel = $_POST['nivel'];
    
    // Prepara a consulta SQL para inserir o novo usuário no banco de dados
    $inserir = $pdo->prepare('INSERT INTO usuarios (nome, email, senha, empresa, nivel) VALUES (?, ?, ?, ?, ?)');
    
   // Executa a consulta, passando os parâmetros de nome, email, senha, empresa e nível
$inserir->execute([$nome, $email, $senha, $empresa, $nivel]);

// Redireciona de volta para a página de gerenciamento de usuários
header('Location: index.php');
exit;

}

?>

<form method="POST">
    <label>
        Nome:
        <input type="text" name="nome" required>
    </label>
    <br>
    <label>
        Email:
        <input type="email" name="email" required>
    </label>
    <br>
    <label>
        Senha:
        <input type="password" name="senha" required>
    </label>
    <br>
    <label>
        Empresa:
        <input type="text" name="empresa" required>
    </label>
    <br>
    <label>
        Nível:
        <select name="nivel" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </label>
    <br>
    <button type="submit">Adicionar</button>
</form>

<a href="index.php">Voltar</a>