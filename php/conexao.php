<?php

$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'nome_do_banco';


try {


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
