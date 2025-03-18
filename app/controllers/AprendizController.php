<?php
namespace App\Controllers;
use App\Models\AprendizModel;

class AprendizController {
    private $db;

    public function __construct($conexion) {
      $this-> db = new AprendizModel($conexion); // Suponiendo que tienes una clase Database con un método connect()
    }

    public function index() {
        $aprendiz = new AprendizModel($this->db);
        $aprendices = $aprendiz->getAll();
        require_once 'views/aprendiz/viewAprendiz.php';
    }

    public function view($id) {
        $aprendiz = new AprendizModel($this->db);
        $aprendiz = $aprendiz->getOne($id);
        require_once 'views/aprendiz/viewOneAprendiz.php';
    }

    public function new() {
        require_once 'views/aprendiz/newAprendiz.php';
    }

    public function create() {
        if ($_POST) {
            $nombre = $_POST['txtNombre'];
            $programa = $_POST['txtPrograma'];
            $aprendiz = new AprendizModel($this->db);
            $aprendiz->create($nombre, $programa);
        }
        header("Location: /aprendiz");
    }

    public function edit($id) {
        $aprendiz = new AprendizModel($this->db);
        $aprendiz = $aprendiz->getOne($id);
        require_once 'views/aprendiz/editAprendiz.php';
    }

    public function update() {
        if ($_POST) {
            $id = $_POST['txtId'];
            $nombre = $_POST['txtNombre'];
            $programa = $_POST['txtPrograma'];
            $aprendiz = new AprendizModel($this->db);
            $aprendiz->update($id, $nombre, $programa);
        }
        header("Location: /aprendiz");
    }

    public function delete($id) {
        $aprendiz = new AprendizModel($this->db);
        $aprendiz->delete($id);
        header("Location: /aprendiz");
    }
}
?>
