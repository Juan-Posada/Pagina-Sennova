<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class AprendicesModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "aprendices"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveAprendiz($nombre, $email, $apellidos, $telefono, $fk_id_proyecto)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, email, apellidos, telefono, fk_id_proyecto) VALUES (:nombre, :email, :apellidos, :telefono, :fk_id_proyecto)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':fk_id_proyecto', $fk_id_proyecto, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el aprendiz>" . $ex->getMessage();
        }
    }

    public function getAprendiz($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_aprendices=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el aprendiz>" . $ex->getMessage();
        }
    }

    public function editAprendiz($id, $nombre, $email, $apellidos, $telefono, $fk_id_proyecto)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, email=:email, apellidos=:apellidos, telefono=:telefono, fk_id_proyecto=:fk_id_proyecto WHERE id_aprendices=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
            $statement->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $statement->bindParam(":fk_id_proyecto", $fk_id_proyecto, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el aprendiz>" . $ex->getMessage();
        }
    }

    public function removeAprendiz($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_aprendices=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el aprendiz: " . $ex->getMessage();
            return false;
        }
    }
}