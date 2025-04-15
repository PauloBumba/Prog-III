<?php
require_once 'classes/usuario.php';
require_once 'classes/Autenticador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar($usuario);

    header('Location: login.php');
    exit;
}

