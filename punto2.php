<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
    <link rel="stylesheet" href="style/punto3.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="fondo"></div>
    <div class="volver"><a href="index.php">Volver al índice</a></div>
    <div class="Contenedor">
        <form action="punto2.php" method="POST">
            <h2>BodyTech</h2>
            <p>Peso:</p><input type="" class="peso" placeholder="Ingrese su peso (Kilogramos)" name="peso">
            <p>Altura:</p><input type="" class="altura" placeholder="Ingrese su altura (Metros)" name="altura">
            <button type="submit" class="boton" name="botonCalcular" value="calcular">Calcular</button>
        </form>
            <div class="respuesta">
                <?php if(isset($_POST["botonCalcular"])):?>
                    <?php
                        $peso=$_POST["peso"];
                        $altura=$_POST["altura"];
                            if($peso !=0 && $altura !=0){
                                $imc=$peso/($altura*$altura);
                                
                                if($imc < 18.5){
                                    echo "Su imc es de ".$imc. " es decir Peso insuficiente" ;
                                }elseif($imc >=18.5 && $imc <= 24.9){
                                    echo "Su imc es de ".$imc. " es decir peso normal";
                                }elseif($imc >=25 && $imc <= 26.9){
                                    echo "Su imc es de ".$imc. " es decir Sobrepeso grado 1";
                                }elseif($imc >=27 && $imc <= 29.9){
                                    echo "Su imc es de ".$imc. " es decir Sobrepeso grado 2 (preobesidad)";
                                }elseif($imc >=30 && $imc <= 34.9){
                                    echo "Su imc es de ".$imc. " es decir Obesidad de tipo I";
                                }elseif($imc >=35 && $imc <= 39.9){
                                    echo "Su imc es de ".$imc. " es decir Obecidad de tipo II";
                                }elseif($imc >=40 && $imc <= 49.9){
                                    echo "Su imc es de ".$imc. " es decir Obesidad de tipo III (mórbida)";
                                }elseif($imc >50 ){
                                    echo "Su imc es de ".$imc. " es decir Obesidad de tipo IV (extrema)";
                                }
                            }else {
                                echo "Por favor rellene ambos campos";
                            }
                    ?>
            </div>
            <?php endif ?>
    </div>
</body>
</html>