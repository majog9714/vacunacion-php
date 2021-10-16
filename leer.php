<?php

$archivo= fopen("vacunacion.txt","r") or die ("problemas al abrir el archivo.txt");
echo '<div class="imagen">
  <img src="covid.png" alt="covid">
</div>';
echo '<h1>REGISTRO VACUNACIÓN COVID-19</h1>';
echo '<h2>Consulta</h2>';
echo '<div class=form>';
echo '<table border=2>';
echo '<th>Nombre</th><th>Cédula</th><th>Nombre del Biológico</th><th>Fecha dosis 1</th><th>Fecha dosis 2</th>';
  while (!feof($archivo)) {
    $linea= fgets($archivo);
    $saltodelinea=nl2br($linea);
    $datos= explode (";", $saltodelinea);
    echo '<tr>';
    for ($i=0; $i <count($datos)-1 ; $i++) {
      echo '<td>'.$datos[$i].'</td>';
    }
    echo '</tr>';

  }
  echo '</table>';
echo '</div>';
fclose($archivo);
echo "<button onClick=\"document.location.href='index.php'\">Regresar a Registro</button>";
 ?>
 <style>
 <?php include 'estilos.css'; ?>
 </style>
