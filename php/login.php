<?php
require_once 'conexao.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login bem-sucedido, cria a sessão
            $_SESSION['username'] = $user['username'];
            header("Location: sucesso.php");
            exit();
        } else {
            // Credenciais incorretas
            header("Location: erro.php");
            exit();
        }
    } catch (PDOException $e) {
        die("Erro ao buscar usuário: " . $e->getMessage());
    }
} else {
    header("Location: erro.php");
    exit();
}
?>
