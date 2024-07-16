<?php
    require_once "modelos/mi_cuenta.php";
?>

<div class="container">
    <p>Inicio / <span class="text-body-emphasis">Mi Cuenta</span></p>
    <h1>Mi Cuenta</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="col">
                <div class="">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <h6 class="text-body-secondary m-0">MIS DATOS</h6>
                        <p class="m-0">editar</p>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <p class="text-body-secondary"><?php echo $userInfo['nombre'] . " " . $userInfo['apellido']; ?></p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                            <p class="text-body-secondary"><?php echo $userInfo['email']; ?></p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined">
                                badge
                            </span>
                            <p class="text-body-secondary"><?php echo $userInfo['DNI']; ?></p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined">
                                call
                            </span>
                            <p class="text-body-secondary"><?php echo $userInfo['telefono']; ?></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-4">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <h6 class="text-body-secondary m-0">MIS DIRECCIONES</h6>
                        <p class="m-0">editar</p>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined">
                                location_on
                            </span>
                            <p class="fw-bolder">Principal</p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined opacity-0">
                                check_box_outline_blank
                            </span>
                            <p class="text-body-secondary">Calle 9876</p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined opacity-0">
                                check_box_outline_blank
                            </span>
                            <p class="text-body-secondary">CABA, 1234 (CP)</p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined opacity-0">
                                check_box_outline_blank
                            </span>
                            <p class="text-body-secondary">Capital Federal</p>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="material-symbols-outlined opacity-0">
                                check_box_outline_blank
                            </span>
                            <p class="text-body-secondary">Argentina</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h6 class="text-body-secondary m-0">MIS COMPRAS</h6>
                <p class="m-0 text-white">relleno</p>
            </div>
            <hr>
            <div class="row">
                <?php
                    if(!empty($rowsCompras)){
                        foreach($rowsCompras as $rowCompra){ ?>
                        <div class="col-md-6">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="<?php echo $rowCompra['portada']?>1.png" class="img-fluid h-100 rounded-start">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body d-flex flex-column py-2 px-3">
                                            <small class="fw-bolder pb-1"><?php echo $rowCompra['titulo']?></small>
                                            <small class="p-0 m-0"><span class="fw-bolder">N° Orden:</span> #<?php echo $rowCompra['id']?></small>
                                            <small class="p-0 m-0"><span class="fw-bolder">Estado:</span> <?php echo $rowCompra['estado']?></small>
                                            <small class="p-0 m-0"><span class="fw-bolder">Cantidad:</span> <?php echo $rowCompra['cantidad']?></small>
                                            <small class="p-0 m-0"><span class="fw-bolder">Total:</span> $<?php echo $rowCompra['precio']?></small>
                                            <small class="p-0 m-0"><span class="fw-bolder">Fecha:</span> <?php echo $rowCompra['fecha_compra']?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                }else{
                    echo '<p class="fw-bolder">No has hecho ninguna compra todavia</p>';
                } ?>
            </div>
        </div>
    </div>
</div>