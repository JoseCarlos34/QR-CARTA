<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $cumple = $_POST["cumple"];

  // Aquí puedes guardar en una base de datos o archivo
  file_put_contents("registros.txt", "$nombre | $correo | $cumple\n", FILE_APPEND);
  echo "¡Gracias por registrarte!";
} else {
  echo "Acceso no permitido.";
}
?>
