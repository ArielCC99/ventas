var tabla;

//creo un funcion int que se ejecuta al incio de la aplicación 
function init() {
    mostrarform(false);
    listar();

    //llamamos a la funcion guardar y editar 
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    });
}

//Creo una función para limpiar el formulario
function limpiar() {
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}

//Función para mostrar  el formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        //$("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    } else {
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//función para cancelar el formulario
function cancelarform() {
    limpiar();
    mostrarform(false);
}

//Creamos una funcion para listar los datos de la base de datos 
function listar() {
    tabla = $('#tbllistado').dataTable({
        "aProcessing": true, //Activamos el procesamiento del datatable
        "aServerSide": true, //Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip', //Definimos los elementos del control de la tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax": {
            url: '../controladores/categoria.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true, //Posibilidad de destruir tabla
        "iDisplayLength": 5, //Mostramos 5 registros por página
        "order": [[0, "desc"]] //Ordenamos columna de forma descendente

    }).DataTable();

}
//Funcion para guardar y editar los datos
function guardaryeditar(e) {
    //no se activa la accion predeterminada del evento
    e.preventDefault();
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../controladores/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
}

//ejecutamos la función init
init();