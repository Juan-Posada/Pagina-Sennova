<?php
namespace App\Models;
use PDOException;

class AprendizModel {
    private $db;
    
    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function getAll() {
        $sql = "SELECT * FROM aprendices";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOne($id) {
        $sql = "SELECT * FROM aprendices WHERE id_aprendiz = '$id'";
        $result = $this->db->query($sql);
        return $result->fetch_object();
    }

    public function create($nombre, $programa) {
        $sql = "INSERT INTO aprendices (nombre, programa) VALUES ('$nombre', '$programa')";
        return $this->db->query($sql);
    }

    public function update($id, $nombre, $programa) {
        $sql = "UPDATE aprendices SET nombre = '$nombre', programa = '$programa' WHERE id_aprendiz = '$id'";
        return $this->db->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM aprendices WHERE id_aprendiz = '$id'";
        return $this->db->query($sql);
    }
}
?>
