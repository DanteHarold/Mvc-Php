<?php
    include_once 'models/alumno.php';
    class ConsultaModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function get(){

            $items = [];

            try{
                $sql = "SELECT*FROM ALUMNOS";
                $query = $this->db->Connect()->query($sql);
                while($row = $query->fetch()){
                    $item = new Alumno();
                    $item->matricula = $row['matricula'];
                    $item->nombre = $row['nombre'];
                    $item->apellido = $row['apellido'];

                    array_push($items,$item);
                }
            return $items;
            }catch(PDOException $e){
                //echo $e->getMessage();
                return [];
            }
          
           
        }
    }

?>