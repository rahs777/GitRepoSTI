<?PHP
   session_start ();
?>
<html>
<head>
<title> Listado</title>
</head>
<body>
<?PHP
   if (isset($_SESSION["usuario_valido"]))
				 {
								$usuario_actual=$_SESSION["usuario_valido"];
								$nombre_user=$_SESSION["nom_usuario"];
								$tipo_user=$_SESSION["tipo_user"]
    
			?>
					
                           <div  style="font-size:14px;">
                                      <strong>Buscar:</strong><input type="text"  name="buscareport" id="buscareport" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="reporte_accion()">
								                         <div style="width:20%">       																			              																			
                                              <!--select name="tip_busqd" id="tip_report" >
		                                      <option value="auditoria">Auditoria</option>
                                              <option value="plan">Plan de Auditorias</option>
                                              <option value="programacion">Programacion</option>
					      																																		<option value="noconform">No Conformidad</option>
                                        	</select-->
																																	</div>
  	      																								<div id="elreporteacc"></div>
																			        </div>       
        
                    

                    <?php
 }
   else
   {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   }
   ?>
   

</body>
</html>
