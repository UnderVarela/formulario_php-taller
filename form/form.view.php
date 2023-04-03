
  <main class="container">
    <h1 class="title">Enviar mensaje</h1>
    <form method="post">
      <div class="field">
        <label for="nombre-completo">
          Nombre Completo <span class="required">*</span>
        </label>
        <input value="<?=$_POST['nombre-completo']??''?>" 
        name="nombre-completo" id="nombre-completo" type="text" placeholder="Perico de los palotes">
      </div>
      <div class="field">
        <label for="correo">
          Correo Electronico <span class="required">*</span>
        </label>
        <input 
        value="<?=$_POST['correo']??''?>"
        name="correo" id="correo" type="text" placeholder="pericos@palotes.com">
      </div>
      <div>
        <label for="mensaje">
          Mensaje <span class="required">*</span>
        </label>
        <textarea name="mensaje" id="mensaje" placeholder="Escriba un mensaje"><?=$_POST['mensaje']??''?></textarea>
      </div>
      <div>
        <input 
        <?=(isset($_POST['politica-privacidad']) && $_POST['politica-privacidad']==="on")?'checked' : ''?> 
        type="checkbox" class="politica-privacidad" name="politica-privacidad" id="politica-privacidad">
        <label>
          Acepto la politica de privacidad <span class="required">*</span>
        </label>
      </div>
      <?=$errores ? $errores : ''?>
      <button class="btn-enviar">Enviar</button>
    </form>
  </main>