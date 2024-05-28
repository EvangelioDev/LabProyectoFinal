<?php
class Instituto{
    public $id;
    public $nombre;
    public $codigo;
    public $id_facultad;

    function parseArray($obj){
        $this->id = $obj["Id_instituto"];
        $this->nombre = $obj["Nombre"];
        $this->codigo = $obj["Codigo"];
        $this->id_facultad = $obj["Id_Facultad"];
    }

}