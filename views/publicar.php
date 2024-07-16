<?php
    if(isset($_GET['prodID'])){
        require_once 'modelos/publicar.php';
    }
?>

<div class="container"><!--
    <p class="text-muted fw-light"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']); ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreCate']); ?></a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']) . '&sub_categ=' . $producto['nombreEdit']; ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreEdit']); ?></a> / <a class="text-black fw-bold text-decoration-none"><?php echo $producto['titulo']; ?></a></p>
-->
</div>

<div class="album pt-2">
    <div class="container">
        <div class="row">
            <div id="portada-contenedor" style="max-height: 550px; min-height: 400px;" class="col-md-7 d-flex p-0 px-md-3">
                <div id="portada" class="w-100 portada <?php echo isset($_GET['prodID']) ? 'removePortadaAfter' : ''; ?>" style="<?php echo isset($_GET['prodID']) ? "background-image: url('".$prodInfo['portada']."1.png')" : ''; ?>; background-repeat: no-repeat; background-size:contain; background-position: 50% 50%;">
                    <input type="file" class="d-none" name="imgUploader" id="imgUploader" accept="image/png, image/gif, image/jpeg, image/webp">
                </div>
            </div>

            <div class="col-md-5">
                <div class="album">
                    <div class="row">
                        <div style="max-height: 550px; min-height: 400px;">
                            <div class="mt-4 mt-md-0">
                                <h6 class="fw-lighter">TITULO:</h6>
                                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo isset($_GET['prodID']) ? $prodInfo['titulo'] : ''; ?>" placeholder="KIMETSU NO YAIBA VOL.01">
                                <br>
                                <h6 class="fw-lighter">PRECIO:</h6>
                                <div class="input-group">
                                    <span class="input-group-text text-success">$</span>
                                    <input type="number" class="form-control text-success" name="precio" id="precio" min="1" value="<?php echo isset($_GET['prodID']) ? $prodInfo['precio'] : ''; ?>" placeholder="3000">
                                </div>
                                <br>
                                <h6 class="fw-lighter">CATEGORIA:</h6>
                                <select class="form-select" id="categSelector">
                                    <option value="0" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] != 0 ? '' : 'selected') : ''; ?>>Seleccione una categoria...</option>
                                    <option value="1" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 1 ? 'selected' : '') : ''; ?> class="optionSelect">Manga</option>
                                    <option value="2" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 2 ? 'selected' : '') : ''; ?> class="optionSelect">Revista</option>
                                    <option value="3" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 3 ? 'selected' : '') : ''; ?> class="optionSelect">Marvel</option>
                                    <option value="4" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 4 ? 'selected' : '') : ''; ?> class="optionSelect">DC Comics</option>
                                    <option value="5" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 5 ? 'selected' : '') : ''; ?> class="optionSelect">Trading Cards</option>
                                    <option value="6" <?php echo isset($_GET['prodID']) ? ($prodInfo['categoria_id'] == 6 ? 'selected' : '') : ''; ?> class="optionSelect">Pre-ventas</option>
                                </select>
                                <br>
                                <h6 class="fw-lighter">EDITORIAL:</h6>
                                <select class="form-select" id="editSelector" <?php echo isset($_GET['prodID']) ? ($prodInfo['editorial_id'] != null ? '' : 'disabled') : 'disabled'; ?>>
                                    <option value="0" <?php echo isset($_GET['prodID']) ? ($prodInfo['editorial_id'] != 0 ? '' : 'selected') : 'selected'; ?>>Seleccione una editorial...</option>
                                    <?php echo isset($_GET['prodID']) ? ($prodInfo['editorial_id'] != null ? '<option value="1" selected>'.ucfirst($prodInfo['editNombre']).'</option>' : '') : ''; ?>
                                </select>
                                <br>
                                <h6 class="fw-lighter">STOCK:</h6>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" value="<?php echo isset($_GET['prodID']) ? $prodInfo['stock'] : ''; ?>" placeholder="0" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mt-4">
                <h4 class="fw-bold">Descripcion:</h4>
                <textarea class="form-control fw-lighter" placeholder="Descripcion" style="resize: none;" id="descripcion" maxlength="2000" rows="13"><?php echo isset($_GET['prodID']) ? $prodInfo['descripcion'] : ''; ?></textarea>
            </div>
            <div class="my-3 d-flex justify-content-center">
                <input type="button" class="mx-3 btn rounded btn-secondary" value="CANCELAR">
                <input type="button" onclick="publicarProd(<?php echo isset($_GET['prodID']) ? $_GET['prodID'] : 0; ?>)" class="mx-3 btn rounded btn-success" value="PUBLICAR">
            </div>
        </div>
    </div>
</div>