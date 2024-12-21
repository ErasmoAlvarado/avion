<?php

namespace app\Controllers;

use app\Models\Users;

final class AuthController
{
    public static function loginView($data){
        $user = new Users();
        return self::views("login", data: $user->allUser());
    }
    public static function RegisterView($data){
        $user = new Users();
        return self::views("register", data: $user->allUser());
    }

    public static function register($data){
        $user = new Users();
        $user->register($data['nombre'], $data['apellido'], $data['correo'], $data['cedula'], $data['contrasena']);
        header("Location: /avion/public");
    }

    public static function views($name, $data)
{
    extract($data);
    $path = __DIR__ . "/../../views/{$name}.php";
    if (file_exists($path)) {
        ob_start();
        include $path;
        $content = ob_get_clean();
        return $content;
    } else {
        return "File not found: {$path}";
    }
}

}
