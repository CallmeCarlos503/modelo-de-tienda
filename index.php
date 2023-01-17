<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="index">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo" src="https://cdn.shopify.com/s/files/1/1533/4185/files/UE_Logo_Horizontal_RGB_Pepper_Green_2x_009564db-7d56-4259-b812-ca98a9f89779_2777x.png?v=1614329689" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img class="logo" src="https://cdn.shopify.com/s/files/1/1533/4185/files/UE_Logo_Horizontal_RGB_Pepper_Green_2x_009564db-7d56-4259-b812-ca98a9f89779_2777x.png?v=1614329689" alt="">

                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contactar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="contenido">
        <section class="carrusel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://mvt.com.mx/wp-content/uploads/2022/09/tramite-factura-uber-eats-2022.jpg" height="300px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://tb-static.uber.com/prod/image-proc/processed_images/7b52b3cc7d55f801ebd00874b63531b0/16bb0a3ab8ea98cfe8906135767f7bf4.jpeg" height="300px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDOSbqY6nL_0xervPy_0KQLF1ekJQsg0glcA&usqp=CAU" height="300px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

    </div>

</body>

</html>