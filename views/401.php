<style>

    .page-not-found h2 {
        font-size: 130px;
    }

    .page-not-found h3 {
        font-size: 42px;
    }


    @media (max-width: 767px) {
        .page-not-found h2 {
            font-size: 100px;
            margin: 0;
        }

        .page-not-found h3 {
            font-size: 28px;
        }

        .page-not-found .bg-light {
            width: 100%;
        }
    }
</style>


<!-- Not Found Page HTML -->
<div class="container page-not-found mb-5 text-center">
    <div>
        <img src="img/401.jpg" class="w-75" alt="401">
        <h3 class="m-0 text-success">No tienes permiso para acceder a esta página</h3>
        <p>Vuelva a inicio o inicie sesión como otro usuario. Si el error persiste, pongase en contacto con soporte.</p>
        <div class="mt-4 d-flex justify-content-center">
            <a class="btn btn-outline-secondary border-3 mx-1" href="?sec=home">Inicio</a>
            <a class="btn btn-outline-success border-3 mx-1" href="?sec=local">Contactenos</a>
        </div>
    </div>
</div>