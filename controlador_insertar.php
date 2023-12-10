<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
require_once('modelociclo.php');

$obj = new clase_ciclos();
$result = $obj->_insertar($_POST['cic_nombre'], $_POST['cic_observacion']);

if ($result) {
    echo '<script>jQuery(function(){swal({
        title:"Guardar ciclos", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/ciclos/crud_ciclos.php";});});</script>';
} else {
    echo '<script>jQuery(function(){swal({
        title:"Guardar ciclos", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/ciclos/crud_ciclos.php";});});</script>';
}
?>



