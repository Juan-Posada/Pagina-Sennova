<?php

namespace App\Controllers;

use App\Models\TipoAsesoriaModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/TipoAsesoriaModel.php';

class TipoAsesoriaController extends BaseController
{   
    public function __construct(){
        # Se define la plantilla para este controlador
        $this->layout = "admin_layout";
        parent::__construct();
    }


    public function view()
    {
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tipoAsesoria = $tipoAsesoriaObj->getAll();
        // Llamamos a la vista
        $data = [
            "tipoAsesoria" => $tipoAsesoria,
            "title" => "Tipos de Asesoría"
        ];
        $this->render('tipoAsesoria/viewTipoAsesoria.php', $data);
    }

    public function newTipoAsesoria(){
        $data = [
            "title" => "Nuevo Tipo de Asesoría"
        ];
        $this->render('tipoAsesoria/newTipoAsesoria.php', $data);
    }

    public function createTipoAsesoria(){
        if (isset($_POST['txtLineaSennova']) && isset($_POST['txtDescription'])) {
            $lineaSennova = $_POST['txtLineaSennova'] ?? null;
            $description = $_POST['txtDescription'] ?? null;
            // Creamos instancia del modelo tipo_asesoria
            $tipoAsesoriaObj = new TipoAsesoriaModel();
            // Se llama al metodo que guarda en la base de datos
            $res = $tipoAsesoriaObj->saveTipoAsesoria($lineaSennova, $description);
            $this->redirectTo("tipoAsesoria/view");
        }
    }

    public function viewOneTipoAsesoria($id) {
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tipoAsesoria = $tipoAsesoriaObj->getTipoAsesoria($id);
        $data = [
            "tipoAsesoria" => $tipoAsesoria,
            "title" => "Detalles del Tipo de Asesoría"
        ];
        $this->render('tipoAsesoria/viewOneTipoAsesoria.php', $data);
    }

    public function editTipoAsesoria($id){
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tipoAsesoria = $tipoAsesoriaObj->getTipoAsesoria($id);
        $data = [
            "tipoAsesoria" => $tipoAsesoria,
            "title" => "Editar Tipo de Asesoría"
        ];
        $this->render('tipoAsesoria/editTipoAsesoria.php', $data);
    }

    public function updateTipoAsesoria(){
        if(isset($_POST['txtLineaSennova']) && isset($_POST['txtDescription'])){
            $id = $_POST['txtId'] ?? null;
            $lineaSennova = $_POST['txtLineaSennova'] ?? null;
            $description = $_POST['txtDescription'] ?? null;
            $tipoAsesoriaObj = new TipoAsesoriaModel();
            $resp = $tipoAsesoriaObj->editTipoAsesoria($id, $lineaSennova, $description);
        }
        header('Location: /tipoAsesoria/view');
    }

    public function deleteTipoAsesoria($id) {
        $tipoAsesoriaObj = new TipoAsesoriaModel();
        $tipoAsesoria= $tipoAsesoriaObj->getTipoAsesoria($id);
        $data = [
            "tipoAsesoria" => $tipoAsesoria,
            "title" => "Eliminar Tipo de Asesoría"
        ];
        $this->render('tipoAsesoria/deleteTipoAsesoria.php', $data);
    }
    
    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $tipoAsesoriaObj = new TipoAsesoriaModel();
            $tipoAsesoriaObj->DeleteTipoAsesoria($id);
            $this->redirectTo("tipoAsesoria/view");
        }
    }
}