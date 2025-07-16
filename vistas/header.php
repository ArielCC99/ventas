<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Le vamos a decir al navegador que el diseno que vamos a realizar va a ser responsive o adaptable-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysVentas</title>
    <!--Anadimos la libreria del bootstrap 3.3.5-->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!--Anadimos la libreria de font awesome-->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!--Anadimos libreria de AdminLTE-->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!--Anadimos la libreria de AdminLTE Skins-->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="stylesheet" href="../public/img/apple-ouch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
<!--Datatables-->


</head>

<body class="hold-transition skin-yellow-light sidebar-mini">
    <!--Div que contiene toda la estructura del body-->
    <div class="wrapper">
        <!--Aqui va el header-->
        <header class="main-header">
            <!--Logo-->
            <a href="#" class="logo">
                <!--Mini logo para el sidebar mini 50x50 pixel-->
                <span class="logo-mini"><b>Sys</b>Ventas</span>
                <!--Logo para un dispositivo normal y dispositivos moviles-->
                <span class="logo-lg"><b>Sistema</b> Ventas</span>
            </a> <!--Fin del logo-->
            <!--Aqui va el header del Navbar: los estilos se pueden encontrar en header.less-->
            <nav class="navbar navbar-static-top" role="navigation">
                <!--Boton de la hamburguesa del navbar-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegacion</span>
                </a>
                <!--Navbar menu derecho-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!--Cuenta de usuario: los estilos lo puedes encontrar in dropdown.less-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--Cargamos la imagen del usuario-->
                                <img src="../public/img/descarga.jpg" alt="Imagen Usuario" class="user-image">
                                <!--Nombre de usuario-->
                                <span class="hidden-xs">FERUS</span>
                            </a>
                            <!--Desplegable del usuario-->
                            <ul class="dropdown-menu">
                                <!--Imagen del usuario-->
                                <li class="user-header">
                                    <img src="../public/img/descarga.jpg" alt="Imagen de Usuario" class="img-circle">
                                    <p>FERUS</p>
                                </li>
                                <!--Menu footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a hidden="#" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav><!--Fin del navbar-->
        </header><!--Fin del header-->

        <!--Menu izquierdo en columna, contiene un logo y el sidebar-->
        <aside class="main-sidebar">
            <section class="sidebar">


                <!--Ponemos cada uno de los menus-->
                <ul class="sidebar-menu">
                    <li class="header">SYSVENTAS</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Configuracion</span>
                    </li>


                    <!--Lista escritorio-->
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Escritorio</span>
                        </a>
                    </li>


                    <!--Lista almacen-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Almacen</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="articulo.php">
                                    <i class="fa fa-circle-o"></i>Articulos
                            </li></a>
                            <li><a href="categoria.php">
                                    <i class="fa fa-circle-o"></i>Categorias
                            </li></a>
                        </ul>
                    </li><!--Fin de lista de almacen-->


                    <!--Lista persona-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Ventas</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="venta.php"><i class="fa fa-circle-o"></i>Ventas</a></li>
                            <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
                        </ul>
                    </li><!--Fin de lista de persona-->


                    <!--Lista acceso-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Acceso</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                            <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permisos</a></li>
                    </li>

                    </li>

                </ul>
            </section>

        </aside><!-- Fin del sidebar-->