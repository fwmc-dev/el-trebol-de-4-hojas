<!-- aca poner header yiyi-->
<div class="container">
    <p>Inicio / Mi Cuenta / <span class="text-body-emphasis">Info</span></p>
    <form class="w-50 mx-auto">
        <div class="form-group my-3">
            <label for="userName">Nombre</label>
            <input type="text" class="form-control rounded-0" id="userName" placeholder="Ejemplo: xXTorrezcabronGamerXx">
        </div>
        <div class="form-group my-3">
            <label for="email">Email</label>
            <input type="email" class="form-control rounded-0" id="email" placeholder="Ejemplo: email@email.com">
        </div>
        <div class="form-group my-3">
            <label for="phoneNumber">Telefono (Opcional)</label>
            <input type="tel" class="form-control rounded-0" id="phoneNumber" placeholder="Ejemplo: XX XXXX-XXXX" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}">
        </div>
        <div class="form-group text-center">
            <a href="#" class="btn btn-primary btn-transparent" id="imgButton"><img src="img/moon.svg" id="modes" alt="oscuro" class="svg-icon-sm m-2"></a>
        </div>
        <button type="submit" class="btn btn-dark rounded-0 w-100 border border-secondary my-3 ">Guardar
            cambios</button>
    </form>
</div>

<script>
    const modes = document.getElementById('modes');
    const imgButton = document.getElementById('imgButton');
    imgButton.addEventListener('click', function() {
        if (modes.src.endsWith('img/moon.svg')) {
            modes.src = 'img/sun.svg';
        } else {
            modes.src = 'img/moon.svg';
        }
    });
</script>