<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Victor Hugo</p>

    <?php
    // 1. Entero
    // $entero = 42;

    // 2. Flotante
    // $flotante = 3.14;

    // 3. Cadena de texto
    // $cadena = "Hola, mundo!";

    // 4. Booleano
    // $booleano = true;

    // 5. Array (arreglo)
    // $array = array("Manzana", "Banana", "Cereza");

    // 6. Objeto
    // class Persona {
    //     public $nombre;
    //     public $edad;

    //     public function __construct($nombre, $edad) {
    //         $this->nombre = $nombre;
    //         $this->edad = $edad;
    //     }
    // }
    // $objeto = new Persona("Juan", 25);

    // 7. Nulo
    // $nulo = null;

    // Imprimir los tipos de datos
    // echo "Entero: " . $entero . "</br>";
    // echo "Flotante: " . $flotante . "</br>";
    // echo "Cadena: " . $cadena . "</br>";
    // echo "Booleano: " . ($booleano ? 'Verdadero' : 'Falso') . "</br>";
    // echo "Array: " . implode(", ", $array) . "</br>";
    // echo "Objeto: Nombre - " . $objeto->nombre . ", Edad - " . $objeto->edad . "</br>";
    // echo "Nulo: " . ($nulo === null ? 'Es nulo' : 'No es nulo') . "</br>";
    ?>

</body>

</html>
=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 10px;
            float: left;
        }

        td,
        th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <h1>Tablas de Multiplicar del 1 al 12</h1>

    <?php
    // Generar tablas del 1 al 12
    foreach (range(1, 12) as $tabla) {
        echo "<table>";
        echo "<tr><th colspan='2'>Tabla del $tabla</th></tr>";

        // Generar multiplicaciones del 1 al 12
        foreach (range(1, 12) as $i) {
            $resultado = $tabla * $i;
            echo "<tr>";
            echo "<td>$tabla x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
    <div class="clear"></div>
</body>

</html>
>>>>>>> REPLACE