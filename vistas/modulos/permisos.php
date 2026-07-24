<!-- Content Header -->
<section class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Gestión de Permisos</h1>
                <p class="text-muted mb-0">
                    Administra los permisos de acceso de cada rol del sistema.
                </p>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">

                        <a href="roles_permisos" class="btn btn-info">
                            <i class="fas fa-save"></i>
                            Guardar Permisos
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

<div class="card card-info card-outline shadow">

<div class="card-header">

<h3 class="card-title">
<i class="fas fa-user-shield mr-2"></i>
Configuración de Permisos
</h3>

</div>


<div class="card-body">


<div class="row mb-4">

<div class="col-md-4">

<label>Seleccionar Rol</label>

<select class="form-control" id="rol">

<option value="administrador">Administrador</option>
<option value="secretario">Secretario</option>
<option value="jefe">Jefe de Dependencia</option>
<option value="consulta">Consulta</option>

</select>

</div>

</div>



<div class="table-responsive">

<table class="table table-bordered table-hover">


<thead class="bg-info">

<tr>

<th>Módulo</th>
<th class="text-center">Ver</th>
<th class="text-center">Crear</th>
<th class="text-center">Editar</th>
<th class="text-center">Eliminar</th>
<th class="text-center">Descargar</th>
<th class="text-center">Aprobar</th>

</tr>

</thead>


<tbody>


<tr>
<td>Bandeja de Entrada</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


<tr>
<td>Gestión de Usuarios</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


<tr>
<td>Dependencias</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


<tr>
<td>Series Documentales</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


<tr>
<td>Subseries Documentales</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


<tr>
<td>Radicación</td>

<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>
<td class="text-center"><input class="permiso" type="checkbox"></td>

</tr>


</tbody>

</table>

</div>


</div>

</div>

</div>

</section>



<script>


const permisosRoles = {

administrador:[
1,1,1,1,1,1,
1,1,1,1,1,1,
1,1,1,1,1,1,
1,1,1,1,1,1,
1,1,1,1,1,1,
1,1,1,1,1,1
],


secretario:[
1,1,1,0,1,1,
1,1,1,0,1,0,
1,0,0,0,1,0,
1,1,0,0,1,0,
1,0,0,0,1,0,
1,1,1,0,1,0
],


jefe:[
1,1,1,0,1,1,
1,0,0,0,1,0,
1,1,1,0,1,0,
1,0,0,0,1,0,
1,0,0,0,1,0,
1,1,0,0,1,1
],


consulta:[
1,0,0,0,1,0,
1,0,0,0,1,0,
1,0,0,0,1,0,
1,0,0,0,1,0,
1,0,0,0,1,0,
1,0,0,0,1,0
]

};



function cargarPermisos(){

    let rol = document.getElementById("rol").value;

    let permisos = document.querySelectorAll(".permiso");

    let valores = permisosRoles[rol];


    permisos.forEach((check,index)=>{

        check.checked = valores[index] === 1;

    });

}



document.getElementById("rol").addEventListener(
"change",
cargarPermisos
);


// cargar permisos iniciales
cargarPermisos();


</script>