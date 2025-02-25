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


function validate_user($username, $password, $data_users) {
    $permit = false;

    for ($i=0; $i < count($data_users); $i++) { 
        if ($username == $data_users[$i]["username"] && $password == $data_users[$i]["password"]) {
            $permit = true;
        }
    }

    return $permit;
}






?>