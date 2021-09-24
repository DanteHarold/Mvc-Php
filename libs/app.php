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
            if(empty($url[0])){
                $archivoController = 'controllers/main.php';
                require_once $archivoController;
                $controller = new Main();
                return false;
            }
            
            $archivoController = 'controllers/'. $url[0].'.php';

            if(file_exists($archivoController)){   
                require_once $archivoController;
                $controller = new $url[0];
                //Valida Si existe el Método
                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            }else{
                $controller = new Horror();
            }

        }
    }
?>  