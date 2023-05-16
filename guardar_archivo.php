<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$contenido = $nombre+"\n"+$email+"\n"+$phone+"\n"+$message;
	$archivo = fopen("./datos.txt", "a") or die("No se pudo abrir el archivo");
	fwrite($archivo, $contenido);
	fclose($archivo);
	echo "Los datos se han guardado correctamente en el archivo datos.html";
}
?>