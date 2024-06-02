<?php

class Facultad{
    public $id;
    public $nombre;
 
    function parseArray($obj){
        $this->id = $obj["Id_Facultad"];
        $this->nombre = $obj["Nombre_Facultad"];
    }
}