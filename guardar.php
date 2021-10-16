<?php
  $nombre = $_POST['nombre'];
  $cedula = $_POST['cedula'];
  $vacuna_tipo = $_POST['vacuna_tipo'];
  $fecha1 = $_POST['fecha1'];
  $fecha2 = $_POST['fecha2'];

  $f = fopen ("vacunacion.txt", "a+")
  or die ("problemas al crear archivo");
  fwrite ($f, $nombre.";");
  fwrite ($f, $cedula.";");
  fwrite ($f, $vacuna_tipo.";");
  fwrite ($f, $fecha1.";");
  fwrite ($f, $fecha2.";");
  fwrite ($f, "\n");
  fclose($f);
  echo "<h2>Registro exitoso</h2>";
  echo "<button onClick=\"document.location.href='index.php'\">Regresar a Registro</button>";
?>
<style>
<?php include 'estilos.css'; ?>
</style>
