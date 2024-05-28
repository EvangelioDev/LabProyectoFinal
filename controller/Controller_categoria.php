<?php
include_once("Conexion.php");

class Controller_categoria extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM categorias ");
        $query->execute();
        $pago = $query->fetchAll(PDO::FETCH_ASSOC);

        return $pago;
    }
    
    function insert($categoria)
    {
        /* print_r($pago);exit; */
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO categorias (nombre) VALUES (:nombre);");

        $query->bindParam(":nombre", $categoria);

        $query->execute();
    }
    function update($categoria)
    {
    /*     print_r($pago);    */
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE categorias SET nombre = :nombre  WHERE id_categoria = :id;");

        $query->bindParam(":nombre", $categoria["nombre"]);
        $query->bindParam(":id", $categoria["id_categoria"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();
        $query = $conect->prepare("DELETE FROM categorias WHERE id_categoria = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadCategoria($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM categorias WHERE id_categoria = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $pago = $query->fetch(PDO::FETCH_LAZY);

        return $pago;
    }
}