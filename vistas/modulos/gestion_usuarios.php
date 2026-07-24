  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Gestion de usuarios</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <!-- <li class="breadcrumb-item active">Inicio</li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">


        <div class="col-lg-3 col-sm-12">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Total registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-12">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Roles activos</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-12">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Documentos en trámite</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-12">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Documentos cerrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->




      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregarUsuario">Agregar Usuario</button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tblUsuarios" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>usuario</th>
                    <th>identificacion</th>
                    <th>Rol</th>
                    <th>Dependencia</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $respuesta = ControladorUsuarios::ctrMostrarUsuarios();
                  // var_dump($respuesta);
                
                  foreach ($respuesta as $usuario) {
                    
                    echo "<tr>";
                      echo "<td>".$usuario['id_usuario']."</td>";
                      echo "<td>".$usuario['nombre']."</td>";
                      echo "<td>".$usuario['num_identificacion']."</td>";
                      echo "<td>".$usuario['rol']."</td>";
                      echo "<td>".$usuario['dependencia']."</td>";
                      echo "<td>";
                      //boton de estado activo o inactivo
                      if ($usuario['estado'] == "ACTIVO") {
                        echo "<button class='btn btn-xs btn-success btnActivarUsuario' data-estadoUsuario = 'Inactivo' data-idUsuario='".$usuario['id_usuario']."'>Activo</button>";
                      }else{
                        echo "<button class='btn btn-xs btn-danger btnActivarUsuario' data-estadoUsuario = 'Activo' data-idUsuario='".$usuario['id_usuario']."'>Inactivo</button>";                        
                      }

                      echo "</td>";
                      echo "<td>";
                        echo "<button><i class='fa fa-edit'></i></button>";
                        echo "<button><i class='fa fa-eye'></i></button>";
                      echo "</td>";
                    echo "</tr>";


                  }// End of foreach

                ?>
 
                </tbody>


              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->


  <!-- ***************************************************************************************************************************************** -->

  <!-- MODAL DE NUEVO USUARIO -->
  <div class="modal fade" id="modal-agregarUsuario">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header bg-primary">

          <h4 class="modal-title">Agregar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        <div class="modal-body">
          <!-- <p>One fine body&hellip;</p> -->
          <form id="frmUsuarios" class="form-horizontal method=" post">
            <div class="card-body">

              <!-- select de tipo de documento y numero de identificacion -->
              <div class="form-group row">

                <div class="col-md-5">
                  <select class="form-control" id="inputTipoDocumento">
                    <option value="">Seleccione</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="CC">Cédula de ciudadanía</option>
                    <option value="CE">Cédula de extranjería</option>
                    <option value="PA">Pasaporte</option>
                  </select>
                </div>

                <div class="col-md-7">
                  <input type="text" class="form-control" id="inputNumeroIdentificacion" placeholder="Número de identificación">
                </div>

              </div>

              <!-- input de nombre de usuario -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="inputUsuario" placeholder="Nombre completo">
              </div>

              <!-- input de correo electronico -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email">
              </div>


              <!-- select del rol del usuario -->
              <div class="form-group row">
                <label for="inputRol" class="col-sm-2 col-form-label">Rol</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputRol">
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario">Usuario</option>
                    <option value="Analista">Analista</option>
                    <option value="Supervisor">Supervisor</option>
                  </select>
                </div>
              </div>

              <!-- select de la dependencia del usuario -->
              <div class="form-group row">
                <label for="inputDependencia" class="col-md-3 col-form-label">Dependencia</label>
                <div class="col-md-9">
                  <select class="form-control" id="inputDependencia">
                    <option value="">Seleccione</option>
                    <option value="">TI</option>
                    <option value="">Coordinación</option>
                    <option value="">Subdirección</option>
                    <option value="">Bienestar</option>
                    <option value="">Almacén</option>
                    <option value="">Archivo</option>
                  </select>
                </div>
              </div>
            </div>
          </form>

        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.MODAL DE NUEVO USUARIO -->