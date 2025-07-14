<?php
//LLamo al archivo global.php
require_once "global.php";
//Creo una variable del tipo conexion para conectarme a la base de datos
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//Crear una variable para almacenar la conexión
mysqli_query($conexion, 'SET NAMES "' . DB_ENCODE . '"'); 
//Verificamos si la conexion a la basa de datos fue existosa 
if(mysqli_connect_errno())
{
    //Si no se pudo conectar a la base de datos, muestro un mensaje de error
    printf("Fallo la conexión a la base de datos: %s\n", mysql_connect_error());
    exit();
} else {
    //Si la conexión fue exitosa, muestro un mensaje de éxito
    printf("Conexión exitosa a la base de datos: %s\n", DB_NAME);
}
//Definir un conjunto de funciones que nos ayude a la consutla de la base de datos
if(!function_exists('ejecutarConsulta')) {
    function ejecutarConsulta($sql) {
        global $conexion;
        //Creo una variable para almacebar el resultado de la consulta
        $query = $conexion->query($sql);
        //Retorno el resultado de la consulta
        return $query;
    }
    //Cro una funcion que me permita obtener una sola fila d una tabla de la base de datos
    function ejecutarConsultaSimpleFila($sql) {
        //Conectamos a la base de datos
        global $conexion;
        //Creo una variable para almacenar el resultado de la consulta
        $query = $conexion->query($sql);
        //Obtengo una fila de consulta
        $row= $query->fetch_assoc();
        //Retorno la fila obtenida
        return $row;
    }
    //creo una funcion para obtener el id de una consulta o un registro 
    function ejecutarConsulta_retornarID($sql) {
        //Conectamos a la base de datos
        global $conexion;
        //Creo una variable donde guardo la consulta
        $query = $conexion->query($sql);
        //Retorno el id del registro insertado
        return $conexion->insert_id;
    }
    //Creamos una funcion para limpiar los campos de los input 
    function limpiarCadena($str) {
        //Conectamos a la base de datos
        global $conexion;
        //Retorno el valor del campo limpio
        $str = mysqli_real_escape_string($conexion, trim($str));
        //Retornamos el valor
        return htmlspecialchars($str);
    }
}