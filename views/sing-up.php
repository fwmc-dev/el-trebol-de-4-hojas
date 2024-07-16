<div class="container h-100 text-center form-group ">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <form class="p-4 rounded mb-4" action="modelos/sign-up.php" id="formSignUp" method="POST">
                <div class="form-group text-start">
                    <label for="nameSign">Nombre</label>
                    <input type="text" class="form-control" id="nameSign" name="name" placeholder="Augusto">
                    <p class="text-danger my-0" id="errorName" hidden>Campo vacio.</p>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="lastNameSign">Apellido</label>
                    <input type="text" class="form-control" id="lastNameSign" name="lastName" placeholder="Torres">
                    <p class="text-danger my-0" id="errorLastName" hidden>Campo vacio.</p>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="emailSign">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailSign" name="email" placeholder="email@email.com">
                    <p class="text-danger my-0" id="errorEmail" hidden>El correo electronico esta en un formato incorrecto.</p>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="phoneSign">Telefono (Opcional)</label>
                    <input type="tel" class="form-control rounded-0" id="phoneSign" name="tel" placeholder="11 6477-5839">
                    <p class="text-danger my-0" id="errorPhone" hidden>El numero de telefono esta en un formato incorrecto.</p>
                </div>
                <div class="form-group my-2 text-start">
                    <div class="row">
                        <div class="col-3">
                            <label for="ageSign">Edad</label>
                            <input type="number" class="form-control rounded-0" id="ageSign" min="13" max="150" name="age" placeholder="13">
                            <p class="text-danger my-0" id="errorAge" hidden>Necesitas ser mayor de 13 años.</p>
                        </div>
                        <div class="col-9">
                            <label for="dniSign">DNI</label>
                            <input type="number" class="form-control rounded-0" id="dniSign" min="10000000" max="99999999" placeholder="12345678" name="dni">
                            <p class="text-danger my-0" id="errorDni" hidden>DNI incorrecto.</p>
                        </div>
                    </div>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="passSign">Contraseña</label>
                    <input type="password" class="form-control" id="passSign" name="pass" autocomplete="off">
                    <p class="text-danger my-0" id="errorPassFormat" hidden>La contraseña esta en un formato incorrecto.(una mayuscula, un numero, un caracter especial, longitud mayor a 8 caracteres).</p>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="passVerifSign">Repita la contraseña</label>
                    <input type="password" class="form-control" id="passVerifSign" autocomplete="off">
                    <p class="text-danger my-0" id="errorVerifPass" hidden>Las contraseñas no coinciden.</p>
                </div>
                <button class="btn btn-dark" type="button" onclick="verifRegistro()" aria-expanded="false">Crear Cuenta</button>
                <p class="mt-3">¿Ya tienes una Cuenta? <a href="?sec=login" class="delate-a">Inicia Sesion</a></p>
            </form>
        </div>
    </div>
</div>