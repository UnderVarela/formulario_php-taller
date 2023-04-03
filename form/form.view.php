<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link rel="stylesheet" href="form/style.css">
  <title>Envío de formulario</title>
</head>

<body class="body">
  <main class="container">
    <h1 class="title">Enviar mensaje</h1>
    <form method="post">
      <div class="field">
        <label for="nombre-completo">
          Nombre Completo <span class="required">*</span>
        </label>
        <input name="nombre-completo" id="nombre-completo" type="text" placeholder="Perico de los palotes">
      </div>
      <div class="field">
        <label for="correo">
          Correo Electronico <span class="required">*</span>
        </label>
        <input name="correo" id="correo" type="text" placeholder="pericos@palotes.com">
      </div>
      <div>
        <label for="mensaje">
          Mensaje <span class="required">*</span>
        </label>
        <textarea name="mensaje" id="mensaje"></textarea>
      </div>
      <div>
        <input type="checkbox" class="politica-privacidad" name="politica-privacidad" id="politica-privacidad">
        <label>
          Acepto la politica de privacidad <span class="required">*</span>
        </label>
      </div>
      <button class="btn-enviar">Enviar</button>
    </form>
  </main>

</body>

</html>