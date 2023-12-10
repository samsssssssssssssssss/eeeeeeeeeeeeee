<?php
require_once("modelociclo.php");
$provincia = new clase_ciclos();
$registros = $provincia->_consultartodo($_POST['valor']);
echo "<thead class='bg-primary text-light text-center'>
         <tr>
             <th>ID</th>
             <th>NOMBRE DE CICLOS</th>
             <th>OBSERVACION</th>
             <th>Editar</th>
             <th>Eliminar</th>
         </tr>
      </thead>";

if ($registros) {
    $f = 1;
    while ($fila = $registros->fetch()) {
        echo "<tr>
                <td>".$fila['cic_codigo']."</td>
                <td>".$fila['cic_nombre']."</td>
                <td>".$fila['cic_observ']."</td>
                <td><button class='btn btn-warning' onclick='editar_ciclo({$fila['cic_codigo']})'>Editar</button></td>
                <td><button class='btn btn-danger' onclick='eliminar_ciclo({$fila['cic_codigo']})'>Eliminar</button></td>
              </tr>";
        $f++;
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
}
?>
