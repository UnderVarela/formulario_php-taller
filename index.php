<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
  <title>Formulario PHP</title>
</head>
<body>
  <form>
    <h1>Enviar mensaje</h1>
    <label for="name">Nombre Completo*</label>
    <input type="text" placeholder="Perico de los palotes">
    <label for="email">Correo electrónico*</label>
    <input type="text" placeholder="pepitos@palotes.com">
    <label for="message">Mensaje*</label>
    <textarea name="message" cols="50" rows="10" placeholder="Mi mensaje"></textarea>
    <input type="checkbox"> <span>Acepto la politica de privacidad*</span><br>
    <button class="btn">Enviar</button>
  </form>
</body>
</html>