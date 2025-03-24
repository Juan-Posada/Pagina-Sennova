<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class EventosModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "eventos"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveEvento($nombre, $descripcion, $fecha_evento, $fk_id_proyecto)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, descripcion, fecha_evento, fk_id_proyecto) VALUES (:nombre, :descripcion, :fecha_evento, :fk_id_proyecto)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            $statement->bindParam(':fecha_evento', $fecha_evento);
            $statement->bindParam(':fk_id_proyecto', $fk_id_proyecto, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el evento>" . $ex->getMessage();
        }
    }

    public function getEvento($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_servicio=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el evento>" . $ex->getMessage();
        }
    }

    public function editEvento($id, $nombre, $descripcion, $fecha_evento, $fk_id_proyecto)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion, fecha_evento=:fecha_evento, fk_id_proyecto=:fk_id_proyecto WHERE id_servicio=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":fecha_evento", $fecha_evento);
            $statement->bindParam(":fk_id_proyecto", $fk_id_proyecto, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el evento>" . $ex->getMessage();
        }
    }

    public function removeEvento($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_servicio=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el evento: " . $ex->getMessage();
            return false;
        }
    }
}