<?php
include_once("Conexion.php");

class Controller_investigador extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM investigadores ");
        $query->execute();
        $investigador = $query->fetchAll(PDO::FETCH_ASSOC);

        return $investigador;
    }
    
    function insert($investigador)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO investigadores(nombre, codigo, telefono, email, id_categoria, id_instituto) VALUES(:nombre, :codigo, :telefono, :email, :id_categoria, :id_instituto);");

        $query->bindParam(":nombre", $investigador["nombre"]);
        $query->bindParam(":codigo", $investigador["codigo"]);
        $query->bindParam(":telefono", $investigador["telefono"]);
        $query->bindParam(":email", $investigador["email"]);
        $query->bindParam(":id_categoria", $investigador["id_categoria"]);
        $query->bindParam(":id_instituto", $investigador["id_instituto"]);

        $query->execute();
    }
    function update($investigador)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE investigadores SET nombre = :nombre, codigo = :codigo, telefono = :telefono, email = :email, id_categoria = :id_categoria, id_instituto = :id_instituto WHERE id_investigador = :id;");
        
        $query->bindParam(":id", $investigador["id_investigador"]);
        $query->bindParam(":nombre", $investigador["nombre"]);
        $query->bindParam(":codigo", $investigador["codigo"]);
        $query->bindParam(":telefono", $investigador["telefono"]);
        $query->bindParam(":email", $investigador["email"]);
        $query->bindParam(":id_categoria", $investigador["id_categoria"]);
        $query->bindParam(":id_instituto", $investigador["id_instituto"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM investigadores WHERE id_investigador = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadCliente($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM investigadores WHERE id_investigador = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $investigador = $query->fetch(PDO::FETCH_LAZY);

        return $investigador;
    }

    function loadInvestigador($cedula){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM investigadores WHERE id_investigador = :cedula");
        $query->bindParam(":cedula", $cedula);

        $query->execute();
        $investigador = $query->fetch(PDO::FETCH_LAZY);

        return $investigador;
    }
}