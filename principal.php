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
    if (isset($_GET["precio"])) {
        echo $_GET["precio"];
    }

    if (isset($_GET["fruta"])) {
        echo $_GET["fruta"];
    }

    echo $_POST["numero"];
    ?>


    <div class="card-victor"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>

</html>