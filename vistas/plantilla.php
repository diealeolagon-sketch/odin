<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

  <!-- estilos para formularios -->
  

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php 
        include "modulos/encabezado.php";            
        include "modulos/menu.php";


        if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "inicio" ||
             $_GET["ruta"] == "gestion_usuarios" ||
             $_GET["ruta"] == "roles_permisos" ||
             $_GET["ruta"] == "dependencias" ||
             $_GET["ruta"] == "radicacion" ||
             $_GET["ruta"] == "consulta_seguimiento" ||
             $_GET["ruta"] == "series" ||
             $_GET["ruta"] == "subseries" ||
             $_GET["ruta"] == "gestion_tramites" ||
             $_GET["ruta"] == "reportes"||
             $_GET["ruta"] == "dependenciasForm"){

            include "modulos/".$_GET["ruta"].".php";

          }else{
            include "modulos/404.php";
          }
        } //fin lista Blanca
            include "modulos/footer.php";

  ?>
    
   
  

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>

<script src="vistas/dist/js/pages/dashboard.js"></script>
<script src="vistas/plugins/chart.js/Chart.min.js"></script>
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
