<?php

namespace App\Controllers;

use App\Models\ProyectoModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ProyectoModel.php';

class ProyectoController extends BaseController
{
    public function __construct(){
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $proyectoObj = new ProyectoModel();
        $proyectos = $proyectoObj->getAll();
        $data = [
            "proyectos" => $proyectos,
            "title" => "Proyectos"
        ];
        $this->render('proyecto/viewProyecto.php', $data);
    }

    public function newProyecto() {
        $data = [
            "title" => "Nuevo Proyecto"
        ];
        $this->render('proyecto/newProyecto.php', $data);
    }

    public function createProyecto()
    {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $proyectoObj = new ProyectoModel();
            $res = $proyectoObj->saveProyecto($nombre);
            $this->redirectTo("proyecto/view");
        }
    }

    public function editProyecto($id)
    {
        $proyectoObj = new ProyectoModel();
        $proyectoInfo = $proyectoObj->getProyecto($id);
        $data = [
            "proyecto" => $proyectoInfo,
            "title" => "Editar Proyecto"
        ];
        $this->render('proyecto/editProyecto.php', $data);
    }

    public function updateProyecto()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;

            $proyectoObj = new ProyectoModel();
            $res = $proyectoObj->editProyecto($id, $nombre);
            $this->redirectTo("proyecto/view");
        }
    }

    public function deleteProyecto($id) {
        $proyectoObj = new ProyectoModel();
        $proyectoInfo = $proyectoObj->getProyecto($id);
        $data = [
            "proyecto" => $proyectoInfo,
            "title" => "Eliminar Proyecto"
        ];
        $this->render('proyecto/deleteProyecto.php', $data);
    }

    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $proyectoObj = new ProyectoModel();
            $proyectoObj->removeProyecto($id);
            $this->redirectTo("proyecto/view");
        }
    }

    public function viewOneProyecto($id)
    {
        $proyectoObj = new ProyectoModel();
        $proyectoInfo = $proyectoObj->getProyecto($id);
        $data = [
            "proyecto" => $proyectoInfo,
            "title" => "Proyecto"
        ];
        $this->render('proyecto/viewOneProyecto.php', $data);
    }
}