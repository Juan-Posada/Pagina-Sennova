<?php
namespace App\Controllers;
use App\Models\EventoModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/EventoModel.php";

class EventoController extends BaseController {
  public function index(){
    $this->redirectTo("evento/view");
  }
  public function view(){
    $eventoObj = new EventoModel();
    $eventos = $eventoObj->getAll();
    $data = ["eventos"=>$eventos];
    $this->render('evento/viewEvento.php', $data);
  }
  public function newEvento(){
    $this->render('evento/newEvento.php');
  }
  public function createEvento(){
    if(isset($_POST['txtNombre'])){
      $nombre = $_POST['txtNombre'];
      $descripcion = $_POST['txtDescripcion'];
      $fecha = $_POST['txtFecha'];
      $proyecto_id = $_POST['txtProyectoId'];
      
      $eventoObj = new EventoModel();
      $eventoObj->saveEvento($nombre, $descripcion, $fecha, $proyecto_id);
      $this->redirectTo("evento/view");
    }
  }
  public function viewEvento($id){
    $eventoObj = new EventoModel();
    $evento = $eventoObj->getEvento($id);
    $data = ["evento"=>$evento];
    $this->render('evento/viewOneEvento.php', $data);
  }
  public function editEvento($id){
    $eventoObj = new EventoModel();
    $evento = $eventoObj->getEvento($id);
    $data = ["evento"=> $evento];
    $this->render('evento/editEvento.php', $data);
  }
  public function updateEvento(){
    if(isset($_POST['txtNombre'])){
      $id = $_POST['txtId'];
      $nombre = $_POST['txtNombre'];
      $descripcion = $_POST['txtDescripcion'];
      $fecha = $_POST['txtFecha'];
      $proyecto_id = $_POST['txtProyectoId'];
      
      $eventoObj = new EventoModel();
      $eventoObj->editEvento($id, $nombre, $descripcion, $fecha, $proyecto_id);
    }
    header('Location:/evento/view');
  }
  public function deleteEvento($id) {
    $eventoObj = new EventoModel();
    $eventoObj->deleteEvento($id);
    $this->redirectTo("evento/view");
  }
}
?>
