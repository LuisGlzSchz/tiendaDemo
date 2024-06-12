<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ASP PUBLICIDAD</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>

    <nav id="header" class="navbar navbar-expand-lg bg-body-tertiary sticky-top " data-bs-spy="scroll">
        <div class="container">
            <a id="logo-nav" class="navbar-brand" href="#"><img src="logo" alt="">ASP Publicidad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-around align-items-center">
                    <li id="nosotrosNav" class="nav-item d-none d-md-block">
                        <a class="nav-link " href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#estampados">Estampados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#publicidad">Publicidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cerigrafias">Cerigrafía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contáctanos</a>
                    </li>
                    <form class="container-fluid d-flex justify-content-around align-items-center">
                        <a class="nav-link" href="index.php?page=shop">
                            <button class="btn btn-outline-dark me-2" type="button">Tienda</button>
                        </a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">ASP PUBLICIDAD</h1>
                <p class="lead fw-normal text-white-50 mb-0">¡Confía en ASP Publicidad y lleva tu marca al siguiente nivel!</p>
            </div>
        </div>
    </header>

    <section id="nosotros" class="container-fluid mt-4">
        <div class="section-title">
            <h2>Nosotros</h2>
        </div>

        <div class="row">
            <div class="col">
                <div class="container">
                    <p>En ASP Publicidad, somos especialistas en brindar soluciones innovadoras y de alta calidad para todas tus necesidades de rotulación, estampados, cerigrafía y publicidad. Con años de experiencia en el sector, nos hemos consolidado como un referente en la impresión de lonas y folletos, ofreciendo a nuestros clientes productos y servicios que destacan por su excelencia y atención al detalle.</p>
                    <p> Nuestro equipo de profesionales apasionados y dedicados trabaja con tecnología de vanguardia para asegurarse de que cada proyecto cumpla con los más altos estándares de calidad. Desde la conceptualización hasta la entrega final, nos esforzamos por superar las expectativas de nuestros clientes, proporcionando resultados que no solo satisfacen sus necesidades, sino que también potencian la visibilidad y el impacto de sus marcas.</p>
                    <p>En ASP Publicidad, entendemos que cada cliente es único, por eso ofrecemos soluciones personalizadas y asesoramiento experto para ayudarte a elegir las mejores opciones para tu negocio. Ya sea que necesites rotulación creativa, estampados personalizados, impresiones precisas o campañas publicitarias efectivas, estamos aquí para ayudarte a destacar y alcanzar tus objetivos.</p>

                </div>
            </div>
            <div class="col">
                <img src="assets/img/logo.png" alt="" class="img-thumbnail">
            </div>
        </div>
    </section>


    <section id="estampados" class="container">
        <div class="section-title">
            <h2>Estampados</h2>
        </div>

        <div class="row">
            <div class="col">
                <img src="assets/img/estampados.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
            </div>
    </section>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ASP Publicidad 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>
