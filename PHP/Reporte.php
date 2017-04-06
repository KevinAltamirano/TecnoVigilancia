

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link href="../CSS/reporte.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <ul>
            <li><a href="equipoListaAdmin.php">Equipos</a></li>
            <li><a href="equipoAgregar.php">Agregar Equipo</a></li>
            <li><a href="equipoMantenimiento.php"  >Agregar Mantenimiento</a></li>
            <li><a href="equipoListaMant.php">Mantenimientos</a></li>
            <li><a href="Reporte.php" class="active">Reporte</a></li>
            <li><a href="loginTecnovigilancia.php">LogOut</a></li>
        </ul>
               
    <div class="container">  
        <form id="contact" action="" method="">
            <h3>GUÍA ADMINISTRATIVA PARA DAR AVISO DE ALTA, MODIFICACIÓN O BAJA DE UNIDAD Y/O RESPONSABLE DE TECNOVIGILANCIA</h3>
            <h3 style="text-align:center">FORMATO DE APOYO PARA DAR AVISO DE ALTA, MODIFICACION O BAJA DE UNDAD Y/O RESPONSABLE DE TECNOVIGILANCIA</h3>
            <h4 style="text-align:center">ANTES DE LLENAR ESTE FORMATO LEA CUIDADOSAMENTE EL INSTRUVTIVO LA GUIA Y EL LISTADO DE DOCUMENTOS ANEXOS.</h4>
              <h4 style="text-align:center">LLENAR CON LETRA DE MOLDE LEGIBLE O A MAQUINA O COMPUTADORA</h4>
              <h3>1.- TIPO DE TRAMITE</h3>

              <table style="">
                   
                        <tr>
                            <th class="text-left">
                                <input type="radio" name="gender" value=""><h4>AVISO DE ALTA UNIDAD Y  <br> RESPONSABLE DE TECNOVIGILANCIA</h4> 
                            </th>
                            <th class="text-left">
                                               <input type="radio" name="gender" value=""><h4>AVISO DE MODIFICACION DE UNIDAD <br>Y/O RESPONSABLE DE TECNOVIGILANCIA</h4>
                            </th>
                            <th class="text-left">
                                                <input type="radio" name="gender" value=""><h4>AVISO DE BAJA DE UNIDAD Y/O <br>RESPONSABLE DE TECNOVIGILANCIA</h4>
                            </th>
                            <th class="text-left">
                                                <input type="radio" name="gender" value=""><h4>AVISO DE ALTA DE RESPONSABLE<br>DE TECNOVIGILANCIA</h4>
                            </th>
                        </tr>

       
              </table>
              <h4>Tipo De Establecimiento</h4>

              <table style="">
                   
                        <tr>
                            <th class="text-left">
                                <input type="radio" name="" value=""><h4>TITULAR DE REGISTRO <br> SANITARIO Y/O REPRESENTANTE LEGAL</h4> 
                            </th>
                            <th class="text-left">
                                               <input type="radio" name="" value=""><h4>FABRICANTE, DISTRIBUIDOR <br> Y COMERCIALIZADOR</h4>
                            </th>
                            <th class="text-left">
                                                <input type="radio" name="" value=""><h4>CENTRO<br>INSTITUCIONAL</h4>
                            </th>
                        </tr>

       
              </table>
 <h3>2.- DATOS DEL PROPIETARIO O ESTABLECIMIENTO</h3>
              <table>
                  <tr>
                      <th><h4>NOMBRE DEL PROPIETARIO(PERSONA FISICA) O RAZON SOCIAL(PERSONA MORAL)</h4>  
                        <input placeholder="" type="text" tabindex="1" required autofocus name="equipoName"></th>
                        <th><h4>RFC</h4>
                        <input placeholder="" type="text" tabindex="1" required autofocus name="equipoName"></th></th>
                    </tr>
                   
                    <tr>    
                        <th><h4>CALLE, NUMERO EXTERIOR Y NUMERO O LETRA INTERIOR</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>COLONIA</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                        <th> <h4>DELEGACION O MUNICIPIO</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                  </tr>
                  <tr>
                      <th><h4>LOCALIDAD</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>CODIGO POSTAL</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>ENTIDAD FEDERATIVA</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
                  <tr>
                      <th><h4>ENTRE CALLE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>Y CALLE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>TELEFONO</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>CORREO ELECTRONICO</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
              </table>
<h3>3.- DATOS DE LA UNIDAD DE TECNOVIGILANCIA</h3>
<table>
                  <tr>
                      <th><h4>NOMBRE DE LA UNIDAD DE TECNOVIGILANCIA</h4>  
                        <input placeholder="" type="text" tabindex="1" required autofocus name="equipoName"></th>
                      </tr>
                   
                    <tr>    
                        <th><h4>CALLE, NUMERO EXTERIOR Y NUMERO O LETRA INTERIOR</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>COLONIA</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                        <th> <h4>DELEGACION O MUNICIPIO</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                  </tr>
                  <tr>
                      <th><h4>LOCALIDAD</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>CODIGO POSTAL</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>ENTIDAD FEDERATIVA</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
                  <tr>
                      <th><h4>ENTRE CALLE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>Y CALLE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>TELEFONO</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>CORREO ELECTRONICO</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
              </table>

