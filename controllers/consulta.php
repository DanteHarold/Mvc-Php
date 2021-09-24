<?php
    class Consulta extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('consulta/index');
            //echo "<p>Nuevo Controlador MAIN</p>";
        }
    }

?>