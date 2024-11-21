<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="container mt-5">
        <h1>PHP BÁSICO</h1>
        <ul>
            <ol>1. Operaciones con String</ol>
            <ol>2. Operaciones Aritmeticos</ol>
            <ol>3. Tipos de datos</ol>
            <ol>4. Operaciones con Array</ol>
            <ol>5. Condicionales</ol>
            <ol>6. Ciclos</ol>
            <ol>7. Salir</ol>
        </ul>
        <h6>Formulario</h6>
        <hr>
        <form method="POST" action="">
            <div class="form-group">
                <label for="numero">Ingresar Número</label>
                <input type="number" name="numero" id="numero" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php

    include "./OperadoresLogicos.php";
    include "./OperacionesString.php";
    include "./OperacionesAritmeticos.php";
    include "./Tiposdedatos.php";
    include "./OperacionesconArray.php";
    include "./Condicionales.php";
    include "./Ciclos.php";

    if (isset($_GET["precio"])) {
        echo $_GET["precio"];
    }

    if (isset($_GET["fruta"])) {
        echo $_GET["fruta"];
    }

    if (isset($_POST["numero"])) {
        $opcion = $_POST["numero"];
        switch ($opcion) {
            case 1:
                $os = new OperacionesString();
                echo "</br>";
                echo "Ingreso al caso número 1";
                //$os->saludo();
                //$os->llamarPadre();
                $os->funcionesString();
                echo "</br>";
                break;

            case 2:
                $os = new OperacionesAritmeticos();
                echo "</br>";
                echo "Ingreso al caso número 2";
                $os->funcionesAritmeticas();
                echo "</br>";
                break;


            case 3:
                $os = new Tiposdedatos();
                echo "</br>";
                echo "Ingreso al caso número 3";
                $os->tiposdedatosenphp();
                echo "</br>";
                break;
            case 4:
                $os = new OperacionesconArray();
                echo "</br>";
                echo "Ingreso al caso número 4";
                $os->OperacionesconArrayenphp();
                echo "</br>";
                break;
            case 5:
                $os = new Condicionales();
                echo "</br>";
                echo "Ingreso al caso número 5";
                $os->Condicionalesenphp();
                echo "</br>";
                break;
            case 6:
                $os = new Ciclos();
                echo "</br>";
                echo "Ingreso al caso número 6";
                $os->Ciclosenphp();
                echo "</br>";
                break;

            default;
                echo "</br>";
                echo "Ingrese una opción válida";
                echo "</br>";
                break;
        }
    }

    //echo $_POST["numero"];
    if (isset($_POST["numero"])) {
        echo $_POST["numero"];
    }

    $ol = new OperadoresLogicos();
    $ol->operadores();
    $ol->saludar();

    ?>


    <div class="card-victor"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>

</html>