<?php
class clase_ciclos
{   public $vLcic_codigo;
    public $vlcic_nombre;
    public $vlcic_observ;
    public function __construct()
    {
        $this->vLcic_codigo="";
        $this->vlcic_nombre="";
        $this->vlcic_observ="";
    }
    public function _insertar($vlcic_nombre, $vlcic_observ) {
        require_once("../../../conexion/conexion.php");
        $dmlsentencia = "INSERT INTO snv_ciclos (cic_nombre, cic_observ) VALUES ('" . $vlcic_nombre . "','" . $vlcic_observ . "')";
        $registros = $pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from snv_ciclos";
        }
        else
        {
            $dmlsentencia = "select * from snv_ciclos where cic_nombre like '%" . $valor . "%'";

        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $observacion)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>