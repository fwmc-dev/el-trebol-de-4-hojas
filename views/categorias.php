<?php
require_once "modelos/categorias.php";

?>

<div class="container">
    <div class="row mb-3 mb-md-0">
        <div class="col-md-6 px-3 px-md-0">
            <p class="text-muted fw-light m-0"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <a <?php echo !empty($_GET['sub_categ']) ? 'href="?sec=categorias&categ=' . $_GET['categ'] . '"' : ''; ?> class="<?php echo !empty($_GET['sub_categ']) ? 'text-muted fw-light' : 'text-black fw-bold'; ?> text-decoration-none"><?php echo ucwords(str_replace("_", " ", $_GET['categ'])); ?></a><?php echo !empty($_GET['sub_categ']) ? ' / <a class="text-black fw-bold text-decoration-none">' . ucwords(str_replace("_", " ", $_GET['sub_categ'])) . '</a>' : ''; ?></p>
        </div>

        <div class="col-8 col-md-6 d-flex flex-column flex-md-row align-items-start justify-content-md-end align-items-md-center mt-4 m-md-0 px-3 px-md-0">
            <p class="m-0">Ordenar por:</p>
            <select class="mx-md-2 form-select-sm" aria-label=".form-select-sm example" name="orderSelector" id="orderSelector">
                <option value="0" selected>Aleatorio</option>
                <option value="1">Precio: Menor a Mayor</option>
                <option value="2">Precio: Mayor a Menor</option>
                <option value="3">A - Z</option>
                <option value="4">Z - A</option>
                <option value="5">Más Nuevo al más Viejo</option>
                <option value="6">Más Viejo al más Nuevo</option>
            </select>
        </div>

        <?php
        if ($_GET['sec'] != 'home') { ?>
            <div class="col-4 d-md-none d-flex align-items-end justify-content-end mt-4 m-md-0 px-3 px-md-0">
                <button class="btn border-black border-1 d-flex m-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtros" aria-controls="offcanvasRight">
                    FILTRAR
                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </button>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="filtros" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header border-bottom border-3">
                    <button type="button" class="border-0 bg-transparent m-0" data-bs-dismiss="offcanvas" aria-label="Close">
                        <span class="material-symbols-outlined">
                            chevron_left
                        </span>
                    </button>
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">FILTRAR POR:</h5>
                </div>
                <div class="offcanvas-body">
                    <?php
                    if ($_GET['sec'] == 'home' || $_GET['sec'] == 'productos') { ?>
                        <h4 class="mb-3 fw-bold">Categorias principales</h4>
                        <p style="text-decoration: none;">
                            <a class="anchor_links2" href="?sec=categorias&categ=dc_comics">DC Comics</a>
                            <a class="anchor_links2" href="?sec=categorias&categ=revista">Revista</a>
                            <a class="anchor_links2" href="?sec=categorias&categ=manga">Manga</a>
                            <a class="anchor_links2" href="?sec=categorias&categ=marvel">Marvel</a>
                            <a class="anchor_links2" href="?sec=categorias&categ=pre_ventas">Pre Ventas</a>
                            <a class="anchor_links2" href="?sec=categorias&categ=trading_cards">Trading cards</a>
                        </p>
                        <?php } else if ($_GET['sec'] == 'categorias') {
                        if (!empty($_GET['categ'])) { ?>
                            <?php if ($_GET['categ'] == 'manga' && empty($_GET['sub_categ'])) { ?>
                                <h4 class="mb-3 fw-bold">Manga</h4>
                                <p style="text-decoration: none;">
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=ivrea">Ivrea</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=panini">Panini</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=ovni_press">Ovni Press</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=distrito_manga">Distrito Manga</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=planeta_comic">Planeta Comic</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=kemuri">Kemuri</a>
                                </p>
                            <?php } else if ($_GET['categ'] == 'revista' && empty($_GET['sub_categ'])) { ?>
                                <h4 class="mb-3 fw-bold">Revista</h4>
                                <p style="text-decoration: none;">
                                    <a class="anchor_links2" href="?sec=categorias&categ=revista&sub_categ=fierro">Fierro</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=revista&sub_categ=ohla la">Ohla la</a>
                                    <a class="anchor_links2" href="?sec=categorias&categ=manga&sub_categ=lugares">Lugares</a>
                                </p>
                            <?php }
                            ?>
                    <?php
                        }
                    } ?>

                    <!--
                    <h4 class="fw-bold mt-5">Precio</h4>
                    <div class="d-flex flex-row w-100">
                        <div class="d-flex flex-column justify-content-between">
                            <p>Desde</p>
                            <input type="number" placeholder="0" min="0" max="1000000" class="form-control border-dark border-2">
                        </div>
                        <div class="d-flex flex-column mx-2 justify-content-between">
                            <p>Hasta</p>
                            <input type="number" placeholder="0" min="0" max="1000000" class="form-control border-dark border-2">
                        </div>
                    </div> -->
                </div>
            </div>
        <?php }
        ?>
    </div>
</div>

<!-- Categorias -->

<div class="album pb-3 pt-3 pt-md-5">
    <div class="container">
        <div class="row">
            <?php
                require_once "views/lista_productos.php";
            ?>
        </div>
    </div>
</div>