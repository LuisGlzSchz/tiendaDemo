<?php require_once "config/conexion.php";
require_once "config/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
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

    <!-- Navigation-->
    <nav id="header" class="navbar navbar-expand-lg bg-body-tertiary sticky-top " data-bs-spy="scroll">
        <div class="container">
            <a id="logo-nav" class="navbar-brand " href="index.php?page=shop" target="_self"><img src="images/logoASP.png" alt="" class="nav-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-around align-items-center">
                    <form class="container-fluid d-flex justify-content-around align-items-center">
                        <a class="nav-link" href="index.php?page=shop" target="_self" id="btnVolverTienda">
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
                <h1 class="display-4 fw-bolder">MI CARRITO</h1>
                <!-- <p class="lead fw-normal text-white-50 mb-0">Tus Productos Agregados.</p> -->
            </div>
        </div>
    </header>

    <section class="container-fluid ">
        <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-12">
                <div class="subtitulo pt-3">
                    <h3>Ingresa tus datos</h3>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                    <label for="nombre">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="micorreo@hotmail.com" required>
                    <label for="email">Correo Electrónico</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="direccion" placeholder="Direccion" required>
                    <label for="direccion">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="numeric" class="form-control" id="telefono" placeholder="Teléfono" required>
                    <label for="telefono">Teléfono</label>
                </div>
            </div>

            <div class="col col-lg-6 col-md-6 col-sm-12">
                <div class="subtitulo pt-3">
                    <h3>Mi Carrito</h3>
                </div>
                <div class="">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblCarrito">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-5 ms-auto">
                                <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container py-5">
            <p class="m-0 text-center text-white">Copyright &copy; ASP Publicidad 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>


    <script>
        mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function(response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
</body>

</html>
