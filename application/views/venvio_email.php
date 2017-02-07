<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset="=utf-8" />
/*llamamos a nuestra hoja de estilos con esta linea*/
<link rel="stylesheet" type="text/css" href="http://localhost/envio_email_CI(css/estilos.css" />
	<title>Formulario de registro</title>
</head>
<body>
<fieldset>
	<legend>Formulario de registros</legend>
	<?php echo form_open ("http://localhost/envio_email_CI/envio_email/nuevo_usuario")
	?>
	<table>
		<tr>
			<td>
				Nombre:
			</td>
			<td>
				<input type="text" name="nom" value="<?php echo set_value('nom')?>"/>
			</td>
		</tr>
		<tr><input type="hidden" name="grabar" value="si" />
		<td>
			Email:
		</td>
		<td>
			<input type="text" name="correo" value="<?php echo set_value ('correo');?>" /> 
		</td>
		</tr>
		<tr>
			<td>
				Usuario:
				</td>
				<td>
				<input type="text" name="nick" value="<?php echo set_value('nick')?>" />
			</td>			
		</tr>
		<tr>
			<td>
				Password:
				</td>
				<td>
				<input type="password" name="pass" />
			</td>			
		</tr>
		<tr>
			<td></td>
				<td>
				<font color="red style=font_weitght: bold; font-size: 14px;text-decoration:underline"><?php echo validation_errors(); ?></font>
			</td>			
		</tr>
		<tr>
		<td>

		</td>
		<td>
			<input type="submit" value="Registrarme" title="Registrarme" />
		</td>
		</tr>
	</table>
	<?php echo form_close() ?>
</fieldset>
</body>
</html>