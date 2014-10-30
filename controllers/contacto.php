<?php
	$titulo = "Contactanos";
	$contenido = "<table>
	<tr>
		<td>Nombre:</td><td><input type='text' name='nombre'></td>
	</tr>
	<tr>
		<td>Email:</td><td><input type='text'></td>
	</tr>
	<tr>
		<td colspan='2'>Comentarios:</td>
	</tr>
	<tr>
		<td colspan='2'><textarea name='comentarios' rows='10' cols='40'>Escribe aqu&iacute; tus comentarios</textarea></td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' value='Enviar'></td>
	</tr>
	</table>";
	$variables = array('titulo' => $titulo,'contenido' => $contenido);
	view('home', $variables);
?>