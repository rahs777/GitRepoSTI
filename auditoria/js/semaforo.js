/**
 * @author Propietario
 */
function Cambio(elemento)
{
if (document.getElementById(elemento).value=="rojo")
 	{	
		document.getElementById('verde').checked = false;
		document.getElementById('amarillo').checked = false;
		document.getElementById('apDiv1').style.background ='red';
	}
		else if(document.getElementById(elemento).value=="verde")
			   {
			   	document.getElementById('rojo').checked = false;
			   	document.getElementById('amarillo').checked = false;
			   	document.getElementById('apDiv1').style.background ='green';
			   }
				else 
				{
				document.getElementById('rojo').checked=false;
				document.getElementById('verde').checked=false;
				document.getElementById('apDiv1').style.background='yellow';
			     }
}
