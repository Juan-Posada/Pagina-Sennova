<?php

namespace App\Controllers;

use App\Models\AsesoriaModel;
use App\Models\TipoAsesoriaModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/AsesoriaModel.php';
require_once MAIN_APP_ROUTE . '../models/TipoAsesoriaModel.php';

class AsesoriaController extends BaseController
{
    public function __construct()
    {
        # Se define la plantilla para este controlador
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        
        // Llamamos al modelo de Asesoria
        $asesoriaObj = new AsesoriaModel();
        $asesorias = $asesoriaObj->getAll();
        $data = [
            "asesorias" => $asesorias,
            "title" => "Asesorías"
        ];

        // Llamamos a la vista
        $this->render('asesoria/viewAsesoria.php', $data);
    }

    public function newAsesoria()
    {
       

        // Llamamos al modelo de TipoAsesoria para obtener los tipos de asesoría
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tiposAsesoria = $tipoAsesoriaObj->getAll();

        $data = [
            "tiposAsesoria" => $tiposAsesoria,
            "title" => "Nueva Asesoría"
        ];
        $this->render('asesoria/newAsesoria.php', $data);
    }

    public function createAsesoria()
    {
        if (isset($_POST['txtNombre']) && isset($_POST['txtDescription']) && isset($_POST['fkidtipoasesoria'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $description = $_POST['txtDescription'] ?? null;
            $fkidtipoasesoria = $_POST['fkidtipoasesoria'] ?? null;

            // Creamos instancia del modelo Asesoria
            $asesoriaObj = new AsesoriaModel();
            // Se llama al método que guarda en la base de datos
            $res = $asesoriaObj->saveAsesoria($nombre, $description, $fkidtipoasesoria);
            $this->redirectTo("asesoria/view");
        }
    }

    public function viewAsesoria($id)
    {
        $asesoriaObj = new AsesoriaModel();
        $asesoria = $asesoriaObj->getAsesoria($id);
        $data = [
            "asesoria" => $asesoria,
            "title" => "Detalles de la Asesoría"
        ];
        $this->render('asesoria/viewOneAsesoria.php', $data);
    }

    public function editAsesoria($id)
    {
        $asesoriaObj = new AsesoriaModel();
        $asesoria = $asesoriaObj->getAsesoria($id);

        // Llamamos al modelo de TipoAsesoria para obtener los tipos de asesoría
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tipoAsesoria = $tipoAsesoriaObj->getAll();

        $data = [
            "asesoria" => $asesoria,
            "tipoAsesoria" => $tipoAsesoria,
            "title" => "Editar Asesoría"
        ];
        $this->render('asesoria/editAsesoria.php', $data);
    }

    public function updateAsesoria()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescription']) && isset($_POST['fkidtipoasesoria'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $description = $_POST['txtDescription'] ?? null;
            $fkidtipoasesoria = $_POST['fkidtipoasesoria'] ?? null;

            $asesoriaObj = new AsesoriaModel();
            $res = $asesoriaObj->editAsesoria($id, $nombre, $description, $fkidtipoasesoria);
            $this->redirectTo("asesoria/view");
        }
    }

    public function deleteAsesoria($id)
    {
        $asesoriaObj = new AsesoriaModel();
        $asesoria = $asesoriaObj->getAsesoria($id);
        $data = [
            "asesoria" => $asesoria,
            "title" => "Eliminar Asesoría"
        ];
        $this->render('asesoria/deleteAsesoria.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $asesoriaObj = new AsesoriaModel();
            $asesoriaObj->DeleteAsesoria($id);
            $this->redirectTo("asesoria/view");
        }
    }
}