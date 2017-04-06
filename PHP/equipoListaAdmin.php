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


$registros_encontrados2 ="";
$resultado2="";

    if (isset($_POST["name"]))
    {
    //Se almacena en una variable el id del registro a eliminar
    
    $name = $_POST["name"];
    echo $name;
    //echo "console.log('$name');";
    //Preparar la consulta
    $consulta = "DELETE FROM equipos WHERE id_equipo=$name";
    //Ejecutar la consulta
    $resultado = mysql_query($consulta, $conexion) or die(mysql_error());
    //redirigir nuevamente a la página para ver el resultado
    header("location: equipoListaAdmin.php");
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
            <li><a href="equipoListaAdmin.php" class="active">Equipos</a></li>
            <li><a href="equipoAgregar.php">Agregar Equipo</a></li>
            <li><a href="equipoMantenimiento.php">Agregar Mantenimiento</a></li>
            <li><a href="equipoListaMant.php">Mantenimientos</a></li>
            <li><a href="Reporte.php">Reporte</a></li>
            <li><a href="loginTecnovigilancia.php">LogOut</a></li>
        </ul>
        <div class="section">
            <div class="top-border left"></div>
            <div class="top-border right"></div>
            <h1>EQUIPOS BIOMEDICOS</h1>
            <p>Admin</p>
             <form action="" method="post">
                        <input type="text" name="buscar" value="" placeholder="Busqueda..">
                        <button name="submit" type="submit" id="submit">Buscar</button>
                        <?php

    if(isset($_POST["buscar"])){

        $buscar= $_POST["buscar"];
        if(is_numeric($buscar)){
            
            //$message = "Numero";
            //echo "<script type='text/javascript'>alert('$message');</script>";
            $consulta2 ="SELECT * FROM equipos WHERE id_equipo=$buscar";
            $resultado2 = mysql_query($consulta2, $conexion) or die(mysql_error());
            if(empty($resultado2)){
                $message2 = "No se encontro";
                echo "<script type='text/javascript'>alert('$message2');</script>";
            }else{
            $rows=mysql_fetch_array($resultado2) ;
                        echo "<br>";
                        echo "Equipo";
                        echo "<br>";
                        echo $rows[0]."  "; 
                        if(empty($rows[0])){
                            $message2 = "No se encontro";
                echo "<script type='text/javascript'>alert('$message2');</script>";
                        }
                        echo $rows[1]."  "; 
                        echo $rows[2]."  "; 
                        echo $rows[3]."  "; 
                        echo $rows[4]."  "; 
            }

        }else{
                $message2 = "No se encontro";
                echo "<script type='text/javascript'>alert('$message2');</script>";
                
        }

    }
    
?>
        </form>
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
                <td class="text-left0">
                    <form action="" method="post">
                        <input type="hidden" name="name" value="<?php echo $registro['id_equipo'];?>">
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