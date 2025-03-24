<?php
namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class PersonalTecnicoModel extends BaseModel {
    public function __construct()
    {
        $this->table = "personal_tecnico";
        // Se llama al constructor del padre
        parent::__construct();
    } 
    
    public function savePersonalTecnico($nombre, $email) {
        try {
            $sql = "INSERT INTO $this->table (nombre, email) VALUES (:nombre, :email)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        
        } catch (PDOException $ex) {
            echo "Error al guardar el personal técnico: " . $ex->getMessage();
        }
    }

    public function getPersonalTecnico($id_personal_tecnico) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id_personal_tecnico = :id_personal_tecnico";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id_personal_tecnico", $id_personal_tecnico, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0];
        } catch (PDOException $ex) {
            echo "Error al obtener el personal técnico: " . $ex->getMessage();
        }
    }

    public function editPersonalTecnico($id_personal_tecnico, $nombre, $email) {
        try {
            $sql = "UPDATE $this->table SET nombre = :nombre, email = :email WHERE id_personal_tecnico = :id_personal_tecnico";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":id_personal_tecnico", $id_personal_tecnico, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el personal técnico: " . $ex->getMessage();
        }
    }

    public function DeletePersonalTecnico($id_personal_tecnico) {
        try {
            $sql = "DELETE FROM $this->table WHERE id_personal_tecnico = :id_personal_tecnico";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id_personal_tecnico", $id_personal_tecnico, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el personal técnico: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array {
        try {
            $sql = "SELECT * FROM $this->table";
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener todos los registros de personal técnico: " . $ex->getMessage();
            return [];
        }
    }
}