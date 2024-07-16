<?php
    require_once "modelos/home.php";
?>

<!-- Carrusel -->
<div class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1-slide.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/2-slide.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/3-slide.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<br>

<!-- Categorias -->

<div class="album py-5 ">
    <div class="container">
        <div class="row">
            <h1 class="text-center pb-md-5"> NUESTRAS PUBLICACIONES </h1>
            
            <?php
                require_once "views/lista_productos.php";
            ?>
        </div>
    </div>
</div>

<!-- OFERTAS  

<div class="container">
    <div class="row ">
        <div class="col">
            <h2 class="text-center ">OFERTAS</h2>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->