
<?php 

class Formacion{
    public $id;
    public $descripcion;
    public $id_investigador;
    public $id_nivel_formacion;
    public $nivel_formacion;

    function parseArray($obj){
        $this->id = $obj["id_DetalleFormacion"];
        $this->descripcion = $obj["descripcion"];
        $this->id_investigador = $obj["investigador_id"];
        $this->id_nivel_formacion = $obj["nivelFormacion_id"];
        $this->nivel_formacion = $obj["nombre"];
    }

}