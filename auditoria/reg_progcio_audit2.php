<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
</head>
<?php
   session_start ();
?>

<body>

<?php

   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    

// Conexi�n a la base de datos
    include("conexion/Conexion1.php");
    $link = Conectarse();
	   include("fnc/f_fecha.php");
    
	if (isset($_POST["num_detall_prog"])and ($_POST["num_desc_prog"]!="")) 
		{
   
			/*------------------------ Datos de Entrada----------------------*/ 
			$num_detall_prog_y=$_POST['num_detall_prog'];
  	$num_detall_prog_d=$_POST['num_detall_prog']."d";
   $num_desc_prog_y=$_POST['num_desc_prog'];
			$num_carg_prog_y=$_POST['num_carg_prog'];
 		$num_filial_prog_y=$_POST['num_filial_prog'];
			$num_grcia_prog_y=($_POST['num_grcia_prog']);
 		$num_unid_prog_y=($_POST['num_unid_prog']);
   $num_fech_prog_y=($_POST['num_fech_prog']);
 	
    
           
			//-------------------------fecha change------------------ echo "paso: ".$num_filial_prog_y;      		
			$fec_cambio=cambia_fecha_a_db($_POST['num_fech_prog']); 	echo "fecha: ".$num_fech_prog_y;
		//echo "fecha cambio: ".$fec_cambio;
				//-------------------------------------------progrmacion
	if (mysql_num_rows(mysql_query("SELECT num_detalle FROM d001_programa_aud WHERE num_detalle='" . $_POST['num_detall_prog'] . "'", $link))==0) {             
   	$query="insert into d001_programa_aud (num_detalle, descrp_program, num_filial, num_cargo, fe_fecha) VALUES ('$num_detall_prog_y', '$num_desc_prog_y', '$num_filial_prog_y', '$num_carg_prog_y', '$fec_cambio')";
		mysql_query ($query,$link);
		//--------------------------------------Detalle prg------------------------------------------		
					if (mysql_num_rows(mysql_query("SELECT 	num_detall_program FROM j0014t_detalle_programa WHERE num_detall_program='" . $_POST['num_detall_prog'] . "'", $link))==0) {
								$query2="insert into j0014t_detalle_programa (num_detall_program, num_gerencia, num_unidad, fe_mes) VALUES ('$num_detall_prog_d', '$num_grcia_prog_y', '$num_unid_prog_y', '$fec_cambio')";
						mysql_query ($query2,$link);
 ?>
																							<script type="text/javascript">
                        alert("Registro Efectuado");
                        </script>
				<?php
				     			} else {
				     		   ?>
																						<script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	
														<?php
 		               }echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
  											 }else {
				     		   ?>
																						<script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	
														<?php
 		               }echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";

 }

}
  if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      																?> 
																						<div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
						<?php
   }
    elseif(!isset($_SESSION["tipo_user"]))
  {
      ?>  
																						<div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
     <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P class='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
<?php     
   }?>
 </body>
 
