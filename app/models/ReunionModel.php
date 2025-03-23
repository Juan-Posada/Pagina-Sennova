<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ReunionModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "reunion"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveReunion($fecha, $lugar, $horaInicio, $horaFin, $fkIdProyecto, $fkIdTipoAsesoria)
    {
        try {
            $sql = "INSERT INTO $this->table (fecha, lugar, hora_inicio, hora_fin, fk_id_proyecto, fk_id_tipo_asesoria) 
                    VALUES (:fecha, :lugar, :hora_inicio, :hora_fin, :fk_id_proyecto, :fk_id_tipo_asesoria)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fecha', $fecha);
            $statement->bindParam(':lugar', $lugar);
            $statement->bindParam(':hora_inicio', $horaInicio);
            $statement->bindParam(':hora_fin', $horaFin);
            $statement->bindParam(':fk_id_proyecto', $fkIdProyecto, PDO::PARAM_INT);
            $statement->bindParam(':fk_id_tipo_asesoria', $fkIdTipoAsesoria, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la reunión>" . $ex->getMessage();
        }
    }

    public function getReunion($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_reunion=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la reunión>" . $ex->getMessage();
        }
    }

    public function editReunion($id, $fecha, $lugar, $horaInicio, $horaFin, $fkIdProyecto, $fkIdTipoAsesoria)
    {
        try {
            $sql = "UPDATE $this->table SET fecha=:fecha, lugar=:lugar, hora_inicio=:hora_inicio, hora_fin=:hora_fin, 
                    fk_id_proyecto=:fk_id_proyecto, fk_id_tipo_asesoria=:fk_id_tipo_asesoria WHERE id_reunion=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":fecha", $fecha);
            $statement->bindParam(":lugar", $lugar);
            $statement->bindParam(":hora_inicio", $horaInicio);
            $statement->bindParam(":hora_fin", $horaFin);
            $statement->bindParam(":fk_id_proyecto", $fkIdProyecto, PDO::PARAM_INT);
            $statement->bindParam(":fk_id_tipo_asesoria", $fkIdTipoAsesoria, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la reunión>" . $ex->getMessage();
        }
    }

    public function removeReunion($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_reunion=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la reunión: " . $ex->getMessage();
            return false;
        }
    }
}