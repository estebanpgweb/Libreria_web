<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Virtualteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Virtualteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./catalogo.html">Catalogo</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                <?php
                if(!isset($_SESSION["usuario"])){
                    echo '<a class="btn btn-primary" href="./codigo/login.php">Ingresar</a>';
                } else {
                    echo '<p>' . $_SESSION["usuario"] . '</p>';
                }
                ?>
            </form>
        </div>
    </div>
</nav>




<main class="container">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/fondos/book.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1> Tu Biblioteca virtual</h1>
                        <p>Educacion, literatura y las obras colombianas mas importantes. </p>
                        <p><a class="btn btn-lg btn-primary" href="./codigo/registo.php">Registrarme</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/fondos/library.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Tu Biblioteca virtual</h1>
                        <p> Educacion, literatura y las obras colombianas mas importantes.</p>
                        <p><a class="btn btn-lg btn-primary" href="./codigo/registo.php">Registrarme</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/fondos/notebook.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1  style="color:dodgerblue;">Tu Biblioteca virtual</h1>
                        <p style="color:black;">

                        </p>
                        <p><a class="btn btn-lg btn-primary" href="./codigo/registo.php">Registrarme</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Bienvenido a tu Virtualteca!!</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="material-icons">menu_book</span>
                </div>
                <div>
                    <h2>Literatura colombiana</h2>
                    <p>Opacada durante décadas por la brillante figura de García Márquez, la literatura colombiana vive un momento dorado fruto del reconocimiento de su enorme diversidad geográfica, lingüística y étnica.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="material-icons">menu_book</span>
                </div>
                <div>
                    <h2>Historia</h2>
                    <p>La literatura es considerada la manera de expresarse de una cultura, una nación, lengua, época o género pero esta transciende mas alla de las paginas y la tinta, tambien va de boca en boca tradicion en tradicion dando origen a la historia mas alla de cualquier tradicion.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="material-icons">menu_book</span>
                </div>
                <div>
                    <h2>Material educativo</h2>
                    <p>A través de la educación literaria se conseguirá la capacidad de análisis, el manejo del lenguaje y el sentido de criticidad. ... Por tanto, es la literatura, ya sea en historias noveladas o a través del cuento, la poesía o el ensayo, la vía para formar seres libres, críticos y pensantes.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light p-5 rounded">
        <h1>Ver mas contenidos</h1>
        <p class="lead">Explora los contenidos que tu virtualteca tiene a su disposicion para ti.</p>
        <a class="btn btn-lg btn-primary" href="./catalogo.html" role="button">Quiero mirar &raquo;</a>
    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Custom cards</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./img/book_640.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Recursos fisicos</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">

                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Virtualteca</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./img/literature_640.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Contenio digital</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">

                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Virtualteca</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./img/tea-time_640.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Prestamo de libros</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">

                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Virtualteca</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <span class="material-icons">menu_book</span>
            </a>
            <span class="text-muted">&copy; 2021 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><span class="material-icons">discord</span></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><span class="material-icons">reddit</span></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><span class="material-icons">telegram</span></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><span class="material-icons">apple</span></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><span class="material-icons">whatsapp</span></a></li>
        </ul>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
