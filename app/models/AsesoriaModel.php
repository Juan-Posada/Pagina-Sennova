<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class AsesoriaModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "asesoria"; 
        parent::__construct();
    }

    public function saveAsesoria($nombre, $description, $fkidtipoasesoria)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, description, R_id_tipo_asesoria) VALUES (:nombre, :description, :fkidtipoasesoria)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':description', $description, PDO::PARAM_STR);
            $statement->bindParam(':fkidtipoasesoria', $fkidtipoasesoria, PDO::PARAM_INT);
            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar la asesoría: " . $ex->getMessage();
        }
    }

    public function getAsesoria($id)
    {
        try {
            $sql = "SELECT asesoria.*, tipo_asesoria.linea_sennova AS tipoAsesoria 
                    FROM asesoria
                    INNER JOIN tipo_asesoria 
                    ON asesoria.R_id_tipo_asesoria = tipo_asesoria.id_tipo_asesoria 
                    WHERE asesoria.id_ssesoria = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la asesoría: " . $ex->getMessage();
        }
    }

    public function editAsesoria($id, $nombre, $description, $fkidtipoasesoria)
    {
        try {
            $sql = "UPDATE $this->table SET nombre = :nombre, description = :description, R_id_tipo_asesoria = :fkidtipoasesoria WHERE id_ssesoria = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":description", $description, PDO::PARAM_STR);
            $statement->bindParam(":fkidtipoasesoria", $fkidtipoasesoria, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la asesoría: " . $ex->getMessage();
        }
    }

    public function DeleteAsesoria($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id_ssesoria = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la asesoría: " . $ex->getMessage();
            return false;
        }
    }

}