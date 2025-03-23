<?php

namespace App\Controllers;

use App\Models\EventosModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/EventosModel.php';

class EventosController extends BaseController
{
    public function __construct(){
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $eventosObj = new EventosModel();
        $eventos = $eventosObj->getAll();
        $data = [
            "eventos" => $eventos,
            "title" => "Eventos"
        ];
        $this->render('eventos/viewEventos.php', $data);
    }

    public function newEvento() {
        $data = [
            "title" => "Nuevo Evento"
        ];
        $this->render('eventos/newEventos.php', $data);
    }

    public function createEvento()
    {
        if (isset($_POST['txtNombre']) && isset($_POST['txtDescripcion']) && isset($_POST['txtFechaEvento']) && isset($_POST['fkIdProyecto'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
            $fecha_evento = $_POST['txtFechaEvento'] ?? null;
            $fk_id_proyecto = $_POST['fkIdProyecto'] ?? null;

            $eventosObj = new EventosModel();
            $res = $eventosObj->saveEvento($nombre, $descripcion, $fecha_evento, $fk_id_proyecto);
            $this->redirectTo("eventos/view");
        }
    }

    public function editEvento($id)
    {
        $eventosObj = new EventosModel();
        $eventoInfo = $eventosObj->getEvento($id);
        $data = [
            "evento" => $eventoInfo,
            "title" => "Editar Evento"
        ];
        $this->render('eventos/editEventos.php', $data);
    }

    public function updateEvento()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescripcion']) && isset($_POST['txtFechaEvento']) && isset($_POST['fkIdProyecto'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
            $fecha_evento = $_POST['txtFechaEvento'] ?? null;
            $fk_id_proyecto = $_POST['fkIdProyecto'] ?? null;

            $eventosObj = new EventosModel();
            $res = $eventosObj->editEvento($id, $nombre, $descripcion, $fecha_evento, $fk_id_proyecto);
            $this->redirectTo("eventos/view");
        }
    }

    public function deleteEvento($id) {
        $eventosObj = new EventosModel();
        $eventoInfo = $eventosObj->getEvento($id);
        $data = [
            "evento" => $eventoInfo,
            "title" => "Eliminar Evento"
        ];
        $this->render('eventos/deleteEventos.php', $data);
    }

    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $eventosObj = new EventosModel();
            $eventosObj->removeEvento($id);
            $this->redirectTo("eventos/view");
        }
    }

    public function viewOneEvento($id)
    {
        $eventosObj = new EventosModel();
        $eventoInfo = $eventosObj->getEvento($id);
        $data = [
            "evento" => $eventoInfo,
            "title" => "Evento"
        ];
        $this->render('eventos/viewOneEventos.php', $data);
    }
}