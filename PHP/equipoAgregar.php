 <?php

        if (isset($_POST['equipoName']) & isset($_POST['equipoModelo'])) {

            $name= $_POST ['equipoName'];
            $mod= $_POST ['equipoModelo'];
            $marca= $_POST ['equipoMarca'];
            $serie= $_POST ['equipoSerie'];
            $inv= $_POST ['equipoInv'];
            $clas= $_POST ['equipoClas'];
            $adq= $_POST ['equipoAdq'];
            $enc= $_POST ['equipoEnc'];
            $area= $_POST ['equipoArea'];

            $conexion = mysql_connect("localhost","root","");
 
            mysql_select_db("biomedica",$conexion);
        
            $sql="INSERT INTO equipos (nom_equipo,mod_equipo,mar_equipo,serie_equipo,inv_equipo,clas_equipo,adq_equipo,med_encargado,area_equipo) VALUES('$name','$mod','$marca','$serie','$inv','$clas','$adq','$enc','$area')";
            mysql_query($sql);
            header("location:equipoListaAdmin.php");            
            }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link href="../CSS/equipoAgregar.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <ul>
            <li><a href="equipoListaAdmin.php">Equipos</a></li>
            <li><a href="equipoAgregar.php" class="active">Agregar Equipo</a></li>
            <li><a href="equipoMantenimiento.php">Agregar Mantenimiento</a></li>
            <li><a href="equipoListaMant.php">Mantenimientos</a></li>
            <li><a href="Reporte.php">Reporte</a></li>
            <li><a href="loginTecnovigilancia.php">LogOut</a></li>
        </ul>
        <div class="container">  
        <form id="contact" action="" method="post">
            <h3 style="text-align:center">Registro del Equipo</h3>
            <h4 style="text-align:center">Rellene correctamente los campos establecidos</h4>
            <fieldset>
                <input placeholder="Nombre del Equipo" type="text" tabindex="1" required autofocus name="equipoName">
            </fieldset>
            <fieldset>
                <input placeholder="Modelo del Equipo" type="text" tabindex="1" required name="equipoModelo">
            </fieldset>
            <fieldset>
                <input placeholder="Marca del Equipo" type="text" tabindex="1" required name="equipoMarca">
            </fieldset>
            <fieldset>
                <input placeholder="Numero de Serie" type="text" tabindex="1" required name="equipoSerie">
            </fieldset>
            <fieldset>
                <input placeholder="Numero de Inventario" type="text" tabindex="1" required name="equipoInv">
            </fieldset>
            <fieldset>
                <input placeholder="Clase del Equipo" type="text" tabindex="1" required name="equipoClas">
            </fieldset>
            <fieldset>
                <input placeholder="Fecha de Adquisicion" type="text" tabindex="1" required name="equipoAdq">
            </fieldset>
            <fieldset>
                <input placeholder="Medico Encargado" type="text" tabindex="1" required name="equipoEnc">
            </fieldset>
            <fieldset>
                <input placeholder="Area del Equipo" type="text" tabindex="1" required name="equipoArea">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="submit">Agregar</button>
            </fieldset>
        </form>
 
  
</div>
    </body>
            <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
        </script>
</html>