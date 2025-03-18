<?php
namespace App\Models;
use PDO;
use PDOException;

class ProyectoModel {
    private $db;
    
    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function getAll() {
        $sql = "SELECT * FROM proyectos";
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        $sql = "SELECT * FROM proyectos WHERE id_proyecto = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function create($nombre, $descripcion) {
        $sql = "INSERT INTO proyectos (nombre, descripcion) VALUES (:nombre, :descripcion)";
        $query = $this->db->prepare($sql);
        $query->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        return $query->execute();
    }

    public function update($id, $nombre, $descripcion) {
        $sql = "UPDATE proyectos SET nombre = :nombre, descripcion = :descripcion WHERE id_proyecto = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        return $query->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM proyectos WHERE id_proyecto = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        return $query->execute();
    }
}
?>
