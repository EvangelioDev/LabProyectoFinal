<?php
include_once("Conexion.php");

class Controller_facultad extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM facultades");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
    
    function insert($instituto)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO facultades(Nombre, Codigo, Id_Facultad) VALUES(:nombre, :codigo, :id_facultad);");

        $query->bindParam(":nombre", $instituto["nombre"]);
        $query->bindParam(":codigo", $instituto["codigo"]);
        $query->bindParam(":id_facultad", $instituto["id_facultad"]);
       

        $query->execute();
    }
    function update($instituto)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE  facultades SET Nombre = :nombre, Codigo = :codigo, Id_Facultad = :id_facultad WHERE id_instituto = :id;");

        $query->bindParam(":id", $instituto["id_instituto"]);
        $query->bindParam(":nombre", $instituto["nombre"]);
        $query->bindParam(":codigo", $instituto["codigo"]);
        $query->bindParam(":id_facultad", $instituto["id_facultad"]);
       

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM facultades WHERE id_instituto = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadFacultad($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM facultades WHERE id_instituto = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $usuarios = $query->fetch(PDO::FETCH_LAZY);

        return $usuarios;
    }
}