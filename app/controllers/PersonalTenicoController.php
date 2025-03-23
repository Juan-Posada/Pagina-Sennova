<?php

namespace App\Controllers;

use App\Models\PersonalTecnicoModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/PersonalTecnicoModel.php';

class PersonalTecnicoController extends BaseController
{   
    public function __construct(){
       
        $this->layout = "admin_layout";
        parent::__construct();
    }


    public function view()
    {
        $personalTecnicoObj = new PersonalTecnicoModel();
        $personalTecnico = $personalTecnicoObj->getAll();
       
        $data = [
            "personalTecnico" => $personalTecnico,
            "title" => "Personal Técnico"
        ];
        $this->render('personalTecnico/viewPersonalTecnico.php', $data);
    }

    public function newPersonalTecnico(){
        $data = [
            "title" => "Nuevo Personal Técnico"
        ];
        $this->render('personalTecnico/newPersonalTecnico.php', $data);
    }

    public function createPersonalTecnico(){
        if (isset($_POST['txtNombre']) && isset($_POST['txtEmail'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            
            $personalTecnicoObj = new PersonalTecnicoModel();
            
            $res = $personalTecnicoObj->savePersonalTecnico($nombre, $email);
            $this->redirectTo("personalTecnico/view");
        }
    }

    public function viewPersonalTecnico($id) {
        $personalTecnicoObj = new PersonalTecnicoModel();
        $personalTecnico = $personalTecnicoObj->getPersonalTecnico($id);
        $data = [
            "personalTecnico" => $personalTecnico,
            "title" => "Detalles del Personal Técnico"
        ];
        $this->render('personalTecnico/viewOnePersonalTecnico.php', $data);
    }

    public function editPersonalTecnico($id){
        $personalTecnicoObj = new PersonalTecnicoModel();
        $personalTecnico = $personalTecnicoObj->getPersonalTecnico($id);
        $data = [
            "personalTecnico" => $personalTecnico,
            "title" => "Editar Personal Técnico"
        ];
        $this->render('personalTecnico/editPersonalTecnico.php', $data);
    }

    public function updatePersonalTecnico(){
        if(isset($_POST['txtNombre']) && isset($_POST['txtEmail'])){
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $personalTecnicoObj = new PersonalTecnicoModel();
            $resp = $personalTecnicoObj->editPersonalTecnico($id, $nombre, $email);
        }
        header('Location: /personalTecnico/view');
    }

    public function deletePersonalTecnico($id) {
        $personalTecnicoObj = new PersonalTecnicoModel();
        $personalTecnico = $personalTecnicoObj->getPersonalTecnico($id);
        $data = [
            "personalTecnico" => $personalTecnico,
            "title" => "Eliminar Personal Técnico"
        ];
        $this->render('personalTecnico/deletePersonalTecnico.php', $data);
    }
    
    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $personalTecnicoObj = new PersonalTecnicoModel();
            $personalTecnicoObj->DeletePersonalTecnico($id);
            $this->redirectTo("personalTecnico/view");
        }
    }
}