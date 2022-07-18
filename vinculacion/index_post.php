<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba POST</title>
</head>
<body>
    <form action="procesa_post.php" method="POST" enctype="multipart/form">
        <label>
        Ingrese el primer número
        </label>
        <input type="number" name="numero1">
        <label>
        Ingrese el segundo número
        </label>
        <input type="number" name="numero2">
        <input type="submit" name="submit" value="Procesar">
    </form>