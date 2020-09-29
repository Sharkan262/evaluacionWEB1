<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
    <link rel="stylesheet" href="style/punto5.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="fondo"></div>
    <div class="volver"><a href="index.php">Volver al índice</a></div>
    <div class="contenedor">
        <form action="punto5.php" method="POST">
        <h2>Usuario 1</h2>
        <div class="usuario1">
            
            <h3>Nombre:</h3><input class="Datos" type="text" placeholder="Nombre del usuario" name="nombre1">
            <h3>Teléfono:</h3><input class="Datos" type="num" placeholder="Telefono del usuario" name="telefono1">
            <h3>Dirección:</h3><input class="Datos" type="text" placeholder="Dirección del usuario" name="direccion1">
            <h3>Salario:</h3><input class="Datos" type="num" placeholder="Salario del usuario" name="salario1">
        </div>
        <h2>Usuario 2</h2>
        <div class="usuario2">
            
            <h3>Nombre:</h3><input class="Datos" type="text" placeholder="Nombre del usuario" name="nombre2">
            <h3>Teléfono:</h3><input class="Datos" type="num" placeholder="Telefono del usuario" name="telefono2">
            <h3>Dirección:</h3><input class="Datos" type="text" placeholder="Dirección del usuario" name="direccion2">
            <h3>Salario:</h3><input class="Datos" type="num" placeholder="Salario del usuario" name="salario2">
        </div>
        <h2>Usuario 3</h2>
        <div class="usuario3">
            
            <h3>Nombre:</h3><input class="Datos" type="text" placeholder="Nombre del usuario" name="nombre3">
            <h3>Teléfono:</h3><input class="Datos" type="num" placeholder="Telefono del usuario" name="telefono3">
            <h3>Dirección:</h3><input class="Datos" type="text" placeholder="Dirección del usuario" name="direccion3">
            <h3>Salario:</h3><input class="Datos" type="num" placeholder="Salario del usuario" name="salario3">
        </div>
        <h2>Usuario 4</h2>
        <div class="usuario4">
            
            <h3>Nombre:</h3><input class="Datos" type="text" placeholder="Nombre del usuario" name="nombre4">
            <h3>Teléfono:</h3><input class="Datos" type="num" placeholder="Telefono del usuario" name="telefono4">
            <h3>Dirección:</h3><input class="Datos" type="text" placeholder="Dirección del usuario" name="direccion4">
            <h3>Salario:</h3><input class="Datos" type="num" placeholder="Salario del usuario" name="salario4">
        </div>
        <h2>Usuario 5</h2>
        <div class="usuario5">
            
            <h3>Nombre:</h3><input class="Datos" type="text" placeholder="Nombre del usuario" name="nombre5">
            <h3>Teléfono:</h3><input class="Datos" type="num" placeholder="Telefono del usuario" name="telefono5">
            <h3>Dirección:</h3><input class="Datos" type="text" placeholder="Dirección del usuario" name="direccion5">
            <h3>Salario:</h3><input class="Datos" type="num" placeholder="Salario del usuario" name="salario5">
        </div>
            <button type="submit" class="botoncalcular" name="calcular" value="calcular">Calcular</button>
        </form>
        
        <?php
            $sumatoria = 0;
            if(isset($_POST["calcular"])){
                
                $nombres = array($_POST["nombre1"],$_POST["nombre2"], $_POST["nombre3"], $_POST["nombre4"], $_POST["nombre5"]);
                $telefonos = array($_POST["telefono1"],$_POST["telefono2"], $_POST["telefono3"], $_POST["telefono4"], $_POST["telefono5"]);
                $direcciones = array($_POST["direccion1"],$_POST["direccion2"], $_POST["direccion3"], $_POST["direccion4"], $_POST["direccion5"]);
                $salarios = array($_POST["salario1"],$_POST["salario2"], $_POST["salario3"], $_POST["salario4"], $_POST["salario5"]);
                
                    $sumatoriaSalarios = $_POST["salario1"] + $_POST["salario2"]+  $_POST["salario3"]+ $_POST["salario4"]+ $_POST["salario5"];

                    

                    for ($i=0; $i < 5; $i++) { 
                        echo("Nombre: ".$nombres[$i]."<br>" ."Teléfono: ".$telefonos[$i]."<br>"."Dirección: ".$direcciones[$i]."<br>" ."Salario: ".$salarios[$i]);
                        echo("<br>");
                        echo("<br>");
                        
                    }
                    if (($sumatoriaSalarios > 40000000) && ($sumatoria > 32000000)) {
                        echo("La sucursal que tiene la mejor sumatoria de salarios es la sucursal A ");
                    }
                    elseif(40000000 > $sumatoriaSalarios)
                    {
                        echo("La sucursal que tiene la mejor sumatoria de salarios es la sucursal B ");
                    }
            }

        
        ?>



    </div>
</body>
</html>