<?php
 
$servidor       = "localhost";
$usuario        = "root";
$clave          = "";
$basedatos      = "biomedica";
 
$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
 
$cadena         ="SELECT * FROM mantenimiento";
$tabla          = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
$registros_encontrados ="";
$registros_encontrados = htmlentities($registros_encontrados, ENT_QUOTES,'UTF-8');
$registros_encontrados = mysql_num_rows($tabla);



    if (isset($_POST["name"]))
    {
    //Se almacena en una variable el id del registro a eliminar
    
    $name = $_POST["name"];
    echo $name;
    //Preparar la consulta
    $consulta = "DELETE FROM mantenimiento WHERE id_mant=$name";
    //Ejecutar la consulta
    $resultado = mysql_query($consulta, $conexion) or die(mysql_error());
    //redirigir nuevamente a la página para ver el resultado
    header("location: equipoListaMant.php");
    }
  


?>

<html lang="es">
<head>
    <link href="../CSS/equipoLista.css" rel="stylesheet">
    <meta charset="UTF-8">
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <script type="text/javascript" src="../JS/tablesorterPlugin/jquery-latest.js"></script>
    <script type="text/javascript" src="../JS/tablesorterPlugin/jquery.tablesorter.js"></script>
</head>
    <body>
        <ul>
            <li><a href="equipoListaAdmin.php" >Equipos</a></li>
            <li><a href="equipoAgregar.php">Agregar Equipo</a></li>
            <li><a href="equipoMantenimiento.php" >Agregar Mantenimiento</a></li>
            <li><a href="equipoListaMant.php" class="active">Mantenimientos</a></li>
            <li><a href="Reporte.php">Reporte</a></li>
            <li><a href="loginTecnovigilancia.php">LogOut</a></li>
        </ul>
        <div class="section">
            <div class="top-border left"></div>
            <div class="top-border right"></div>
            <h1>EQUIPOS BIOMEDICOS</h1>
            <p>Admin</p>
        </div>
        
        <div class="table-title">
        </div>
        <table class="table-fill" id="myTable">
        <thead>
            <tr>
                <th class="text-left">Id</th>
                <th class="text-left">Id Equipo</th>
                <th class="text-left">Fecha</th>
                <th class="text-left">Observaciones</th>
                <th class="text-left">Borrar</th>
            </tr>
        </thead>
        <tbody class="table-hover">
           <tr>
            <?php
                while ($registro = mysql_fetch_array($tabla)){   
            ?>
                <td class="text-left0">
            <?php
               echo $registro['id_mant'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['id_equipo'];
            ?>
                </td> 
                
                <td class="text-left0">
            <?php
               echo $registro['id_fecha'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['observaciones'];
            ?>
                </td>
                <td class="text-left0">
                    <form action="" method="post">
                        <input type="hidden" name="name" value="<?php echo $registro['id_mant'];?>">
                        <button name="submit" type="submit" id="submit">Borrar</button>
                    </form>
                </td>
            </tr> 
            <?php               
                }
             ?>
        </tbody>
    </table>
     <script>
          $(document).ready(function() 
            { 
                $("#myTable").tablesorter(); 
            } 
        );

    </script>
            <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
        </script>
</body>