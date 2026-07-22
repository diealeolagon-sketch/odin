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
                  <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>1023456789</td>
                    <td>Administrador</td>
                    <td>TI</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>María Gómez</td>
                    <td>1034567890</td>
                    <td>Analista</td>
                    <td>Finanzas</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Carlos Ramírez</td>
                    <td>1045678901</td>
                    <td>Supervisor</td>
                    <td>Recursos Humanos</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Ana Torres</td>
                    <td>1056789012</td>
                    <td>Usuario</td>
                    <td>Compras</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Luis Mendoza</td>
                    <td>1067890123</td>
                    <td>Analista</td>
                    <td>Jurídica</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Laura Díaz</td>
                    <td>1078901234</td>
                    <td>Administrador</td>
                    <td>Sistemas</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Pedro Castro</td>
                    <td>1089012345</td>
                    <td>Usuario</td>
                    <td>Almacén</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Sofía Herrera</td>
                    <td>1090123456</td>
                    <td>Supervisor</td>
                    <td>Operaciones</td>
                    <td>
                      <button class="btn btn-xs btn-danger">inactivo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Diego López</td>
                    <td>1101234567</td>
                    <td>Analista</td>
                    <td>TI</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Camila Rojas</td>
                    <td>1112345678</td>
                    <td>Usuario</td>
                    <td>Comercial</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Andrés Vargas</td>
                    <td>1123456789</td>
                    <td>Administrador</td>
                    <td>Gerencia</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Paula Moreno</td>
                    <td>1134567890</td>
                    <td>Supervisor</td>
                    <td>Calidad</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Jorge Sánchez</td>
                    <td>1145678901</td>
                    <td>Usuario</td>
                    <td>Logística</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Natalia Ruiz</td>
                    <td>1156789012</td>
                    <td>Analista</td>
                    <td>Planeación</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Ricardo Ortiz</td>
                    <td>1167890123</td>
                    <td>Supervisor</td>
                    <td>Mantenimiento</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Valentina Gil</td>
                    <td>1178901234</td>
                    <td>Administrador</td>
                    <td>TI</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Fernando Silva</td>
                    <td>1189012345</td>
                    <td>Usuario</td>
                    <td>Atención al Cliente</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Diana Cárdenas</td>
                    <td>1190123456</td>
                    <td>Analista</td>
                    <td>Marketing</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Miguel Ángel León</td>
                    <td>1201234567</td>
                    <td>Supervisor</td>
                    <td>Seguridad</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Daniela Martínez</td>
                    <td>1212345678</td>
                    <td>Usuario</td>
                    <td>Contabilidad</td>
                    <td>
                      <button class="btn btn-xs btn-success">activo</button>
                    </td>
                    <td>
                      <button><i class="fa fa-edit"></i></button>
                      <button><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
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