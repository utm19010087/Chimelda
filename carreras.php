<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/carrera.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/tablas.css">
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
                <a class="navbar-brand mt-2 mt-lg-0" href="principal.php">
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

    <main class="contenenedor">
        <form action="">
            <legend>Registrar Carrera</legend>

            <div class="contenedor__grid">
                    <div class="campo">
                        <label for="carrera">Nombre</label>
                        <input type="text" name="carrera" id="carrera">
                    </div>
    
                    <div class="campo">
                        <label for="grado">Grado</label>
                        <input type="text" name="grado" id="grado">
                    </div>
    
                    <div class="campo">
                        <label for="grupo">Grupo</label>
                        <input type="text" name="grupo" id="grupo">
                    </div>
    
                    <div class="campo">
                        <button class="btn" type="submit">Añadir</button>
                    </div>
            </div>
        </form>

        <center>
            <h2>Docentes</h2>
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Matricula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Especializacion</th>
                    <th>Asignatura</th>
                    <th>Situacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="IMG/F1.jpg" width="100px" height="100px"></td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>boton</td>
                </tr>
            </tbody>
        </table>
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

</body>

</html>