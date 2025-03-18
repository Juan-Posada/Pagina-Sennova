<?php
namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class EventoModel extends BaseModel {
  public function __construct()
  {
    $this->table = "eventos";
    parent::__construct();
  } 
  public function saveEvento($nombre, $descripcion, $fecha, $proyecto_id){
    try {
      $sql = "INSERT INTO $this->table (nombre, descripcion, fecha_evento, fk_id_proyecto) VALUES (:nombre, :descripcion, :fecha, :proyecto_id)";
      $statement = $this->dbConnection->prepare($sql);
      $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
      $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
      $statement->bindParam(":fecha", $fecha, PDO::PARAM_STR);
      $statement->bindParam(":proyecto_id", $proyecto_id, PDO::PARAM_INT);
      $statement->execute();
    } catch(PDOException $ex) {
      echo "Error al guardar el evento>".$ex->getMessage();
    }
  }
  public function getEvento($id){
    try {
      $sql = "SELECT * FROM $this->table WHERE id_evento=:id";
      $statement = $this->dbConnection->prepare($sql);
      $statement->bindParam(":id", $id, PDO::PARAM_INT);
      $statement->execute();
      return $statement->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
      echo "Error al obtener el evento>".$ex->getMessage();
    }
  }
  public function editEvento($id, $nombre, $descripcion, $fecha, $proyecto_id){
    try {
      $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion, fecha_evento=:fecha, fk_id_proyecto=:proyecto_id WHERE id_evento=:id";
      $statement = $this->dbConnection->prepare($sql);
      $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
      $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
      $statement->bindParam(":fecha", $fecha, PDO::PARAM_STR);
      $statement->bindParam(":proyecto_id", $proyecto_id, PDO::PARAM_INT);
      $statement->bindParam(":id", $id, PDO::PARAM_INT);
      $statement->execute();
    } catch (PDOException $ex) {
      echo "No se pudo editar el evento";
    }
  }
  public function deleteEvento($id) {
    try {
      $sql = "DELETE FROM $this->table WHERE id_evento=:id";
      $statement = $this->dbConnection->prepare($sql);
      $statement->bindParam(":id", $id, PDO::PARAM_INT);
      $statement->execute();
    } catch (PDOException $ex) {
      echo "No se pudo eliminar el evento".$ex->getMessage();
    }
  }
}
?>
