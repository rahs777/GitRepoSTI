<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >



</head>
<body>
<div >
   
	<?php	
  include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 $busqueda=mysql_query("SELECT * FROM d005tacciones_correc_prev");
	 
  print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
		print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
		print ("<TH width='5%'>No.Acc/Prev</TH>");
		print ("<TH width='20%'>Descrip.</TH>");
		print ("<TH width='15%'>Analisis</TH>");
		print ("<TH width='15%' >M&eacute;todo.</TH>");
		print ("<TH width='15%'>Acciones aplicadas.</TH>");
		
		print ("</TR>");   
 		    while($filas=mysql_fetch_array($busqueda))
           {
											$num_x=$filas['num_accion_corr_pre'];
											$descx=$filas['descrip_accion_correc_prev'];
											$analisisx=$filas['analis_accion_co_prev'];
											$metodox=$filas['metodolog_accion'];
											$accionesx=$filas['accion_aplicada'];
								
			print ("<TR>\n");
printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> 
                     </tr>",$num_x, $descx, $analisisx, $metodox, $accionesx);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
