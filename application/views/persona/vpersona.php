<!DOCTYPE html>
<html>
<head>
	<title>SIDAQX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<style> 


h1{

	color: black;
	margin-left: 100px;
}
</style>

<body style="background-color: gainsboro;">

	<h1 align="center">Registro De Pacientes En Quirófano</h1>
	<div id="barra-lateral">
<ul id="boton">
<li><a href="#">Administrativo</a></li>
<li><a href="#">Reportes</a></li>
<li><a href="#">Salir</a></li>
</ul> 
</div> <!-- Cierre de "menuhor" -->
<style type="text/css">
	
	/* M E N U H O R I Z O N T A L */

#barra-lateral {
width: auto;
height: 50px;
margin-left: -8px;
margin-right: -8px;
background-image: url(../img/estilo/bg_menu.png);
margin-top: 0px; 
}

#boton {
padding: 0px;
margin: auto;
text-align: center;
}

#boton li {
display: inline;
}

#boton li a {
line-height: 30px;	
font-family: Arial;
font-size: 16px;
text-decoration: none;
display: inline-block;
padding: 10px;
color: black;
font-family: 'Dosis', sans-serif;
text-transform: uppercase;
} 

#boton li a:hover {
background-image: url(../img/estilo/bg_menu_hover.png);
}
</style>

	<form action="<?php echo base_url()?>cpersona/guardar" method="POST">
			
			<table align="center">
			<tr>
				<td><label>DNI</label></td>
				<td><input type="text" name="txtDNI" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" name="txtNombre"></td>
				
			</tr>
			<tr>
				<td><label>Ap Paterno</label></td>
				<td><input type="text" name="txtApPaterno"></td>
			</tr>
			<tr>
				<td><label>Ap Materno</label></td>
				<td><input type="text" name="txtApMaterno"></td>
			</tr>
			<tr>
				<td><label>Edad</label></td>
				<td><input type="txt" name="txtedad"></td>
			</tr>
			
		
			<tr>
				<td><label>Fecha</label></td>
				<td><input type="date" name="datfecha"></td>
			</tr>
			<tr>
				<td><label>Diagnóstico Preoperatorio</label></td>
				<td><input type="txt" name="txtdxpre"></td>
			</tr>
			<tr>
				<td><label>Procedimiento Quirúrgico</label></td>
				<td><select name="procqx">
				<option value=""></option>
				<option value="AMEU">AMEU</option>
  				<option value="ASEO QUIRURGICO">ASEO QUIRURGICO</option>
  				<option value="APENDICECTOMIA">APENDICECTOMIA</option>
  				<option value="BIPOSIA EXCISIONAL DE MAMA">BIPOSIA EXCISIONAL DE MAMA</option>
  				<option value="CESAREA CLÁSICA">CESAREA CLÁSICA</option>
  				<option value="CESAREA CLÁSICA BAJA">CESAREA CLÁSICA BAJA</option>
  				<option value="COLECISTECTOMIA">COLECISTECTOMIA</option>
  				<option value="COLPOSUSPENSION">COLPOSUSPENSION</option>
  				<option value="HISTERECTOMIA TOTAL ABDOMINAL">HISTERECTOMIA TOTAL ABDOMINAL</option>
  				<option value="HISTERECTOMIA TOTAL ABDOMINAL OBSTETRICA">HISTERECTOMIA TOTAL ABDOMINAL OBSTETRICA</option>
  				<option value="HISTERECTOMIA TOTAL VAGINAL">HISTERECTOMIA TOTAL VAGINAL</option>
  				<option value="LAPAROTOMIA EXPLORADORA">LAPAROTOMIA EXPLORADORA</option>
  				<option value="LEGRADO UTERINO INSTRUMENTADO">LEGRADO UTERINO INSTRUMENTADO</option>
  				<option value="LIGADURA DE ARTERIA HIPOGASTRICA">LIGADURA DE ARTERIA HIPOGASTRICA</option>
  				<option value="OCLUSION TUBARIA BILATERAL">OCLUSION TUBARIA BILATERAL</option>
  				<option value="PLASTIA ABDOMINAL">PLASTIA ABDOMINAL</option>
  				<option value="PLASTIA INGUINAL">PLASTIA INGUINAL</option>
  				<option value="REVISIÓN DE CAVIDAD UTERINA">REVISIÓN DE CAVIDAD UTERINA</option>
  				<option value="SALPINGOOFORECTOMIA">SALPINGOOFORECTOMIA</option>
  				<option value="MIOMECTOMIA">MIOMECTOMIA</option>
  				
			</select></td>
			</tr>
						
			<tr>

			<td><label>Hora de Inicio</label></td>
				<td><input type="time" name="timeHora_Inicio"></td>

			</tr>
			<tr>
			<td><label>Hora de Término</label></td>
				<td><input type="time" name="timeHora_Termino"></td>
			</tr>
			<tr>
			<td><label>Médico Anestesiólogo</label></td>
				<td><select name="medanestesio">
				<option value=""></option>
				<option value="DRA. AGUILAR PÉREZ EDNA">DRA. AGUILAR PÉREZ EDNA</option>
  				<option value="DRA. CHAVEZ MALDONADO YOLANDA">DRA. CHAVEZ MALDONADO YOLANDA</option>
  				<option value="DRA. GUERRERO MIGUEL MARIVEL">DRA. GUERRERO MIGUEL MARIVEL</option>
  				<option value="DRA. LARA CID YOLANDA">DRA. LARA CID YOLANDA</option>
  				<option value="DRA. LOPEZ MORALES IRENE">DRA. LOPEZ MORALES IRENE</option>
  				<option value="DR. LOPEZ RODRIGUEZ JUAN">DR. LOPEZ RODRIGUEZ JUAN</option>
  				<option value="DRA. MORA SALAZAR MAGDALENA">DRA. MORA SALAZAR MAGDALENA</option>
  				<option value="DR. NAVA ACOLTZI JOSE">DR. NAVA ACOLTZI JOSE</option>
  				<option value="DR. PAREDES HERNANDEZ ALEJANDRO">DR. PAREDES HERNANDEZ ALEJANDRO</option>
  				<option value="DR. PASILLAS PINEDA YAHIR">DR. PASILLAS PINEDA YAHIR</option>
  				<option value="DR. PÉREZ RODRIGUEZ JUAN ANGEL">DR. PÉREZ RODRIGUEZ JUAN ANGEL</option>
  				<option value="DRA. REYES XOLOCOTZI ROSA">DRA. REYES XOLOCOTZI ROSA</option>
  				</select></td>
			</tr>
			<tr>
			<td><label>Médico Cirujano</label></td>
				<td><select name="medciruja">
				<option value=""></option>
				<option value="DR. GARCIA AVENDAÑO DIEGO">DR. GARCIA AVENDAÑO DIEGO</option>
  				<option value="DR. JIMENEZ PÉREZ FILIBERTO">DR. JIMENEZ PÉREZ FILIBERTO</option>
  				<option value="DRA. GUERRERO MIGUEL MARIVEL">DRA. GUERRERO MIGUEL MARIVEL</option>
  				<option value="DRA. LARA CID YOLANDA">DRA. LARA CID YOLANDA</option>
  				<option value="DRA. LOPEZ MORALES IRENE">DRA. LOPEZ MORALES IRENE</option>
  				<option value="DR. LOPEZ RODRIGUEZ JUAN">DR. LOPEZ RODRIGUEZ JUAN</option>
  				<option value="DRA. MORA SALAZAR MAGDALENA">DRA. MORA SALAZAR MAGDALENA</option>
  				<option value="DR. NAVA ACOLTZI JOSE">DR. NAVA ACOLTZI JOSE</option>
  				<option value="DR. PAREDES HERNANDEZ ALEJANDRO">DR. PAREDES HERNANDEZ ALEJANDRO</option>
  				<option value="DR. PASILLAS PINEDA YAHIR">DR. PASILLAS PINEDA YAHIR</option>
  				<option value="DR. PÉREZ RODRIGUEZ JUAN ANGEL">DR. PÉREZ RODRIGUEZ JUAN ANGEL</option>
  				<option value="DRA. REYES XOLOCOTZI ROSA">DRA. REYES XOLOCOTZI ROSA</option>
  				</select></td>
			</tr>
			<tr>
			<td><label>Ayudante</label></td>
				<td><input type="txt" name="txtAyudante"></td>
			</tr>
			<tr>
			<td><label>Instrumentista</label></td>
				<td><input type="txt" name="txtInstrumentista"></td>
			</tr>
			<tr>
			<td><label>Circulante</label></td>
				<td><input type="txt" name="txtCirculante"></td>
			</tr>
			<tr>
			<td><label>Técnica Anestésica</label></td>
				<td><select name="tecaneste">
				<option value=""></option>
				<option value="AGB">AGB</option>
  				<option value="AGE">AGE</option>
  				<option value="BSA">BSA</option>
  				<option value="MTO">MTO</option>
  				<option value="MPD">MPD</option>  
			</select></td>
			</tr>
			<tr>
				<td colspan="2"><label> <STRONG>DIFERIMIENTO </label></td>
				
			</tr>
			<tr>
			<td><label>Se Difiere</label></td>
				<td><select name="difiere">
				<option value=""></option>
				<option value=""></option>
  				<option value="Si">Si</option>
  				<option value="No">No</option>
  
			</select></td>
			</tr>
			<tr>
			<td><label>Fecha De Diferimiento</label></td>
				<td><input type="date" name="datfecdiferi"></td>
			</tr>
			<tr>
			<td><label>Motivo De Diferimiento</label></td>
				<td> <textarea rows="1" cols="10" type="txt" name="txtmotivo">
				</textarea></td>
				<tr>
			<div data-role="main" class="ui-content">
   
				<td><input type="submit" value="Guardar"></td>
				<td></td><td><input type="reset" value="Limpiar"></td>
				
			</tr>
			
		</table>

		
 <!--<a href="#Guardar" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Guardar</a>

    <div data-role="popup" id="myPopup" class="ui-content">
      <h3>Los datos se almacenaron con éxito</h3> (estas lineas generan un botón que muesta una ventana emergente--> 
	</form>
	
      
    </div>
  </div>
</body>
</html>