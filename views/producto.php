<?php
    require_once "modelos/producto.php";

?>

<div class="container">
    <p class="text-muted fw-light"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']); ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreCate']); ?></a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']) . '&sub_categ=' . $producto['nombreEdit']; ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreEdit']); ?></a> / <a class="text-black fw-bold text-decoration-none"><?php echo $producto['titulo']; ?></a></p>
</div>

<div class="album pt-2">
    <div class="container">
        <div class="row">
            <div id="portada-contenedor" style="max-height: 550px; min-height: 400px;" class="col-md-7 d-flex p-0 px-md-3">
                <div id="portada" class="w-100" style="background-image: url('<?php echo $producto['portada'] ?>1.png'); background-repeat: no-repeat; background-size:contain; background-position: 50% 50%;">

                </div>
            </div>

            <div class="col-md-5">
                <div class="album">
                    <div class="row">
                        <div style="max-height: 550px; min-height: 400px;">
                            <div class="mt-4 mt-md-0">
                                <h2 class="fw-lighter"><?php echo $producto['titulo']; ?></<h2>
                                <h1 class="fw-bolder text-success">$<?php echo $producto['precio']; ?></h1>
                                <br>
                                <div class="d-flex">
                                    <span class="material-symbols-outlined text-muted">credit_card</span>
                                    <a href="#" class="mx-1 text-muted">VER MEDIOS DE PAGO</a>
                                </div>
                                <hr>
                                <p>CANTIDAD</p>
                                <form action="" class="d-flex flex-column">
                                    <input type="number" name="cantidad" id="cantidad" class="w-25 form-control border-success" min="1" value="1" placeholder="0" required>
                                    <input type="button" onclick="let cant = document.getElementById('cantidad').value; agregarCarrito(<?php echo $producto['id']; ?>, <?php echo isset($_SESSION['USER'][0]['id']) ?  $_SESSION['USER'][0]['id'] : ''; ?>, cant);" class="w-100 btn <?php echo $producto['stock'] <= 0 ? 'btn-danger' : 'btn-success'; ?> rounded-0" <?php echo $producto['stock'] <= 0 ? 'disabled' : ''; ?> value="<?php echo $producto['stock'] <= 0 ? 'SIN STOCK' : 'AGREGAR AL CARRITO'; ?>">
                                </form>
                                <br>
                                <div class="d-flex">
                                    <span class="material-symbols-outlined text-muted">storefront</span>
                                    <p class="mx-1 text-muted">Nuestro Local</p>
                                </div>
                                <div class="border border-dark border-3 rounded" style="--bs-border-opacity: .75;">
                                    <p class="fw-light m-2 text-muted">El Trebol de 4 Hojas, Av. Rivadavia. Lunes a Viernes de 10 a 20 hs Sábados de 10 a 18 hs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mt-5">
                <h4 class="fw-bold">Descripcion:</h4>
                <p class="fw-lighter">
                    <?php echo $producto['descripcion']; ?>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- PRODUCTOS RELACIONADOS  -->

<div class="container mt-5">
    <div class="row ">
        <div class="col px-0">
            <h2 class="text-center ">PRODUCTOS RELACIONADOS</h2>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-4">
                        <?php foreach($productosRel as $prodRel){ ?>
                            <div class="col">
                                <div class="card border-0">
                                    <div class="linea-superior"></div>
                                    <a href="#">
                                        <img class="bd-placeholder-img card-img-top img-fluid" src="<?php echo $prodRel['portada'] ?>1.png"
                                            alt="manga">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text text-center">
                                            <a href="?sec=producto&prodId=<?php echo $prodRel["id"] ?>" class="no-deco"><?php echo $prodRel['titulo'] ?></a>
                                            <br>
                                            $<?php echo $prodRel['precio'] ?>
                                            <br>
                                            <button type="button" onclick="agregarCarrito(<?php echo $prodRel['id']; ?>, <?php echo isset($_SESSION['USER'][0]['id']) ? $_SESSION['USER'][0]['id'] : ''; ?>, 1);" class="btn btn-success btn-block">Agregar al Carrito</button>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.top.document.title = '<?php echo trim($producto["titulo"]) . " - El Trebol de 4 Hojas" ?>';
</script>