<?php

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

// echo "El precio del cafe Americano es de {$cafes['Americano']}";


$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),

);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];

echo "\n";

$juegos = [
    "Gta V" => [
        "fecha de lanzamiento" => "12/08/2012",
        "rating" => 5
    ],

    "Valorant" => [
        "fecha de lanzamiento" => "31/01/2019",
        "rating" => 4
    ]
    ];
    
echo "El nombre de mi juego favorito es Valorant y su valoracion es : " . $juegos["Valorant"]["rating"];
// no podemos acceder al nombre del arreglo anidado, ni a los mismo de manera directa,
// solo podemos acceder a una propiedad de ese arreglo anidado,
// la manera correcta para acceder a informacion de arreglos as0ociativos es :
// $nombre-de-la-variable["nombre del arreglo asociativo"]["dato del arreglo que queremos ver"].
var_dump($juegos);
?>