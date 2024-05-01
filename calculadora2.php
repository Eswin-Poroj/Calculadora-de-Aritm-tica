<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            display: flex;
            justify-content: center;
            background-color: #1C1678;
        }
        .seccion h2{
            text-align: center;
            font-size: xx-large;
            background-color: #8576FF;
        }
        .seccion{
            margin-top: 30px;
            flex-direction: column;
            background-color: aliceblue;
            width: 450px;
            height: 300px;
            border: 1px solid #7BC9FF;
        }

        .seccion label {
            position: relative;
            left:  25%;
            font-size: x-large;
            font-weight: bolder;
        }

        .seccion p {
            font-size:smaller;
            position: relative;
            top: 10px;
            left: 40px;
        }

        .input1{
            position: relative;
            background-color: #7BC9FF;
            border-radius: 10px;
            padding: 4px;
            left: 145px;
        }

        .Input2 {
            position: relative;
            background-color: #7BC9FF;
            border-radius: 10px;
            padding: 4px;
            left: 195px;

        }

        .Input2::placeholder{
            background-color: #1C1678;
        }

        .seccion select {
            position: relative;
            left: 162px;
            border-radius: 10px;
            padding: 4px;
        }

        .resultado{
            text-align: center;
            margin-left: 10px;
            margin-right: 10px;
            background-color: aqua;
        }

        
    </style>
</head>
<body>
    <div class="seccion">
    <h2>Calculadora</h2>
    
    <form action="" method="post" class="form-calculator">
        <label for="numero">Ingrese un Número</label>
        <p>Los numeros deben ir separados por un espacio.</p>
        <br>
        <input type="text" name="numero" id="numero" class="input1">
        <br><br>
        <select name="operaciones" id="operaciones">
            <option value="0">operaciones</option>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular" class="Input2">
    </form>
    <br>
    <div class="resultado">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $opercaion = $_POST['operaciones'];
        $numero = explode(' ',$_POST['numero']);
        $resultado = 0;
        $resultadoMultiplicacion = 1;

        switch ($opercaion) {
            case '1':
                foreach ($numero as $num) {
                    $resultado = $resultado + $num;
                }
                echo 'El resultado es: '.number_format($resultado,2);
                break;
            
            case '2':
                foreach ($numero as $num){
                    $resultado = $resultado - $num;
                }
                echo 'El resultado es: '.number_format($resultado,2);
                break;
            
            case '3':
                foreach ($numero as $num) {
                    $resultadoMultiplicacion = $resultadoMultiplicacion * $num;
                }
                echo 'El resultado es: '.number_format($resultadoMultiplicacion,2);
                break;
            
            case '4':
                foreach ($numero as $num) {
                    $resultado = $resultado / $num;
                }
                echo 'El resultado es: '.number_format($resultado,2);
                break;
            
            default:
                echo 'Seleccione una de las operaciones por favor';
                break;
        }
        
    }
    ?>
</div>
</div>
</body>
</html>