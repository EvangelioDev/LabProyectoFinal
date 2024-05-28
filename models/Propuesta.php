<?php

class Propuesta{
    public $id_propuesta;
    public $titulo;
    public $id_linea_investigacion;
    public $fecha_inicio;
    public $fecha_final;
    public $id_facultad;
    public $estado;
    public $costo_total;


    function parseArray($obj){
        $this->id_propuesta = $obj["Id_Propuesta"];
        $this->titulo = $obj["Titulo"];
        $this->id_linea_investigacion = $obj["id_Linea_investigacion"];
        $this->fecha_inicio = $obj["fecha_inicio"];
        $this->fecha_final = $obj["fecha_final"];
        $this->id_facultad = $obj["Id_Facultad"];
        $this->estado = $obj["Estado"];
        $this->costo_total = $obj["Costo_total"];
    }
}