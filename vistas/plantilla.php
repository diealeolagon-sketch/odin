<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">   
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">   

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php 
        include "modulos/encabezado.php";
        include "modulos/menu.php";

        echo '<div class="content-wrapper">';


        if (isset($_GET["ruta"])){


            if(
                $_GET["ruta"]=="contacto" ||
                $_GET["ruta"]=="inicio" ||
                $_GET["ruta"]=="gestion_usuarios" ||
                $_GET["ruta"]=="roles_permisos" ||
                $_GET["ruta"]=="dependencias" ||
                $_GET["ruta"]=="radicacion" ||
                $_GET["ruta"]=="consulta_seguimiento" ||
                $_GET["ruta"]=="series_documentales" ||
                $_GET["ruta"]=="subseries_documentales" ||
                $_GET["ruta"]=="gestion_tramites" ||
                $_GET["ruta"]=="reportes"

            ){
                include "modulos/".$_GET["ruta"].".php";
            }//fin de la lista blanca
            else{
                include "modulos/error404.php";
            }

        } //fin de la captura de la variable ruta
       
        echo '</div>';
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
<!-- <script src="vistas/dist/js/demo.js"></script> -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> 


<script>
  $(function () {
    $("#tblUsuarios").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf"]
    }).buttons().container().appendTo('#tblUsuarios_wrapper .col-md-6:eq(0)');

  });
</script>





</body>
</html>
