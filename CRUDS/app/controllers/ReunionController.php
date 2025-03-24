<?php

namespace App\Controllers;

use App\Models\ReunionModel;
use App\Models\ProyectoModel;
use App\Models\TipoAsesoriaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ReunionModel.php';

class ReunionController extends BaseController
{
    public function __construct(){
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $reunionObj = new ReunionModel();
        $reuniones = $reunionObj->getAll();
        $data = [
            "reuniones" => $reuniones,
            "title" => "Reuniones"
        ];
        $this->render('reunion/viewReunion.php', $data);
    }

    public function newReunion() {
        $proyectoObj = new ProyectoModel();
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $proyectos = $proyectoObj->getAll(); // Cargar proyectos
        $tiposAsesoria = $tipoAsesoriaObj->getAll(); // Cargar tipos de asesoría
        $data = [
            "proyectos" => $proyectos,
            "tiposAsesoria" => $tiposAsesoria,
            "title" => "Nueva Reunión"
        ];
        $this->render('reunion/newReunion.php', $data);
    }

    public function createReunion()
    {
        if (isset($_POST['txtFecha']) && isset($_POST['txtLugar']) && isset($_POST['txtHoraInicio']) && isset($_POST['txtHoraFin']) && isset($_POST['fkIdProyecto']) && isset($_POST['fkIdTipoAsesoria'])) {
            $fecha = $_POST['txtFecha'] ?? null;
            $lugar = $_POST['txtLugar'] ?? null;
            $horaInicio = $_POST['txtHoraInicio'] ?? null;
            $horaFin = $_POST['txtHoraFin'] ?? null;
            $fkIdProyecto = $_POST['fkIdProyecto'] ?? null;
            $fkIdTipoAsesoria = $_POST['fkIdTipoAsesoria'] ?? null;

            $reunionObj = new ReunionModel();
            $res = $reunionObj->saveReunion($fecha, $lugar, $horaInicio, $horaFin, $fkIdProyecto, $fkIdTipoAsesoria);
            $this->redirectTo("reunion/view");
        }
    }

    public function editReunion($id)
    {
        $reunionObj = new ReunionModel();
        $reunionInfo = $reunionObj->getReunion($id);
        
        $proyectoObj = new ProyectoModel();
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $proyectos = $proyectoObj->getAll(); // Cargar proyectos
        $tiposAsesoria = $tipoAsesoriaObj->getAll(); // Cargar tipos de asesoría

        $data = [
            "reunion" => $reunionInfo,
            "proyectos" => $proyectos,
            "tiposAsesoria" => $tiposAsesoria,
            "title" => "Editar Reunión"
        ];
        $this->render('reunion/editReunion.php', $data);
    }

    public function updateReunion()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtFecha']) && isset($_POST['txtLugar']) && isset($_POST['txtHoraInicio']) && isset($_POST['txtHoraFin']) && isset($_POST['fkIdProyecto']) && isset($_POST['fkIdTipoAsesoria'])) {
            $id = $_POST['txtId'] ?? null;
            $fecha = $_POST['txtFecha'] ?? null;
            $lugar = $_POST['txtLugar'] ?? null;
            $horaInicio = $_POST['txtHoraInicio'] ?? null;
            $horaFin = $_POST['txtHoraFin'] ?? null;
            $fkIdProyecto = $_POST['fkIdProyecto'] ?? null;
            $fkIdTipoAsesoria = $_POST['fkIdTipoAsesoria'] ?? null;

            $reunionObj = new ReunionModel();
            $res = $reunionObj->editReunion($id, $fecha, $lugar, $horaInicio, $horaFin, $fkIdProyecto, $fkIdTipoAsesoria);
            $this->redirectTo("reunion/view");
        }
    }

    public function deleteReunion($id) {
        $reunionObj = new ReunionModel();
        $reunionInfo = $reunionObj->getReunion($id);
        $data = [
            "reunion" => $reunionInfo,
            "title" => "Eliminar Reunión"
        ];
        $this->render('reunion/deleteReunion.php', $data);
    }

    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $reunionObj = new ReunionModel();
            $reunionObj->removeReunion($id);
            $this->redirectTo("reunion/view");
        }
    }

    public function viewOneReunion($id)
    {
        $reunionObj = new ReunionModel();
        $reunionInfo = $reunionObj->getReunion($id);
        $data = [
            "reunion" => $reunionInfo,
            "title" => "Detalles de la Reunión"
        ];
        $this->render('reunion/viewOneReunion.php', $data);
    }
}