<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Victor Hugo</p>

    <?php
    // Imprimir mensaje desde PHP
    echo "Imprimido de PHP <br>";

    $dato_1 = 1;
    $dato_2 = 2;

    // Asegúrate de usar paréntesis correctamente para la concatenación
    echo "El resultado es: " . ($dato_1 + $dato_2) . "<br>";
    echo "Incremento: " . ($dato_1 + 1) . "<br>";

    // Usar llaves {} en lugar de paréntesis () para los bloques if
    if ($dato_2 == 2) {
        echo "No es igual<br>";
    } else if ($dato_2 === 100) {
        echo "Sí es igual<br>";
    }
    ?>

    <hr>

    <?php
    // Declaración de variables
    $nombre = "Victor";    
    $edad = 30;       
    $altura = 1.75;     
    $esEstudiante = true;  
    $materias = array("Matemáticas", "Física", "Química"); // Una variable de tipo array

    // Imprimir las variables
    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Altura: " . $altura . "<br>";
    echo "Es estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>";
    echo "Materias: " . implode(", ", $materias) . "<br>";
    ?>

    <hr>

    <?php
    $materias = array("siuuu", "saoo", "souuu", "look", "abcd");

    for ($i = 0; $i < count($materias); $i++) {
        echo "Materia " . ($i + 1) . ": " . $materias[$i] . "<br>";
    }
    ?>
    
     <?php
    //Hacer todas las tablas de multiplicar del 1 al 12 y que imprimir en pantalla.
// Iterar del 1 al 12 para las tablas de multiplicar
//for ($i = 1; $i <= 12; $i++) {
    //echo "Tabla de multiplicar del $i:\n";
    
    // Multiplicar del 1 al 10
    //for ($j = 1; $j <= 10; $j++) {
        //$resultado = $i * $j;
        //echo "$i x $j = $resultado\n";
    //}
    
    // Agregar una línea en blanco para separar las tablas
    //echo "\n";
//}
    ?>
</body>
</html>