<?php
require('fpdf.php');
$sel = array (1,3);
		class PDF extends FPDF
		{
		// Cabecera de página
				function Header()
				{
								// Logo
								$this->Image('imagenes_02.jpg',10,8,33);
								// Arial bold 15
								$this->SetFont('Arial','B',15);
								// Movernos a la derecha
								$this->Cell(80);
								// Título
								$this->Cell(30,10,'Title',1,0,'C');
								// Salto de línea
								$this->Ln(20);
				}
		// Pie de página
					function Footer()
					{
									// Posición: a 1,5 cm del final
									$this->SetY(-15);
									// Arial italic 8
									$this->SetFont('Arial','I',8);
									// Número de página
									$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
					}
		}
//mi consulta
 include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 $busqueda=mysql_query("SELECT * FROM user_audit");
  $totEmp = mysql_num_rows($busqueda);
$c_code = "";
$c_name = "";
$c_price = "";
$c_alias= "";
	$c_perfil= "";
	$c_sttus= "";
 print ("<Table>\n"); 
print ("<TR>\n");
while($filas=mysql_fetch_array($busqueda))
  {
			$status=$filas['estado_user'];
 		//$localiza_imagen=$filas['foto_alumno'];
		 $nombre=$filas['nomb_user'];
   $apell1=$filas['apel1_user'];
   $alias=$filas['alias_user'];
			$cod_empl=$filas['cod_emplea_user'];
			$perfil_user=$filas['perfil_user'];

   printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'>
                   <font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td>
                   </tr>",$status, $cod_empl, $nombre, $apell1, $alias, $perfil_user);
 $c_code = $c_code.$cod_empl."\n";
 $c_name = $c_name.$nombre."\n";
 $c_apll = $c_apll.$apell1."\n";
 $c_alias=$c_alias.$alias."\n";
	$c_perfil=$c_perfil.$perfil_user."\n";
	$c_sttus=$c_sttus.$status."\n";
}
//Now show the 3 columns
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','b',12);
$pdf->Cell(25,10,'Reporte Usuarios');
$pdf->ln(5);
$pdf->Cell(25,20,"Estado");
$pdf->Cell(25,20,"Codigo");
$pdf->Cell(25,20,"Nombre");
$pdf->Cell(25,20,"apellido");
$pdf->Cell(25,20,"Alias");
$pdf->Cell(25,20,"Perfil");
$pdf->ln(5);
$pdf->SetFont('Arial','b',10);
//Now show the 3 columns

$pdf->SetFont('Arial','',12);
//****************************/
$pdf=new PDF('L','mm','Letter'); // vertical, milimetros y tamaño
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(10); // dejamos un pequeño espacio de 10 milimetros
//***************************/
$pdf->SetY(48);
$pdf->SetX(10);
$pdf->MultiCell(20,6,$c_sttus,1);

$pdf->SetY(48);
$pdf->SetX(35);
$pdf->MultiCell(20,6,$c_code,1);

$pdf->SetY(48);
$pdf->SetX(58);
$pdf->MultiCell(20,6,$c_name,1);

$pdf->SetY(48);
$pdf->SetX(86);
$pdf->MultiCell(30,6,$c_apll,1);

$pdf->SetY(48);
$pdf->SetX(115);
$pdf->MultiCell(20,6,$c_alias,1);

$pdf->SetY(48);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$c_perfil,1);

$filename="index2_prueba.pdf";
$pdf->Output($filename,'F');
echo'<a href="index2_prueba.pdf">Descargar reporte</a>';
//$pdf->Output();

?>
