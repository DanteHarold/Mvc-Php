<?php
    class Main extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('main/index');
            //echo "<p>Nuevo Controlador MAIN</p>";
        }
        function Saludo(){
            echo "<p>Ejecutaste el Método Saludo</p>";
        }
    }

?>