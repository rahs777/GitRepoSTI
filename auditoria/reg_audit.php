<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<!--script src="calendario/js/jquery-1.5.2.js" type="text/javascript"></script>
<link rel="stylesheet" href="calendario/css/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="calendario/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.datepicker.js"></script>
<script language= "JavaScript" src="js/checkcolor.js"></script-->


</head>
 
<body>
   <script>
                                    	
/**************************************************/
	
/************************************************
	$(function() {
	$( "#fecha" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});
               		
                                    	});*/
  </script> 

 
<div style="padding:25px;">
<form action="reg_audit2.php" name="form_regaudit" method="post" >
        <div class="columna">
		<fieldset>
		    
        	<dl>
			 <dt><div>N&uacutemero de Auditoria:</div></dt>
                <dd><input type="text" name="num_audit" id="codigo_audit"  onclick="codigos()" /></dd>
			</dl>
 <div id="msn" style="display:none"> Debe Ingresar Numeros de 4 Digitos o mas
</div> 
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="num_desc_audit" id="descp_unit" onchange="palabras()"/></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de Gerencia:</div></dt>
			    
			 
            <dd> <?php       
               include("conexion/Conexion1.php");
              $link = Conectarse();                      
                                    	$cursor ="SELECT * from j007t_gerencia ";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_gcia_audit'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                             <option value="<?=$row["num_gerencia"]; ?>"><?=$row["descrip"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                   	<option selected>Ninguno </select> </select>
			   </dd>
			</dl>
   <dt><div>Texto de Unidad:</div></dt>
			    <dd><input type="text" name="texto_audit_unid" id="num_carg_detallex" size="25"  /></dd>
			</dl>
<dt><div>N&uacutemero de C&eacutedula:</div></dt>
			    <dd><input type="text" name="ced_audit" id="cedula"  class="cedula" onchange="valcedula()" /></dd>
<div class="msnced" id="msn" style="display:none"> Ingresar c&eacute;dula con el (E)o V-99.999.999
</div> 
			</dl>
<dt><div>N&uacutemero de Unidad:</div></dt>
<dd> <?php       
                                   
                                    	$cursor2 ="SELECT * from  i005t_unidad";
                                    	$result=mysql_query($cursor2, $link);
                                    		echo "<select name='num_unid_audit'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_unidad']; ?> "><?=$row['num_unidad']." ".$row["descrip_unidad"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select></select>
			   </dd>			    			    




<dt><div>Fecha Detalle:</div></dt>
<dd><input type="text" name="num_fech_audit"  id="fecha" class="fecha1" /></dd>
			</dl>

                        <dt><div>N&uacutemero de Requisito:</div></dt>
			    <dd>
<?php       
                                   
                                    	$cursor3 ="SELECT * from  i001t_requisitos";
                                    	$result3=mysql_query($cursor3, $link);
                                    		echo "<select name='num_requisit_audit'>";
                                     while($row3 = mysql_fetch_array($result3)){
                                            ?>
                                           <option value= "<?= $row3['num_requisito']; ?> "><?=$row3['num_requisito']." ".$row3["descrip_requisito"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select></select>
 </dd>
			</dl>
           
            <dl>
            <dt><div>N&uacutemero de Nivel:</div></dt>
			    <dd><input type="text" name="num_audit_niv" id="num_carg_detallex" size="25"  /></dd>
			</dl>
           
           <dt><div>Notas:</div></dt>
			    <dd><input type="text" name="notas_audit" id="num_carg_detallex" size="25"  /></dd>
			</dl>
           
            <dl>
            <dl>
			 
    <dl>
			 
			</dl>
			
			
            </fieldset>
            </div>
            <!----------------------------------------------------------->
           
        <!---............................................................-->
		    
            <fieldset class="action">
		     <input type="submit" name="Enviar" id="submit" value="Enviar" />
		    </fieldset>
		    
           
		</form>
</div>
</body>
	</html>	   
