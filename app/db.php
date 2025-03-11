<?php   
$data_users = [
    [
        "fullname" => "Pepito Pérez",
        "username" => "admin",
        "password" => "123456"
    ],
    [
        "fullname" => "Juanito Alimaña",
        "username" => "guest",
        "password" => "guest"
    ]
];

$products = [
    [
        "id" => 1,
        "codigo" => "PRD001",
        "producto" => "Producto 001",
        "stock" => 10
    ],
    [
        "id" => 2,
        "codigo" => "PRD002",
        "producto" => "Producto 002",
        "stock" => 4
    ],
    [
        "id" => 25,
        "codigo" => "PRD003",
        "producto" => "Producto 003",
        "stock" => 125
    ],
    [
        "id" => 28,
        "codigo" => "PRD004",
        "producto" => "Producto 004",
        "stock" => 0
    ]
];


function validate_user($username, $password, $data_users) {
    $permit = false;

    for ($i=0; $i < count($data_users); $i++) { 
        if ($username == $data_users[$i]["username"] && $password == $data_users[$i]["password"]) {
            setcookie('USERNAME', $data_users[$i]["username"]);
            setcookie('FULLNAME', $data_users[$i]["fullname"]);
            //setcookie('PRODUCTOS', '');
            $permit = true;
        }
    }

    return $permit;
}






?>