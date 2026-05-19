<?php 

include_once '../../utils/funciones.php';
include_once '../../controller/usuario/abmusuario.php';

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

verEstructura($datos);

if ($abmUsuario->validacionAlta($datos)) {

    // Todo ok
    $message = 'Valido';
    header("Location: ../pages/ejercicio1.php?Message=" . urlencode($message));
    exit;

} else {

    // Hubo error
    $message = 'Fallido';
    header("Location: ../pages/ejercicio2.php?Message=" . urlencode($message));
    exit;
}
?>