<?php
// Variables
$nombre = "Pepito Pérez";

// Arrays
/* $numeros = array(1, 2, 3, 4, 5);

var_dump($numeros);
echo "<br>";
print_r($numeros);
echo "<br>";
echo $numeros[2]; */

/* $frutas = array("Banano", "Pera", "Manzana", "Melón");
var_dump($frutas);
echo "<br>";
print_r($frutas);
echo "<br>";
echo $frutas[0]; */

// Usuario, Password, Administrador
/* $datos = ["usuario", "12345678", true, 12345];
var_dump($datos);
$datos[1] = "Pepito123";
echo "<br>";
print_r($datos); */

// Arrays asociativos
/* $personas = [
    "nombre" => "Pepito",
    "apellido" => "Pérez",
    "celular" => "3211234567"
];

var_dump($personas);
echo "<br>";
print_r($personas);
echo "<br>";
echo $personas["apellido"]; */


// Matrices
/*  1 2 3
    4 5 6
    7 8 9 */
/* $matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

var_dump($matriz);
echo "<br>";
var_dump($matriz[1]);
echo "<br>";
echo $matriz[1][1]; */

// Matrices asociativas
/* "nombre" = "nombre"
"apellido" = "apellido"
"correo" = "correo" */
$people = [
    [
        "nombre" => "Pepito",
        "apellido" => "Pérez",
        "correo" => "pepe@correo.com"
    ],
    [
        "nombre" => "Juanito",
        "apellido" => "Alimaña",
        "correo" => "juanito@correo.com"
    ],
    [
        "nombre" => "Paquita",
        "apellido" => "La del Barrio",
        "correo" => "paquita@correo.com"
    ]
];

var_dump($people);
echo "<br>";
print_r($people);
echo "<br>";
echo $people[2]["apellido"];


?>