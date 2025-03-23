<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ProyectoModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "proyecto"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveProyecto($nombre)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el proyecto>" . $ex->getMessage();
        }
    }

    public function getProyecto($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_proyecto=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el proyecto>" . $ex->getMessage();
        }
    }

    public function editProyecto($id, $nombre)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE id_proyecto=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el proyecto>" . $ex->getMessage();
        }
    }

    public function removeProyecto($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_proyecto=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el proyecto: " . $ex->getMessage();
            return false;
        }
    }
}