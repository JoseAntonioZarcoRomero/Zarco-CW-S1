<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Six Flags México</title>
    <link rel="icon" href="./SixFlags.jpeg" type="image/icon">
</head>
<body>
    <h1><center>Six Flags México</center></h1><hr>
    <?php
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "no especifico";
        $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] !="")? $_POST["apellidos"] : "no especifico";
        $edad = (isset($_POST["edad"]) && $_POST["edad"] !="")? $_POST["edad"] : "no especifico";
        $direccion = (isset($_POST["direccion"]) && $_POST["direccion"] !="")? $_POST["direccion"] : "no especifico";
        $numB = (isset($_POST["numB"]) && $_POST["numB"] !="")? $_POST["numB"] : "no especifico";
        $tipo = (isset($_POST["tipo"]) && $_POST["tipo"] !="")? $_POST["tipo"] : "no especifico";
        $contador = $numB;
        $i = 1;
        $arreglo_frases = ["Tú al final", "Sé lo que quieras ser", "Pasa primero que todos", "Pasele miedoso", "M de motomami"];
        if($numB == 0){
            echo '<center><h2>No se ingresaron boletos</h2>';
            echo '<img src="./claudio.jpeg" height="200" alt="404"></center>';
        }
        else if($numB < 0){
            echo '<center><h2>Hubo un problema</h2>';
            echo '<img src="./404.jpeg" width="200" alt="404"></center>';
        }
        else{
            echo '<h2>¡Gracias por su compra!</h2><hr>';
            while($contador>0 && $i<=15){
                echo "<h3>Boleto $i</h3>";
                echo '<table border="1" cellpadding="20px">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th colspan="4">SIX FLAGS</th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                        echo '<tr>';
                            echo "<td>$nombre</td>";
                            echo "<td>$apellidos</td>";
                            echo "<td>$edad</td>";
                            echo '<td rowspan="3">';
                                if($tipo=="Normal")
                                    echo '<img src="./normal.jpeg" height="200" alt="Normal">';
                                if($tipo=="Boleto de niños")
                                    echo '<img src="./barbie.jpeg" width="200" alt="Boleto de niños">';
                                if($tipo=="Flash pass")
                                    echo '<img src="./flash.jpeg" width="200" alt="Flash pass">';
                                if($tipo=="Miedo a las alturas")
                                    echo '<img src="./coraje.jpeg" height="200" alt="Miedo a las alturas">';
                                if($tipo=="Batman")
                                    echo '<img src="./batman.jpeg" height="200" alt="Batman">';
                            echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo "<td>$direccion</td>";
                            echo "<td>$numB</td>";
                            echo "<td>$tipo</td>";
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td colspan="3"><center><strong><em>';
                                if($tipo=="Normal")
                                    echo($arreglo_frases[0]);
                                if($tipo=="Boleto de niños")
                                    echo($arreglo_frases[1]);
                                if($tipo=="Flash pass")
                                    echo($arreglo_frases[2]);
                                if($tipo=="Miedo a las alturas")
                                    echo($arreglo_frases[3]);
                                if($tipo=="Batman")
                                    echo($arreglo_frases[4]);
                            echo '</strong></em></center></td>';
                        echo '</tr>';
                    echo '</body>';
                echo '</table>';
                -$contador--;
                +$i++;
            }
            if($numB > 15){
                echo '<hr><h3>Se exedió el límite de boletos por desplegar</h3>';
                echo "Boleto(s) faltante(s): $contador";
            }
        }
    ?>
</body>
</html>