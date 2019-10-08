<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <p>&nbsp</p>
    <form name="form1" method="post" action="calculadoraphp2.php">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
                <select name="operacion" id="operacion">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Multiplicacion</option>
                    <option>Division</option>
                    <option>Modulo</option>
                </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>
</body>
</html>