<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recibeget.php" method="get">
        <label for="numero1">Valor 1:</label>
        <input type="number" name="numero1"><br>
        <label for="numero2">Valor 2:</label>
        <input type="number" name="numero2">
        <select name="operador" >
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">División</option>
            <option value="4">Multiplicación</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>