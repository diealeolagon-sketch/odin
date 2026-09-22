<?php ControladorRoles::ctrGuardarRol(); ?>
<section class="content-header"><div class="container-fluid"><div class="row mb-2">
  <div class="col-sm-6"><h1>Gestión de roles</h1><p class="text-muted mb-0">Administre los roles registrados en el sistema.</p></div>
  <div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="permisos" class="btn btn-info"><i class="fas fa-user-shield"></i> Permisos</a></li><li class="breadcrumb-item"><a href="roles_permisosForm" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo rol</a></li></ol></div>
</div></div></section>
<section class="content"><div class="container-fluid"><div class="card card-primary card-outline shadow"><div class="card-header"><h3 class="card-title"><i class="fas fa-user-shield mr-2"></i>Gestión de Roles</h3></div><div class="card-body">
<table id="example1" class="table table-bordered table-hover table-striped"><thead class="bg-primary"><tr><th>ID</th><th>Nombre</th><th>Rol</th><th>Nivel</th><th>Estado</th><th>Acciones</th></tr></thead><tbody>
<?php foreach (ControladorRoles::ctrMostrarRoles() as $rol): ?>
<tr><td><?php echo (int) $rol['id_rol']; ?></td><td><?php echo htmlspecialchars($rol['nombre'], ENT_QUOTES, 'UTF-8'); ?></td><td><?php echo htmlspecialchars($rol['rol'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td><td><?php echo (int) ($rol['nivel_acceso'] ?? 0); ?></td><td><span class="badge <?php echo ($rol['estado'] ?? '') === 'Activo' ? 'badge-success' : 'badge-danger'; ?>"><?php echo htmlspecialchars($rol['estado'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td><td><a href="roles_permisosForm?id=<?php echo (int) $rol['id_rol']; ?>" class="btn btn-info btn-sm" title="Editar"><i class="fas fa-edit"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div></div></div></section>
