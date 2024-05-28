<?php 

class Fuente{
    public $id;
    public $nombre_institucion;
    public $id_tipo_financiamiento;
    public $descripcion;

    function parseArray($obj){
        $this->id = $obj["Id"];
        $this->nombre_institucion = $obj["Nombre_Institucion"];
        $this->id_tipo_financiamiento = $obj["Id_tipo_Fincamiento"];
        $this->descripcion = $obj["Descripcion"];
    }
}