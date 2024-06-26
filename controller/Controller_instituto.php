<?php
include_once("Conexion.php");

class Controller_instituto extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM instituto");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
    
    function insert($instituto)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO instituto(Nombre, Codigo, Id_Facultad) VALUES(:nombre, :codigo, :id_facultad);");

        $query->bindParam(":nombre", $instituto["nombre"]);
        $query->bindParam(":codigo", $instituto["codigo"]);
        $query->bindParam(":id_facultad", $instituto["id_facultad"]);
       

        $query->execute();
    }
    function update($instituto)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE  instituto SET Nombre = :nombre, Codigo = :codigo, Id_Facultad = :id_facultad WHERE id_instituto = :id;");

        $query->bindParam(":id", $instituto["id_instituto"]);
        $query->bindParam(":nombre", $instituto["nombre"]);
        $query->bindParam(":codigo", $instituto["codigo"]);
        $query->bindParam(":id_facultad", $instituto["id_facultad"]);
       

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM instituto WHERE id_instituto = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadInstituto($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM instituto WHERE id_instituto = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $usuarios = $query->fetch(PDO::FETCH_LAZY);

        return $usuarios;
    }
}