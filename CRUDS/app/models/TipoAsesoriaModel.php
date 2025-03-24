<?php
namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class TipoAsesoriaModel extends BaseModel {
    public function __construct()
    {
        $this->table = "tipo_asesoria";
        // Se llama al constructor del padre
        parent::__construct();
    } 
    
    public function saveTipoAsesoria($lineaSennova, $description) {
        try {
            $sql = "INSERT INTO $this->table (linea_sennova, description) VALUES (:linea_sennova, :description)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam(':linea_sennova', $lineaSennova, PDO::PARAM_STR);
            $statement->bindParam(':description', $description, PDO::PARAM_STR);
            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        
        } catch (PDOException $ex) {
            echo "Error al guardar el tipo de asesoría: " . $ex->getMessage();
        }
    }

    public function getTipoAsesoria($id_tipo_asesoria) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_tipo_asesoria = :id_tipo_asesoria";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id_tipo_asesoria", $id_tipo_asesoria, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0];
        } catch (PDOException $ex) {
            echo "Error al obtener el tipo de asesoría: " . $ex->getMessage();
        }
    }

    public function editTipoAsesoria($id_tipo_asesoria, $lineaSennova, $description) {
        try {
            $sql = "UPDATE $this->table SET linea_sennova = :linea_sennova, description = :description WHERE id_tipo_asesoria = :id_tipo_asesoria";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":linea_sennova", $lineaSennova, PDO::PARAM_STR);
            $statement->bindParam(":description", $description, PDO::PARAM_STR);
            $statement->bindParam(":id_tipo_asesoria", $id_tipo_asesoria, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el tipo de asesoría: " . $ex->getMessage();
        }
    }

    public function DeleteTipoAsesoria($id_tipo_asesoria) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_tipo_asesoria = :id_tipo_asesoria";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id_tipo_asesoria", $id_tipo_asesoria, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el tipo de asesoría: " . $ex->getMessage();
            return false;
        }
    }

}