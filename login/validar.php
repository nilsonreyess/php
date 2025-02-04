<?php


// Funciones
function validar($user, $pass) {
    $datos = [
        "userdb" => "pepito",
        "passdb" => "12345"
    ];

    if ($user == $datos["userdb"] && $pass == $datos["passdb"]) {
        return true;
    } else {
        return false;
    }        
}
?>