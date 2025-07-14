<?php
//Inlcuimos el archivo a la conexion de la base de datos 
//../ sale de un nivel del de done estamos 
require "../config/Conexion.php";

//creo la clase Categorias
class Categorias{
    //DEfinimos un constructor
    //El constructor se va a ejecutar pro primera vez al ejecutar la clase
    public function_construct() {
        
    }
    //Definimos un metodo para insertar una categoria a la basa de datos    
    public function insertar($nombre, $descripcion) {
        //Definimos una variable para almacenar la consulta 
        $sql = "INSERT INTO categorias (nombre, descripcion, condicion) VALUES ('$nombre', '$descripcion', '1')";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos un metodo para editar una categoria
    public function editar($idcategoria, $nombre, $descripcion) {
        //Definimos una variable para almacenar la consulta 
        $sql = "UPDATE categorias SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria='$idcategoria'";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una funcion para activar una categoria 
    public function activar($idcategoria) {
        //Definimos una variable para almacenar la consulta 
        $sql = "UPDATE categorias SET condicion='1' WHERE idcategoria='$idcategoria'";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }

//Definimos una funcion para desactivar una categoria 
    public function desactivar($idcategoria) {
        //Definimos una variable para almacenar la consulta 
        $sql = "UPDATE categorias SET condicion='0' WHERE idcategoria='$idcategoria'";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos un metodo para mostrar una fila de la base de datos
    public function mostrar($idcategoria) {
        //Definimos una variable para almacenar la consulta 
        $sql = "SELECT * FROM categorias WHERE idcategoria='$idcategoria'";
        //Retornamos la consulta
        return ejecutarConsultaSimpleFila($sql);
    }
    //defnimos una funcion para listar las categorias
    public function listar() {
        //Definimos una variable para almacenar la consulta 
        $sql = "SELECT * FROM categorias";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una funcion para listar las categroias activas
    public function select (){
        $sql = "SELECT * FROM categorias WHERE condicion='1'";
        //retornamos la consulta
        return ejecutarConsulta($sql);
    }
        



}
