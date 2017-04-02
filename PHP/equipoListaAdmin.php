<?php
 
$servidor       = "localhost";
$usuario        = "root";
$clave          = "";
$basedatos      = "biomedica";
 
$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
 
$cadena         ="SELECT * FROM equipos";
$tabla          = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
$registros_encontrados ="";
$registros_encontrados = htmlentities($registros_encontrados, ENT_QUOTES,'UTF-8');
$registros_encontrados = mysql_num_rows($tabla);


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
            <li><a href="equipoListaAdmin.php">Equipos</a></li>
            <li><a href="equipoAgregar.php">Agregar</a></li>
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
                <th class="text-left">Nombre</th>
                <th class="text-left">Modelo</th>
                <th class="text-left">Marca</th>
                <th class="text-left">Serie</th>
                <th class="text-left">Inventario</th>
                <th class="text-left">Clase</th>
                <th class="text-left">Adquirido</th>
                <th class="text-left">Encargado</th>
                <th class="text-left">Area</th>
            </tr>
        </thead>
        <tbody class="table-hover">
           <tr>
            <?php
                while ($registro = mysql_fetch_array($tabla)){   
            ?>
                <td class="text-left0">
            <?php
               echo $registro['id_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['nom_equipo'];
            ?>
                </td> 
                <td class="text-left0">
            <?php
               echo $registro['mod_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['mar_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['serie_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['inv_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['clas_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['adq_equipo'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['med_encargado'];
            ?>
                </td>
                <td class="text-left0">
            <?php
               echo $registro['area_equipo'];
            ?>
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
</body>