<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
    <link rel="stylesheet" href="style/punto4.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="fondo"></div>
    <div class="volver"><a href="index.php">Volver al índice</a></div>
    <div class="body">
        <form action="punto4.php" method="POST">
        <h3>Horas trabajadas:</h3>
        <input type="number" class="horas" placeholder="Ingrese las horas trabajadas" name="horas">
        <button type="submit" class="boton" name="botonCalculcular" value="calcular">Calcular</button>
        </form>
        <?php if(isset($_POST["botonCalculcular"])): ?>
        <div class="Sueldo">
            <?php
                    $horas = $_POST["horas"];
                    if($horas !=0){
                        if($horas<=40){
                            $salario = $horas * 20000;
                            echo "Su salario es de ".$salario ;
                        }
                         elseif($horas > 40){
                             $Extr = $horas - 40;
                            $horasExt = $Extr * 25000;
                            $horasNor = 40 * 20000;
                            $Salario = $horasNor + $horasExt;
                            echo"Su salario es de ". $Salario;
                             }
    
                    }else{
                        echo "Ingrese las horas trabajadas";
                    }
                ?>
        </div>
        <?php endif ?>
    </div>
</body>
</html>