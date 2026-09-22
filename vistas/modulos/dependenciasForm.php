<?php
$id = (int) ($_GET['id'] ?? 0);
$dependenciaActual = null;
if ($id) {
    foreach (ControladorDependencias::ctrMostrarDependencias() as $dependencia) {
        if ((int) $dependencia['id_dependencia'] === $id) { $dependenciaActual = $dependencia; break; }
    }
}
$valor = function ($campo, $porDefecto = '') use ($dependenciaActual) { return htmlspecialchars($dependenciaActual[$campo] ?? $porDefecto, ENT_QUOTES, 'UTF-8'); };
?>
<section class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1><?php echo $id ? 'Editar' : 'Crear'; ?> dependencia</h1></div></div></div></section>
<section class="content"><div class="container-fluid"><div class="card card-primary"><div class="card-header"><h3 class="card-title">Información de la dependencia</h3></div>
<form method="POST" action="dependencias"><input type="hidden" name="id_dependencia" value="<?php echo $id; ?>"><div class="card-body">
<div class="form-group"><label>Nombre</label><input type="text" class="form-control" name="nombre" value="<?php echo $valor('nombre'); ?>" required></div>
<div class="form-group"><label>Código / sigla</label><input type="text" class="form-control" name="codigo" value="<?php echo $valor('codigo'); ?>" required></div>
<div class="form-group"><label>Descripción</label><textarea class="form-control" name="descripcion" rows="3"><?php echo $valor('descripcion'); ?></textarea></div>
<div class="form-group"><label>Persona encargada</label><input type="text" class="form-control" name="encargado" value="<?php echo $valor('encargado'); ?>" required></div>
<div class="form-group"><label>Estado</label><select class="form-control" name="estado"><option value="Activo" <?php echo ($dependenciaActual['estado'] ?? 'Activo') === 'Activo' ? 'selected' : ''; ?>>Activo</option><option value="Inactivo" <?php echo ($dependenciaActual['estado'] ?? '') === 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option></select></div>
</div><div class="card-footer"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button> <a href="dependencias" class="btn btn-secondary">Cancelar</a></div></form>
</div></div></section>
