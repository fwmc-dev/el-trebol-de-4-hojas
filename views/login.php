<div class="container h-100 text-center form-group ">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <form class="p-4 rounded mb-4" action="modelos/login.php" method="post">
                <div class="form-group my-4 text-start">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="email@email.com" <?php if(isset($_GET["error"])){ ?> value="<?php echo $_GET["error"]; ?>" <?php } ?>name="email" required>
                </div>
                <div class="form-group text-start">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" minlength="8" name="pass" required>
                    <a href="?sec=rec_cuenta" class="delate-a">¿Olvidaste tu Contraseña?</a>
                </div>
                <?php if(isset($_GET["error"])){?><p class="text-danger mt-2">ESTOS DATOS NO SON CORRECTOS. ¿CHEQUEASTE QUE ESTÉN BIEN ESCRITOS?</p> <?php } ?>
                <button class="btn btn-dark" type="submit" aria-expanded="false">INICIA SESION</button>
                <p class="mt-3">¿No tenés cuenta? <a href="?sec=sing-up" class="delate-a">Crear cuenta</a></p>
            </form>
        </div>
    </div>
</div>