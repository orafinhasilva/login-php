<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] !== true) {
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

// Inclui o arquivo que faz a conexão com o banco de dados
require_once('conexao.php');

// Define a consulta SQL para buscar todos os usuários
$consulta = $pdo->prepare('SELECT * FROM usuarios');
$consulta->execute();
$usuarios = $consulta->fetchAll();

?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Empresa</th>
            <th>Nível</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['empresa'] ?></td>
                <td><?= $usuario['nivel'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $usuario['id'] ?>">Editar</a>
                    <a href="remover.php?id=<?= $usuario['id'] ?>">Remover</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="adicionar.php">Adicionar novo usuário</a>
<a href="logout.php">Sair</a>
