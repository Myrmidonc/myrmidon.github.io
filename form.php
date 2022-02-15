<?php 
$Nombre = $_GET ['firstname']
$Apellidos = $_GET ['lastname']
$Email = $_GET ['email']
$Asunto = $_GET ['subject']

echo "<h2>Información recibida</h2>";
echo "Nombre completo" . $Nombre $Apellidos "<br/>"
echo "Correo" . $Email "<br/>"
echo "Asunto" . $Asunto "<br/>"

?>