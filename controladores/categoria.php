<?php
//Incluimos el archivo Categorias.php
require_once "../modelos/Categorias.php";
//Instanciamos la clase Categoria
$categorias = new Categorias();

//Definimos una variable para almacenar el idcategoria
$idcategoria = isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
//Definimos una variable para almacenar el nombre
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
//Defimos una avriable para almacenar la descripcion 
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

//Generamos un swtich para determinar la accion a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        //Verificamos si el idcategoria es igual a vacio
        if (empty($idcategoria)) {
            //Si es vacio, llamamos al metodo insertar
            $rspta = $categorias->insertar($nombre, $descripcion);
            //Retornamos un mensaje de exito
            echo $rspta ? "Categoria registrada con exito" : "No se pudo resitrar la categoria";
        } else {
            //Si no es vacio, llamamos al metodo editar
            $rspta = $categorias->editar($idcategoria, $nombre, $descripcion);
            //Retornamos un mensaje de exito
            echo $rspta ? "Categoria editada con exito" : "No se pudo editar la categoria";
        }
        break;
}

?>