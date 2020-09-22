<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
    <link rel="stylesheet" href="style/punto1.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="fondo"></div>
    <div class="volver"><a href="index.php">Volver al índice</a></div>
    <form action="punto1.php" method="POST">
        <h2>Calculadora</h2>
        <input type="number" class="num" placeholder="Primer Número entero" name="numero1">
        <select name="operacion">
            <option value="0">Suma (+)</option>
            <option value="1">Resta (-)</option>
            <option value="2">Multiplicaión(x)</option>
            <option value="3">División(&divide;)</option>
        </select>
        <input type="number" class="num" placeholder="Segundo Número entero" name="numero2">
        <button type="submit" class="boton" name="botonCalcular" value="calcular">Calcular</button>
    </form>
    <?php if(isset($_POST["botonCalcular"])):?>
    <div class="respuesta">
        
        <?php
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        $opcion=$_POST['operacion'];
            if($num1 != 0 && $num2 != 0){
                switch($opcion){

                    case 0:
                        $respuesta = $num1 + $num2; 
                        echo("La respuesta es: ".$respuesta);
                    break;
                    case 1:
                        $respuesta = $num1 - $num2;
                        echo("La respuesta es: ".$respuesta); 
                    break;
                    case 2:
                        $respuesta = $num1 * $num2; 
                        echo("La respuesta es: ".$respuesta);
                    break;
                    case 3:
                        $respuesta = $num1 / $num2;
                        echo("La respuesta es: ".$respuesta); 
                    break;
                }
            }else{echo"Debe llenar ambos campos";}
        ?>
    </div>
<?php endif ?>
    
</body>
</html>

