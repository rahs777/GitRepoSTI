// JavaScript Document
//-----------------------entrada formulario------------------------------------------

    	function fcalc_totalizar()
        {
            var total0=0;total1=0;total2=0;total3=0;total4=0;total5=0;total6=0;total7=0;total8=0;total9=0;
            total10=0;total11=0;total12=0;totalasig=0;totalcobrar=0;totalddeduc=0;
    	         
		if (parseFloat((document.getElementById("elemento"))).value!=0)
                {
                var sal=(document.getElementById("salario").value);
				var hrtrabx1=(document.getElementById("hrtrabada").value);
                hrtrabx=hrtrabx1.replace(',','.');
                var var_hr=hrtrabx*sal;
                var htr=Math.round(var_hr*100)/100;
                var total0=htr;
                (document.getElementById("resultado").value = htr );
                         }
            //==================================hr descanso ============================
			if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
    			var sal=(document.getElementById("salario").value);
    			var hrdescansox1=(document.getElementById("hrdescan").value);
                hrdescansox=hrdescansox1.replace(',','.');
                var var_hrdesc=hrdescansox*sal;
                var hr_desc=Math.round(var_hrdesc*100)/100;
                var total1=hr_desc;
    			document.getElementById("resultado1").value = hr_desc;
            }   
             //==================================hr feriaydom ============================
            if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
            var sal=(document.getElementById("val_hrferiadydoming").value);
    		hrferiax1=(document.getElementById("hrferiado").value);
            hrferiax=hrferiax1.replace(',','.');
            var total2=hrferiax*sal;
			document.getElementById("resultado2").value =(hrferiax*sal);
            }
            //================================== ============================
            if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
              //var sal_hr=(document.getElementById("salario").value);
			var valor_he=(document.getElementById("val_he").value);
            var hrtramx=(document.getElementById("hr_ext").value);
            var valorextra=Math.round(valor_he*100)/100;
            var num_hr=Math.round(hrtramx*100)/100;
            var total3=valorextra*num_hr;
			document.getElementById("resultado3").value = total3;  
            }
            //================================== ============================
            if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
  	         var sal=(document.getElementById("val_hr_mx").value);
			rnoctx=parseFloat((document.getElementById("hrtrabmixto").value));
            var total4=sal*rnoctx;
			document.getElementById("resultado4").value = total4;  
            } 
            //================================== ============================
            if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
             	var valor_htrnoc=(document.getElementById("val_tr_noc").value);
    			hrnoctx=parseFloat((document.getElementById("hrnoct").value));
                var total5=  hrnoctx * valor_htrnoc;
                varnoct=Math.round((total5)*100)/100;
    			document.getElementById("resultado5").value = varnoct ; 
            }
            //================================== ============================
             
            if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
            	var valor_salario=(document.getElementById("val_feriado").value);
    			hrnoctx=parseFloat((document.getElementById("feriado").value));
                subtotal_fer=valor_salario * hrnoctx;
                total_feriado=Math.round(subtotal_fer*100)/100;
                var total6=total_feriado;
    			document.getElementById("resultado50").value = total_feriado;   
            }
            //==================================Las Deducciones ============================
            //==================================ivss ============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
            var sal=(document.getElementById("val_cal_ivss").value);
			ivssx=parseFloat((document.getElementById("hrtrabada").value));
            var total7=sal*ivssx;
            varivss=Math.round((sal*ivssx)*100)/100;
			document.getElementById("resultado6").value =varivss;
            document.getElementById("ivss").value = ivssx ;         }
            //==================================lph ============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
            	var sal=(document.getElementById("cal_lph").value);
			var lphx=parseFloat((document.getElementById("hrtrabada").value));
             var total8=sal*lphx;
			document.getElementById("resultado7").value =sal*lphx; 
            document.getElementById("lph").value=  lphx ; 
            }
             //==================================spf ============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
              	var sal12=(document.getElementById("cal_spf").value);
			     var spfx=(document.getElementById("hrtrabada").value);
            sal1=sal12.replace(',','.');
             var total9=sal1*spfx;
			document.getElementById("resultado8").value =total9;
            document.getElementById("spf").value = spfx ;
            }
             //================================== prestamos============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
             
			prestax=parseFloat((document.getElementById("prestamos").value));
            var total10=prestax;
			document.getElementById("resultado9").value =prestax;   
            }
             //================================== adelantos============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
             adelant=parseFloat((document.getElementById("adelantos").value));
             var total11=adelant;
			document.getElementById("resultado90").value =adelant;
            }
             //================================== compras en la tienda============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
            compratiend=parseFloat((document.getElementById("comprastienda").value));
            var total12=compratiend;
			document.getElementById("resultado91").value =compratiend;    
            }
             //================================== ============================
             if (parseFloat((document.getElementById("elemento"))).value!=0) 
            {
           	difervta=parseFloat((document.getElementById("dife_vta").value));
            var total13=difervta;
			document.getElementById("resultado92").value =difervta;    
            }
             //================================== ============================
            
             //================================== ============================
           
            //==================================totales ============================
              var totalasig1=Math.round((total0+total1+total2+total3+total4+total5+total6)*100)/100; 
              var totalasig=(totalasig1);   
              var totalddeduc=Math.round((total7+total8+total9+total10+total11+total12+total13)*100)/100;  
              var totalcobrar=Math.round((totalasig-totalddeduc)*100)/100;
              document.getElementById("total_asignaciones").value = totalasig;
              document.getElementById("total_deduc").value = totalddeduc;
              document.getElementById("netocobrar").value = totalcobrar;
              
              
        }