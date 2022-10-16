<?php
session_start();
require_once 'ControladorSesion.php';
require_once 'RepositorioFactura.php';

$cs = new ControladorSesion();
$repo_Factura = new RepositorioFactura();

$factura = $repo_Factura->verFactura($_POST['nroFca']);
$usuario = unserialize($_SESSION['usuario']);

$cs->bajaFactura($factura, $usuario);

$redirigir = 'main.php?mensaje= Factura dada de baja con éxito' . $listado_facturas;
header('Location: '.$redirigir);
?>
