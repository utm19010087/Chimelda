<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Pagina principal">
    <link rel="stylesheet" href="CSS/principal.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
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
                        <a class="nav-link" href="alumnos.php">Alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docentes.php">Docentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carreras.php">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asignaturas.php">Asignaturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horarios.php">Horarios</a>
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

    <h1 style="text-align: center;">Bienvenido seas, empleado de Lalo</h1>
    <main class="container">
        <div class="container_grid">
            <section class="contenedor alumno">
                <a href="alumnos.html"><img class="icon-img" src="/IMG/Icons/Estudiante.png" alt="Estudiante"></a>
                <div class="contenedor_alumno">
                    <h4>Administrar Alumnos</h4>
                </div>
            </section>

            <section class="contenedor docente">
                <a href="docentes.html"><img class="icon-img" src="/IMG/Icons/Profesor.png" alt="Docentes"></a>
                <div class="contenedor_docente">
                    <h4>Administrar Docentes</h4>
                </div>
            </section>

            <section class="contenedor carrera">
                <a href="carreras.html"><img class="icon-img" src="/IMG/Icons/Carreras.png" alt="Carreras"></a>
                <div class="contenedor_carrera">
                    <h4>Administrar Carreras</h4>
                </div>
            </section>
    
            <section class="contenedor asignatura">
                <a href="materias.html"><img class="icon-img" src="/IMG/Icons/Materias.png" alt="Materias"></a>
                <div class="contenedor_asignatura">
                    <h4>Registrar Materias</h4>
            </section>

            <section class="contenedor horario">
                <a href="horarios.html"><img class="icon-img" src="/IMG/Icons/Horario.png" alt="Horario"></a>
                <div class="contenedor_horario">
                    <h4>Horarios</h4>
                </div>
            </section>

            <section class="contenedor aulas">
                <a href="#"><img class="icon-img" src="/IMG/Icons/Aula.png" alt="Horario"></a>
                <div class="contenedor_aulas">
                    <h4>Aulas</h4>
                </div>
            </section>
        </div>
    </main>


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

    <script src="/JS/principal.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>