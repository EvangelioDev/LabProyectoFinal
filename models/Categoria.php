<?php

class Categoria{
    public $id;
    public $nombre;
 
    function parseArray($obj){
        $this->id = $obj["id_categoria"];
        $this->nombre = $obj["nombre"];
    }
}