<h3>4.- DATOS DEL RESPONSABLE DE TECNOVIGILANCIA</h3>
<table>
                  <tr>
                      <th><h4>NOMBRE COMPLETO</h4>  
                        <input placeholder="" type="text" tabindex="1" required autofocus name="equipoName"></th>
                        <th>CORREO ELECTRONICO</th>
                      </tr>
                   
                    <tr>    
                        <th><h4>CON TITULO PROFESIONAL DE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>TITULO PROFESIONAL EXPEDIDO PRO</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                        <th> <h4>N° DE CEDULA PROFESIONAL</h4><input placeholder="" type="text" tabindex="1" required name="obs"> </th>
                  </tr>
                  <tr>
                      <th><h4>ESPECIALIDAD DE</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>TITULO DE ESPECIALIDAD EXPEDIDO POR</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                      <th><h4>N° DE CEDULO DE LA ESPECIALIDAD</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
                  <tr>
                      <th><h4>FIRMA DEL RESPONSABLE DE TECNOVIGILANCIA</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                    </tr>
              </table>

              <h3>5.- PARA LA MODIFICACIÓN O ACTUALIZACIÓN DE DATOS PARA ESTABLECIMIENTOS QUE INFORMARON ALTA DE UNIDAD Y/O RESPONSABLE DE TECNOVIGILANCIA, SELECCIONE LA (S) MODIFICACIÓN (ES) QUE DESEE REALIZAR, ENSEGUIDA ESCRIBA EN LA COLUMNA "DICE" LOS DATOS COMPLETOS QUE DESEA MODIFICAR Y EN LA COLUMNA "DEBE DE DECIR" LOS DATOS COMPLETOS YA ACTUALIZADOS</h3>
<table>
                  <tr>
                      <th><h4>NOMBRE COMPLETO</h4>  </th>
                      <th><h4>DICE</h4>  </th>
                      <th><h4>DEBE DECIR</h4>  </th>
                      </tr>
                   
                    <tr>    
                        <th><h4>RESPONSABLE DE TECNOVIGILANCIA</h4><input type="radio" name="gender" value=""> 
                           </th>
                           <th><input type="text" name="" value=""></th>
                           <th><input type="text" name="" value=""></th>
                 </tr>
                  <tr>
                      <th><h4>ESPECIALIDAD DE</h4><input placeholder="" type="radio" tabindex="1" required name="obs"></th>
                      <th><input type="text" name="" value=""></th>
                      <th><input type="text" name="" value=""></th>
     </tr>
                  <tr>
                      <th><h4>FIRMA DEL RESPONSABLE DE TECNOVIGILANCIA</h4><input placeholder="" type="radio" tabindex="1" required name="obs"></th>
                      <th><input type="text" name="" value=""></th>
                      <th><input type="text" name="" value=""></th>
                    </tr>
                    <tr>
                      <th><h4>NOMBRE O RAZON SOCIAL DEL PROPIETARIO O ESTABLECIMIENTO</h4><input placeholder="" type="radio" tabindex="1" required name="obs"></th>
                      <th><input type="text" name="" value=""></th>
                      <th><input type="text" name="" value=""></th>
                    </tr>
                    <tr>
                      <th><h4>DOMICILIO DEL PROPIETARIO O ESTABLECIMIENTO</h4><input placeholder="" type="radio" tabindex="1" required name="obs"></th>
                      <th><input type="text" name="" value=""></th>
                      <th><input type="text" name="" value=""></th>
                    </tr>
                    <tr>
                      <th><h4>OTROS(TELEFONO,CORREO ELECTRONICO)</h4><input placeholder="" type="radio" tabindex="1" required name="obs"></th>
                      <th><input type="text" name="" value=""></th>
                      <th><input type="text" name="" value=""></th>
                    </tr>
              </table>

<h3>6.- BAJA DE UNIDAD DE TECNOVIGILANCIA</h3>
<table>
                  <tr>
                      <th><h4>Cierre de actividades</h4>  
                        <input placeholder="" type="text" tabindex="1" required autofocus name="equipoName"></th>
                      </tr>
                   
                    <tr>    
                        <th><h4>Fusion con otros propietarios</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>DIA</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>MES</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                        <th><h4>AÑO</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
             </tr>
                  <tr>
                      <th><h4>Cesion de derechos</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
             </tr>
                  <tr>
                      <th><h4>Otros</h4><input placeholder="" type="text" tabindex="1" required name="obs"></th>
                  </tr>
              </table>


            </fieldset>
                <button name="submit" type="submit" id="submit" onclick='window.print();'>Imprimir</button>
            </fieldset>
        </form>

        
  
</div>
    </body>
            <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
        </script>
</html>