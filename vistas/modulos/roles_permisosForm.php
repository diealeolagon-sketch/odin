

    <?php
    ControladorRoles::ctrGuardarRol();
    $idRol = (int) ($_GET['id'] ?? 0);
    $rolActual = $idRol > 0 ? ControladorRoles::ctrMostrarRol($idRol) : array();
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">


                <div class="col-sm-6">

                    <h1>Edita o crea roles</h1>

                    <p class="text-muted mb-0">
                        Formulario para administrar los roles del sistema.
                    </p>

                </div>




                <div class="col-sm-6">


                    <ol class="breadcrumb float-sm-right">


                        <li class="breadcrumb-item">

                            <a href="roles_permisos">

                                <button type="button" 
                                        class="btn btn-secondary">

                                    <i class="fas fa-arrow-left"></i>
                                    Volver

                                </button>

                            </a>


                        </li>


                    </ol>


                </div>



            </div>


        </div>

    </section>






    <!-- Main content -->
    <section class="content">


        <div class="container-fluid">



            <!-- Card -->

            <div class="card card-primary card-outline shadow">



                <div class="card-header">


                    <h3 class="card-title">

                        <i class="fas fa-user-shield mr-2"></i>

                        Información del rol

                    </h3>


                </div>






                <!-- Form -->

                <form method="POST" action="roles_permisosForm">
                    <input type="hidden" name="id_rol" value="<?php echo $idRol; ?>">


                    <div class="card-body">





                        <!-- Nombre -->

                        <div class="form-group">


                            <label>
                                Nombre del rol
                            </label>


                            <input 
                                type="text"
                                class="form-control"
                                name="nombre"
                                placeholder="Ejemplo: Administrador"
                                value="<?php echo htmlspecialchars($rolActual['nombre'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                required>


                        </div>







                        <!-- Tipo de rol -->

                        <div class="form-group">


                            <label>
                                Tipo de rol
                            </label>



                            <select 
                                class="form-control select2"
                                name="rol"
                                style="width:100%;"
                                required>


                                <option disabled <?php echo empty($rolActual['rol']) ? 'selected' : ''; ?>>
                                    Seleccione un tipo de rol
                                </option>


                                <option value="admin" <?php echo ($rolActual['rol'] ?? '') === 'admin' ? 'selected' : ''; ?>>
                                    Administrador
                                </option>


                                <option value="usuario" <?php echo ($rolActual['rol'] ?? '') === 'usuario' ? 'selected' : ''; ?>>
                                    Usuario
                                </option>


                                <option value="supervisor" <?php echo ($rolActual['rol'] ?? '') === 'supervisor' ? 'selected' : ''; ?>>
                                    Supervisor
                                </option>


                                <option value="invitado" <?php echo ($rolActual['rol'] ?? '') === 'invitado' ? 'selected' : ''; ?>>
                                    Invitado
                                </option>



                            </select>


                        </div>

                        <div class="form-group">
                            <label>Nivel de acceso</label>
                            <input type="number" class="form-control" name="nivel_acceso" min="1" value="<?php echo (int) ($rolActual['nivel_acceso'] ?? 1); ?>" required>
                        </div>








                        <!-- Descripción -->

                        <div class="form-group">


                            <label>
                                Descripción
                            </label>



                            <textarea
                                class="form-control"
                                name="descripcion"
                                rows="4"
                                placeholder="Ingrese una descripción del rol">
                            </textarea>


                        </div>








                        <!-- Estado -->

                        <div class="form-group">


                            <label>
                                Estado
                            </label>



                            <select 
                                class="form-control select2"
                                name="estado"
                                style="width:100%;">



                                <option disabled <?php echo empty($rolActual['estado']) ? 'selected' : ''; ?>>
                                    Seleccione
                                </option>



                                <option value="Activo" <?php echo ($rolActual['estado'] ?? '') === 'Activo' ? 'selected' : ''; ?>>
                                    Activo
                                </option>



                                <option value="Inactivo" <?php echo ($rolActual['estado'] ?? '') === 'Inactivo' ? 'selected' : ''; ?>>
                                    Inactivo
                                </option>



                            </select>


                        </div>




                    </div>
                    <!-- /.card-body -->







                    <!-- Footer -->

                    <div class="card-footer">



                        <button 
                            type="submit"
                            class="btn btn-primary">


                            <i class="fas fa-save"></i>

                            Guardar Cambios


                        </button>





                        <a href="roles_permisos"
                           class="btn btn-danger">


                            <i class="fas fa-times"></i>

                            Cancelar


                        </a>



                    </div>




                </form>



            </div>



        </div>



    </section>
    <!-- /.content -->

