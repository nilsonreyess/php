<?php
$edad = 35;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad...";
}

switch ($edad) {
    case 15:
        echo "Tienes 15 años";
        break;

    case 35:
        echo "Tienes 35 años";
        break;
    
    default:
        echo "Tienes n años";
        break;
}


?>