<?php
$roles = ControladorRoles::ctrMostrarRoles();
$idRol = (int) ($_POST['id_rol'] ?? $_GET['id_rol'] ?? ($roles[0]['id_rol'] ?? 0));
ControladorRoles::ctrGuardarPermisos();
$permisosAsignados = ControladorRoles::ctrPermisosDelRol($idRol);
$permisos = ControladorRoles::ctrMostrarPermisos();
?>
<section class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1>Gestión de Permisos</h1><p class="text-muted mb-0">Administra los permisos de acceso de cada rol.</p></div></div></div></section>
<section class="content"><div class="container-fluid"><div class="card card-info card-outline shadow"><div class="card-header"><h3 class="card-title"><i class="fas fa-user-shield mr-2"></i>Configuración de Permisos</h3></div><div class="card-body">
<form method="post" action="permisos"><div class="row mb-4"><div class="col-md-5"><label for="rol">Seleccionar rol</label><select class="form-control" id="rol" name="id_rol" onchange="window.location='permisos?id_rol='+this.value">
<?php foreach ($roles as $rol): ?><option value="<?php echo (int) $rol['id_rol']; ?>" <?php echo $idRol === (int) $rol['id_rol'] ? 'selected' : ''; ?>><?php echo htmlspecialchars($rol['nombre'], ENT_QUOTES, 'UTF-8'); ?></option><?php endforeach; ?>
</select></div></div>
<div class="table-responsive"><table class="table table-bordered table-hover"><thead class="bg-info"><tr><th>Permiso</th><th>Descripción</th><th>Módulo</th><th>Acción</th><th class="text-center">Asignado</th></tr></thead><tbody>
<?php foreach ($permisos as $permiso): ?><tr><td><?php echo htmlspecialchars($permiso['nombre'], ENT_QUOTES, 'UTF-8'); ?></td><td><?php echo htmlspecialchars($permiso['descripcion'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td><td><?php echo htmlspecialchars($permiso['modulo'], ENT_QUOTES, 'UTF-8'); ?></td><td><?php echo htmlspecialchars($permiso['accion'], ENT_QUOTES, 'UTF-8'); ?></td><td class="text-center"><input type="checkbox" name="permisos[]" value="<?php echo (int) $permiso['id_permiso']; ?>" <?php echo in_array((int) $permiso['id_permiso'], $permisosAsignados, true) ? 'checked' : ''; ?>></td></tr><?php endforeach; ?>
</tbody></table></div><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar permisos</button></form>
</div></div></div></section>
