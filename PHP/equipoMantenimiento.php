 <?php

        if (isset($_POST['equipoName'])) {

            $name= $_POST ['equipoName'];
            $fecha= $_POST ['equipoFecha'];
            $obs= $_POST ['obs'];
            $conexion = mysql_connect("localhost","root","");
 
            mysql_select_db("biomedica",$conexion);
        
            $sql="INSERT INTO mantenimiento (id_equipo,id_fecha,observaciones) VALUES('$name','$fecha','$obs')";
            mysql_query($sql);
            header("location:equipoListaMant.php");            
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
            <li><a href="equipoAgregar.php">Agregar Equipo</a></li>
            <li><a href="equipoMantenimiento.php"  class="active">Agregar Mantenimiento</a></li>
            <li><a href="equipoListaMant.php">Mantenimientos</a></li>
            <li><a href="Reporte.php">Reporte</a></li>
            <li><a href="loginTecnovigilancia.php">LogOut</a></li>
        </ul>
        <div class="container">  
        <form id="contact" action="" method="post">
            <h3 style="text-align:center">Registro del Mantenimiento</h3>
            <h4 style="text-align:center">Rellene correctamente los campos establecidos</h4>
            <fieldset>
                <input placeholder="Id del Equipo" type="text" tabindex="1" required autofocus name="equipoName">
            </fieldset>
                Fecha de Mantenimiento 
                <input placeholder="Fecha de Mantenimiento" type="date" tabindex="1" required name="equipoFecha">
            </fieldset>
            <br><br>
            <fieldset>
                <input placeholder="Observaciones" type="text" tabindex="1" required name="obs">
            </fieldset>
                <button name="submit" type="submit" id="submit">Agregar</button>
            </fieldset>
        </form>
 
  
</div>
    </body>
            <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
        </script>
</html>