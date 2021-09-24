<?php
    require_once('controllers/error.php');
//Centraliza Todo
    class App{
        function __construct(){
            echo "<p> NUEVA APP</p>";

            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = explode('/',$url);

            //var_dump($url);

            $archivoController = 'controllers/'. $url[0].'.php';

            if(file_exists($archivoController)){   
                require_once $archivoController;
                $controller = new $url[0];

                //Valido Si existe el Método

                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            }else{
                $controller = new Horror();
            }

        }
    }
?>  