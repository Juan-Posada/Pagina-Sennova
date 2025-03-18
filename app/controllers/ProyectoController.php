<?php
namespace App\Controllers;
use App\Models\ProyectoModel;
require_once 'models/ProyectoModel.php';

class ProyectoController {
    private $model;

    public function __construct($conexion) {
        $this->model = new ProyectoModel($conexion);
    }

    public function index() {
        $proyectos = $this->model->getAll();
        require_once 'views/proyecto/viewProyecto.php';
    }

    public function view($id) {
        $proyecto = $this->model->getById($id);
        require_once 'views/proyecto/viewOneProyecto.php';
    }

    public function new() {
        require_once 'views/proyecto/newProyecto.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['txtNombre'];
            $descripcion = $_POST['txtDescripcion'];
            $this->model->create($nombre, $descripcion);
            header("Location: /proyecto");
        }
    }

    public function edit($id) {
        $proyecto = $this->model->getById($id);
        require_once 'views/proyecto/editProyecto.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['txtId'];
            $nombre = $_POST['txtNombre'];
            $descripcion = $_POST['txtDescripcion'];
            $this->model->update($id, $nombre, $descripcion);
            header("Location: /proyecto");
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: /proyecto");
    }
}
?>
