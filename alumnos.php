<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Pagina de alumnos">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/CSS/tablas.css">
    <link rel="stylesheet" href="/CSS/formulario.css">
    <link rel="stylesheet" href="/CSS/footer.css">
    <title>Document</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="principal.html">
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15"
                        alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="alumnos.html">Alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docentes.html">Docentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carreras.html">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asignaturas.html">Asignaturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horarios.html">Horarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aulas</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="index.php">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <center>
        <h2>Alumnos</h2>
    </center>

    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Matricula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Carrera</th>
                <th>Situacion</th>
                <th>Calificaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/IMG/F1.jpg" width="100px" height="100px"></td>
                <td>LES897689</td>
                <td>Goku</td>
                <td>Son</td>
                <td>Ingenieria Quimica</td>
                <td>Regular</td>
                <td>boton</td>
            </tr>
        </tbody>
    </table>



    <footer class="footer">
        <div class="cont">
            <div class="footer__content">
                <div class="footer__logo">
                    <img [src]="LogoLalo" alt="Logo">
                </div>
                <div class="footer__social">
                    <a href="#" class="footer__social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer__social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer__social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer__social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="footer__social-icon"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="footer__social-icon"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <hr>
            <div class="footer__info">
                <p>&copy; 2023 La Universidad de Lalo. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar Alumno</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="formulario">
                            <div class="campo">
                                <label for="matricula">Matricula</label>
                                <input type="text" class="imp" name="matricula" id="matricula" placeholder="">
                            </div>
                            <div class="campos">
                                <label for="nombre">Nombre del Alumno</label>
                                <input type="text" class="imp" name="nombre" id="nombre" placeholder="">
                            </div>
                            <div class="campos">
                                <label for="apellidos">Apellido del alumno</label>
                                <input type="text" class="imp" name="apellidos" id="apellidos" placeholder="">
                            </div>
                            <div class="campos">
                                <label for="carrera">Carrera</label>
                                <select class="sel" name="carreras" id="carreras">
                                    <option selected disabled>Selecciona la carrera</option>
                                    <option value="tics">TIC's</option>
                                    <option value="mecatronica">Mecatronica</option>
                                </select>
                            </div>
                            <div class="campos">
                                <label for="telefono">Telefono</label>
                                <input type="number" class="imp" name="telefono" id="telefono" placeholder="">
                            </div>
                            <div class="campos">
                                <label for="fecha_ingreso">Fecha de ingreso</label>
                                <input type="date" class="imp" name="fecha_ingreso" id="fecha_ingreso" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>