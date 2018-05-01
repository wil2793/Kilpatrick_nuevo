<html>
<head>
	<title></title>
	<META charset="utf-8">

	    <script type="text/javascript">

function validar(){

if (document.form.nombre.value.length==0){
alert("No puedes dejar en blanco el nombre")
document.form.nombre.focus()
return 0;
}

document.form.submit();
}

</script>


</head>
<body>


				
			<form name="form" method="post" action="action.php"><br>
<table cellspacing="0" align="center" border="0">
	

<tr><td align="right"><label class="texto">Nombre: </label></td><td>
<input type="text" name="nombre" size="30" value=""></td></tr>
&nbsp;

	<tr><td align="right"><label class="texto">Apellido: </label></td><td>
		<input type="text" name="apellido" size="30" value=""></td></tr>
</td></tr>

	<tr><td align="right"><label class="texto">grado: </label></td><td>
		<input type="text" name="grado" size="30" value=""></td></tr>
</td></tr>

<tr><td align="right"><label class="texto">grupo: </label></td><td><input type="text" name="grupo" size="30" value=""></td></tr>
</td></tr>

<tr><td align="right"><label class="texto">Nombre del tutor: </label></td><td><input type="text" name="nombre_tutor" size="30" value=""></td></tr>
</td></tr>

<tr><td align="right"><label class="texto">Telefono del tutor: </label></td><td><input type="text" name="tel_tutor" size="30" value=""></td></tr>
</td></tr>
<tr><td align="right"><label class="texto">Dirección: </label></td><td><input type="text" name="direccion" size="30" value=""></td></tr>
</td></tr>


<tr><td>
<td>
	 <input name="id" type="hidden" value="" >
	<input name="boton" type="submit" value=" Guardar " onclick="validar()"></td>
</td></tr>

</table></form>

</body>
</html>