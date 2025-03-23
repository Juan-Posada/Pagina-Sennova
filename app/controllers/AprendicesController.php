<?php

namespace App\Controllers;

use App\Models\AprendicesModel;
use App\Models\ProyectoModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/AprendicesModel.php';

class AprendicesController extends BaseController
{
    public function __construct(){
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $aprendicesObj = new AprendicesModel();
        $aprendices = $aprendicesObj->getAll();
        $data = [
            "aprendices" => $aprendices,
            "title" => "Aprendices"
        ];
        $this->render('aprendices/viewAprendices.php', $data);
    }

    public function newAprendiz() {
        $proyectoObj = new ProyectoModel();
        $proyectos = $proyectoObj->getAll();
        $data = [
            "proyectos" => $proyectos, 
            "title" => "Nuevo Aprendiz"
        ];
        $this->render('aprendices/newAprendices.php', $data);
    }

    public function createAprendiz()
    {
        if (isset($_POST['txtNombre']) && isset($_POST['txtEmail']) && isset($_POST['txtApellidos']) && isset($_POST['txtTelefono']) && isset($_POST['fkIdProyecto'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $apellidos = $_POST['txtApellidos'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $fk_id_proyecto = $_POST['fkIdProyecto'] ?? null;

            $aprendicesObj = new AprendicesModel();
            $res = $aprendicesObj->saveAprendiz($nombre, $email, $apellidos, $telefono, $fk_id_proyecto);
            $this->redirectTo("aprendices/view");
        }
    }

    public function editAprendiz($id)
    {
        $aprendicesObj = new AprendicesModel();
        $aprendizInfo = $aprendicesObj->getAprendiz($id);
        $data = [
            "aprendiz" => $aprendizInfo,
            "title" => "Editar Aprendiz"
        ];
        $this->render('aprendices/editAprendices.php', $data);
    }

    public function updateAprendiz()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtEmail']) && isset($_POST['txtApellidos']) && isset($_POST['txtTelefono']) && isset($_POST['fkIdProyecto'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $apellidos = $_POST['txtApellidos'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $fk_id_proyecto = $_POST['fkIdProyecto'] ?? null;

            $aprendicesObj = new AprendicesModel();
            $res = $aprendicesObj->editAprendiz($id, $nombre, $email, $apellidos, $telefono, $fk_id_proyecto);
            $this->redirectTo("aprendices/view");
        }
    }

    public function deleteAprendiz($id) {
        $aprendicesObj = new AprendicesModel();
        $aprendizInfo = $aprendicesObj->getAprendiz($id);
        $data = [
            "aprendiz" => $aprendizInfo,
            "title" => "Eliminar Aprendiz"
        ];
        $this->render('aprendices/deleteAprendices.php', $data);
    }

    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $aprendicesObj = new AprendicesModel();
            $aprendicesObj->removeAprendiz($id);
            $this->redirectTo("aprendices/view");
        }
    }

    public function viewOneAprendiz($id)
    {
        $aprendicesObj = new AprendicesModel();
        $aprendizInfo = $aprendicesObj->getAprendiz($id);
        $data = [
            "aprendiz" => $aprendizInfo,
            "title" => "Aprendiz"
        ];
        $this->render('aprendices/viewOneAprendices.php', $data);
    }
}