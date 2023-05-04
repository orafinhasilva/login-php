<?php
include('conexao.php');

$sql_code = "SELECT nome, email, ultimo_login FROM usuarios WHERE ultimo_login >= DATE_SUB(NOW(), INTERVAL 5 MINUTE)";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if ($quantidade > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>E-mail</th>";
    echo "<th>Último Login</th>";
    echo "</tr>";
    while ($usuario = $sql_query->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $usuario['nome'] . "</td>";
        echo "<td>" . $usuario['email'] . "</td>";
        echo "<td>" . $usuario['ultimo_login'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há usuários online no momento.";
}
?>
