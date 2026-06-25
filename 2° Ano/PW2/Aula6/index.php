<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de Salario</title>
</head>
<body>
    <form action="calcularSalario.php" method="post">
        <label for="texthoras"> Digite as horas trabalhadas:
            <input type="text" name="txthoras" id=""><br>
        </label>

        <label for="textvalor"> Digite o valor da hora trabalhada:
            <input type="text" name="txtvalor" id=""><br>
        </label>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>