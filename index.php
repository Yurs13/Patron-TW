<?php

// 100 nombres
$nombres = [
    'Carlitos','Pedro','Luis','Carlos','Miguel','José','Jorge','Andrés','Fernando','Diego',
    'Ricardo','Eduardo','Manuel','Antonio','Francisco','Raúl','Hugo','Arturo','Sergio','Mario',
    'Alberto','Roberto','Emilio','Iván','Víctor','Adrián','Daniel','David','Pablo','Esteban',
    'Cristian','Felipe','Gustavo','Ramón','Héctor','Salvador','Ángel','Julio','Gerardo','Tomás',
    'Enrique','Guillermo','Leonardo','Marco','Nicolás','Oscar','Patricio','René','Samuel','Ulises',
    'Xavier','Yair','Zaid','Bruno','César','Damián','Elías','Fabián','Gael','Iker',
    'Javier','Kevin','Lorenzo','Maximiliano','Hugo','Octavio','Pascual','Misael','Rafael','Sebastián',
    'Tadeo','Uriel','Valentín','Walter','Ximeno','Yael','Zacarías','Aarón','Benjamín','Camilo',
    'Dario','Efraín','Franco','Gonzalo','Ale','Ismael','Joel','Kurt','Leandro','Matías',
    'Norberto','Orlando','Joshua','Ramiro','Saúl','Oswaldo','Ubaldo','Vicente','Wilfredo','Zabdiel'
];

// 100 apellidos
$apellidos = [
    'García','Martínez','López','Hernández','González','Pérez','Rodríguez','Sánchez','Ramírez','Cruz',
    'Flores','Gómez','Morales','Vázquez','Reyes','Jiménez','Torres','Díaz','Castro','Ortiz',
    'Rubio','Mendoza','Silva','Romero','Herrera','Medina','Aguilar','Vega','Castillo','Ramos',
    'Navarro','Delgado','Campos','Rojas','Guerrero','Molina','Ortega','Soto','Cortés','Ibarra',
    'Fuentes','Carrillo','Mejía','Cabrera','Peña','Valdez','Núñez','Salazar','Montes','Escobar',
    'Pacheco','Rosales','Bravo','Acosta','Solís','Cárdenas','Franco','Velasco','Zamora','Miranda',
    'Orozco','Galindo','Pineda','Rivera','Valencia','Correa','Ayala','Serrano','Lara','Lopez',
    'Tapia','Aguirre','Calderón','Santana','Esquivel','Trejo','Figueroa','Barajas','Palacios','Arellano',
    'Villanueva','León','Cuevas','Beltrán','Cisneros','Saucedo','Amador','Bautista','Escamilla','Zavala',
    'Zúñiga','Márquez','Benítez','Quintero','Bustamante','Coronado','Castañeda','Porruas','Cervantes','Ledesma'
];

$resultado = [];

while (count($resultado) < 1000) {

    $nombreCompleto =
        $nombres[array_rand($nombres)] . " " .
        $nombres[array_rand($nombres)] . " " .
        $apellidos[array_rand($apellidos)] . " " .
        $apellidos[array_rand($apellidos)];

    // Evita duplicados
    if (!isset($resultado[$nombreCompleto])) {
        $resultado[$nombreCompleto] = true;
    }
}

// Arreglo final
$resultadoFinal = array_keys($resultado);

// Mostrar resultado
echo "<pre>";
print_r($resultadoFinal);
echo "</pre>";

