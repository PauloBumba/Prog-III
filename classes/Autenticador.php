<?php
require_once 'usuario.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar(Usuario $usuario) {
        self::$usuarios[] = $usuario;
    }

    public static function login($email, $senha) {
        foreach (self::$usuarios as $usuario) {
            if ($usuario->autenticar($email, $senha)) {
                return $usuario;
            }
        }
        return null;
    }

    public static function getUsuarios() {
        return self::$usuarios;
    }
}
