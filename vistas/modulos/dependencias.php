<?php ControladorDependencias::ctrGuardarDependencia(); ?>
<section class="content-header">
  <div class="container-fluid"><div class="row mb-2">
    <div class="col-sm-6"><h1>Dependencias</h1><p class="text-muted mb-0">Administra las dependencias registradas en el sistema.</p></div>
    <div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="dependenciasForm" class="btn btn-primary"><i class="fas fa-plus"></i> Nueva Dependencia</a></li></ol></div>
  </div></div>
</section>
<section class="content"><div class="container-fluid"><div class="card card-primary card-outline shadow">
  <div class="card-header"><h3 class="card-title"><i class="fas fa-building mr-2"></i>Gestión de Dependencias</h3></div>
  <div class="card-body"><table id="example1" class="table table-bordered table-hover table-striped">
    <thead class="bg-primary"><tr><th>ID</th><th>Nombre</th><th>Código</th><th>Encargado</th><th>Estado</th><th>Acciones</th></tr></thead>
    <tbody>
    <?php foreach (ControladorDependencias::ctrMostrarDependencias() as $dependencia): ?>
      <tr>
        <td><?php echo (int) $dependencia['id_dependencia']; ?></td>
        <td><?php echo htmlspecialchars($dependencia['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($dependencia['codigo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($dependencia['encargado'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
        <td><span class="badge <?php echo ($dependencia['estado'] ?? '') === 'Activo' ? 'badge-success' : 'badge-danger'; ?>"><?php echo htmlspecialchars($dependencia['estado'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
        <td><a href="dependenciasForm?id=<?php echo (int) $dependencia['id_dependencia']; ?>" class="btn btn-info btn-sm" title="Editar"><i class="fas fa-edit"></i></a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table></div>
</div></div></section>
