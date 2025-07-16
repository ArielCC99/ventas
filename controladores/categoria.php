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

            //Convertir el resultado en json
            echo json_encode($rspta);
            //creamos el caso listar
            case 'listar':
            $rspta = $categoria->listar();
            //Vamos a declarar un array para guardar toda la informacion en el arreglo
            $data=Array();
            while ($reg = $rspta->fetch_object()) {
               $data[]=array(
                "0"=>$reg->idcategoria,
                "1"=>$reg->nombre,
                "2"=>$reg->descripcion,
                "3"=>$reg->($reg->condicion)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>',
                "4"=>($reg->condicion)?'<button class="btn btn-warning" inclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-danger" onclick="desactivar('.$reg->idcategoria.')"><i class="fa fa-close"></i></button>':
                ' <button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-primary" onclick="activar('.$reg->idcategoria.')"><i class="fa fa-check"></i></button>';
               );
            } 
            //Vamos a generar informacion sobre datatable
            $results=array(
                "sEcho"=>1, //Informacion para datatable
                "iTotalRecords"=>count($data), //Enviamos el total de registros al datable
                "iTotalDisplayRecords"=>count($data), //Enviamos el total de registros a visualizar 
                "aaData"=>$data);  
                echo json_encode($results); //Convertimos el resultado a formato json
                break;

}
?>