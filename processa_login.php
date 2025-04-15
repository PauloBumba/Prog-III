<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$email = $_POST['email'];
$senha = $_POST['senha'];
$lembrar = isset($_POST['lembrar']);

$usuario = Autenticador::login($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if ($lembrar) {
        setcookie('email', $email, time() + 3600 * 24 * 30);
    }

    header('Location: dashboard.php');
} else {
    echo "Login inválido!";
}
