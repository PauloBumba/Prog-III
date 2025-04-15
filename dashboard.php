<?php
require_once 'classes/Sessao.php';

Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}
?>

<h1>Bem-vindo, <?= $usuario->getNome() ?>!</h1>

<?php if (isset($_COOKIE['email'])): ?>
    <p>Email salvo no cookie: <?= $_COOKIE['email'] ?></p>
<?php endif; ?>

<a href="logout.php">Sair</a>
