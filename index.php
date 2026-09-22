<?php

require_once "controladores/plantilla.controlador.php";

require_once "controladores/usuarios.controlador.php";
require_once "controladores/roles.controlador.php";
require_once "controladores/dependencias.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/roles.modelo.php";
require_once "modelos/dependencias.modelo.php";

require_once "controladores/auth.controlador.php";
require_once "modelos/auth.modelo.php";

session_start();

if (isset($_GET["ruta"]) && $_GET["ruta"] === "salir") {
	ControladorAuth::ctrCerrarSesion();
}

if (!isset($_SESSION["usuario"])) {
	ControladorAuth::ctrLogin();
	exit;
}

$permisosRuta = array(
	"gestion_usuarios" => "ver_usuarios",
	"roles_permisos" => "admin_usuarios",
	"roles_permisosForm" => "admin_usuarios",
	"permisos" => "admin_usuarios",
	"dependencias" => "admin_dependencias",
	"dependenciasForm" => "admin_dependencias",
	"radicacion" => "crear_radicado",
	"consulta_seguimiento" => "ver_radicados",
	"series_documentales" => "admin_ccd",
	"subseries_documentales" => "admin_ccd",
	"gestion_tramites" => "ver_tramites",
	"reportes" => "ver_reportes"
);
if (isset($_GET["ruta"], $permisosRuta[$_GET["ruta"]]) && !ControladorAuth::ctrTienePermiso($permisosRuta[$_GET["ruta"]])) {
	header("Location: inicio");
	exit;
}




$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();