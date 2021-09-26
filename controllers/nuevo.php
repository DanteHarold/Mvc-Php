<?php
    class Nuevo extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('nuevo/index');
            //echo "<p>Nuevo Controlador MAIN</p>";
        }

        function registrarAlumno(){
            echo "Alumno Creado";
            $this->model->insert();
        }
    }

?>