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
    $tipo_user=$_SESSION["tipo_user"]
    
?>

<?php
// Conexi�n a la base de datos
    include("conexion/Conexion1.php");
    $link = Conectarse();
   	include("fnc/f_fecha.php");
    	if (isset($_POST["num_correcprev"])and ($_POST["num_correcprev"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$num_correcprev_x=$_POST['num_correcprev'];
			$desc_correcprev_x=$_POST['desc_correcprev'];
   $analisis_coor=$_POST['analisis_corr'];
			$metodo_accion_x=$_POST['metodo_accion'];
 		$herra_accion_x=$_POST['herra_accion'];
			$accion_aplica_x=($_POST['accion_aplica']);
 		$num_ced_propo_corre_x=($_POST['num_ced_propo_corre']);
   $coapro_corr_x=($_POST['coapro_corr']);
   $coced_corr_x=($_POST['coced_corr']);
   $comentario_accion_x=($_POST['comentario_accion']);
   $num_fechentrega_corr_x=($_POST['num_fechentrega_corr']);
   $num_fech_culm_corr_x=($_POST['num_fech_culm_corr']);
   $nombr_aproba_corre_x=($_POST['nombr_aproba_corre']);
            	
           
			/*Encripta Clave*/
           //	$salt = substr ($aliasy,0,2);
			//$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$num_fech_audit_y=($_POST['num_fech_audit']); , ,     , , , */
			$fech_entregax=cambia_fecha_a_db($_POST['num_fechentrega_corr']); 
			$fech_culminax=cambia_fecha_a_db($_POST['num_fech_culm_corr']); 	
	//	echo "fecha: ".$fec_ing_y;, fec_inin_user ,  alias_user, clav_user, ver_clv_user, fot_user, estado_user /, ,'$ftoy','$passy','$stadouser_y'
		
		
	if (mysql_num_rows(mysql_query("SELECT num_accion_corr_pre FROM d005tacciones_correc_prev WHERE num_accion_corr_pre	='" . $_POST['num_correcprev'] . "'", $link))==0) {
   	$query="insert into d005tacciones_correc_prev (num_accion_corr_pre, descrip_accion_correc_prev, analis_accion_co_prev, metodolog_accion , herramientas, accion_aplicada, num_ced_proponente, fe_culmin, co_aprob, comentario, co_cedula, fecha_entreg) VALUES ('$num_correcprev_x','$desc_correcprev_x','$analisis_coor', '$metodo_accion_x', '$herra_accion_x', '$accion_aplica_x', '$num_ced_propo_corre_x', '$fech_culminax', '$coapro_corr_x', '$comentario_accion_x', '$coced_corr_x', '$fech_entregax')";
		  mysql_query ($query,$link);
      	 ?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
       			} else {
       	 ?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	<?php
 		}echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
  }
  //------------------------ Datos de Entrada  auditoria detalle---------------------------------------------------
  	if (isset($_POST["num_audit"])and ($_POST["num_desc_audit"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$num_audit_x=$_POST['num_audit'];
                         /*echo("clave:"."").$clv_y;*/
			$desc_audit_x=$_POST['num_desc_audit'];
			  
     		$num_fech_audit_x=($_POST['num_fech_audit']);
     		$num_requisit_audit_x=($_POST['num_requisit_audit']);
     		$num_audit_niv_x=($_POST['num_audit_niv']);
     		$notas_audit_x=($_POST['notas_audit']);
            	
           
			/*Encripta Clave*/
           //	$salt = substr ($aliasy,0,2);
			//$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$num_fech_audit_y=($_POST['num_fech_audit']); , ,     , , , */
			$num_fech_audit_y=cambia_fecha_a_db($_POST['num_fech_audit']); 
	//	echo "fecha: ".$fec_ing_y;, fec_inin_user ,  alias_user, clav_user, ver_clv_user, fot_user, estado_user /, ,'$ftoy','$passy','$stadouser_y'
		
		
	if (mysql_num_rows(mysql_query("SELECT num_auditoria1 FROM d003t_detalle_aud WHERE num_auditoria1	='" . $_POST['num_audit'] . "'", $link))==0) {
   	$query="insert into d003t_detalle_aud (num_auditoria1, num_requisito, tex_Descrp, num_nivl, tex_nota) VALUES ('$num_audit_x','$num_requisit_audit_x', '$desc_audit_x', '$num_audit_niv_x','$notas_audit_x' )";
		mysql_query ($query,$link);
      	
			echo "<meta http-equiv=Refresh content=3;url=index0.php?a=1>";
       			} else {
       		print ("<A TARGET='_center'> <strong>Ya Fue Creado un PARTICIPANTE con esa CEDULA, por favor, Verifique su Ingreso</strong></A>");
       			echo "<meta http-equiv=Refresh content=3;url=index0.php?a=1>";
 		}echo "<meta http-equiv=Refresh content=3;url=index0.php?a=1>";
  }
		
 ?>
 <?php 
}
  if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
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
    elseif(!isset($_SESSION["tipo_user"]))
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
<?php     
   }?>
 </body>
 
