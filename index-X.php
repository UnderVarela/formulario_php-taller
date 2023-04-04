<?php

// Fichero de configuración
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

// Validaciones. No podemos usar extract() en este caso porque los name usan guiones.
$errores = '';

if(isset($_POST['btn-enviar'])) {

  // nombre
 $nombre = $_POST['nombre-completo'];
 $nombre = trim($nombre);
 $nombre = htmlspecialchars($nombre);
 if (strlen($nombre) === 0) {
  $errores.='<strong class="error">El campo nombre no puede estar vacío</strong>';
 }

  // correo
  $correo = $_POST['correo'];
  $correo = trim($correo);
  $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
  if (strlen($correo) === 0) {
   $errores.='<strong class="error">El campo correo no es válido</strong>';
  } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores.=sprintf('<strong class="error">El correo <mark>%s</mark> no es válido</strong>',$correo);
  }

  
// mensaje
 $mensaje = $_POST['mensaje'];
 $mensaje = trim($mensaje);
 $mensaje = htmlspecialchars($mensaje);
 if (strlen($mensaje) === 0) {
  $errores.='<strong class="error">El campo mensaje no puede estar vacío</strong>';
 }

 // Politica privacidad
 if (!isset($_POST['politica-privacidad'])) {
  $errores.='<strong class="error">Es necesario chequear la Politica de privacidad</strong>';
 }

}

// Envio correo una vez validado
if($errores==='' && isset($_POST['btn-enviar'])) {
  $texto = str_replace("\n.", "\n..", $_POST['mensaje']);
  $enviado = mail($_POST['correo'], 'Compra del cliente ---> '.$_POST['nombre-completo'], $texto);

if ($enviado) header ('Location: index-X.php?enviado=true');
}

// Vistas
require_once('./header.php');
require_once('./form/form.view.php');
require_once('./footer.php');