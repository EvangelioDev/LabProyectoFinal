<?php

class Organismo{
    public $id;
    public $id_organismo;
    public $estado;
    public $fecha;
    public $nombre;

    function parseArray($obj){
       $this->id = $obj["Id"];
       $this->id_organismo = $obj["Id_organismo"];
       $this->nombre = $obj["Nombre_organismo"];
       $this->estado = $obj["Estado"];
       $this->fecha = $obj["Fecha"];
    }
}