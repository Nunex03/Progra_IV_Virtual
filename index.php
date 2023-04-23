<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ISNP998919</title>
</head>
<body class="row align-items-center">
    <form action="procesar.php" method="POST">
        <label for="">Nombre del Artículo</label><br>
        <input type="text" name="txtNombre" id="txtNombre" placeholder="Ej. PC Gamer" required><br><br>

        <label for="">Precio Unitario</label><br>
        <input type="text" name="txtPrecioU" id="txtPrecioU" required><br><br>

        <label for="">Cantidad</label><br>
        <input type="text" name="txtCantidad" id="txtCantidad" required><br><br>


        <input type="submit" value="Calcular Impuestos" class="btn btn-success">

    </form>
</body>
</html>