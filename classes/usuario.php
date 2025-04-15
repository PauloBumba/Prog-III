<?php
class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = htmlspecialchars($nome);
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function autenticar($email, $senha) {
        return $this->email === $email && password_verify($senha, $this->senha);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
}
