<?php
    require_once('controllers/error.php');
//Centraliza Todo
    class App{
        function __construct(){
            //echo "<p> NUEVA APP</p>";

            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url,'/');
            $url = explode('/',$url);

            //var_dump($url);
            //Cuando se ingrese sin Definir Controlador
            if(empty($url[0])){
                $archivoController = 'controllers/main.php';
                require_once $archivoController;
                $controller = new Main();
                $controller->loadModel('main');
                $controller->render();
                return false;
            }
            
            $archivoController = 'controllers/'. $url[0].'.php';

            if(file_exists($archivoController)){   
                require_once $archivoController;
                //Inicialza el COntrolador
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                //Si hay un metodo que se requiere cargar
                //Valida Si existe el Método
                if(isset($url[1])){
                    $controller->{$url[1]}();
                }else{
                    $controller->render();
                }
            }else{
                $controller = new Horror();
            }

        }
    }
?>  