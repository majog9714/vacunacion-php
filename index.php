<html>
  <head>
    <title>Vacunación COVID 2021</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="imagen">
      <img src="covid.png" alt="covid">
    </div>
    <h1>REGISTRO DE VACUNACIÓN COVID-19 2021</h1>
    <h2>A continuación registre los datos en orden</h2>
    <form action="guardar.php" method="post" class="form">
      Nombre:<input name="nombre" type="text" required> <br>
      Cédula:<input name="cedula" type="text" required> <br>
      Nombre del Biológico: <select name="vacuna_tipo" class="combo" id="type_id" required>
        <option value="Pfizer">Pfizer</option>
        <option value="Sinovac">Sinovac</option>
        <option value="Janssen">Janssen</option>
        <option value="Moderna">Moderna</option>
        <option value="Aztrazeneca">Aztrazeneca</option>
        </select> <br>
      Fecha de aplicación 1 dosis: <input type="date" name="fecha1" required> <br>
      Fecha de aplicación 2 dosis: <input type="date" name="fecha2" required> <br>
      <input id="enviar" type="submit" value="Enviar">
    </form>
    <h2>Para consultar hacer click en el siguiente botón</h2>
<div class="boton">
  <button id="btnHome" onClick="document.location.href='leer.php'">Consultar</button>
</div>
  </body>
</html>
