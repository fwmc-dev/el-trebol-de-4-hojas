<?php
    require_once "modelos/admin_users.php";
?>

<div class="container">
    <p class="text-muted fw-light"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <span class="text-black fw-bold text-decoration-none">Administración</span></p>
    <h1>Administración</h1>
</div>


<div class="container table-responsive mt-4">
    <div class="d-flex">
        <button type="button" id="user_button" style="border-top-left-radius: 5px;" class="borber border-0 bg-success bg-opacity-25 text-dark m-0 p-2">Usuarios</button>
        <button type="button" id="post_button" onclick="changePage(2)" class="border border-top-0 border-bottom-0 border-success border-opacity-25 border-3 bg-secondary bg-opacity-10 text-dark m-0 p-2">Productos</button>
        <button type="button" id="msgs_button" onclick="changePage(3)" style="border-top-right-radius: 5px;" class="borber border-0 bg-secondary bg-opacity-10 text-dark m-0 p-2">Mensajes</button>
    </div>
    <table class="table" style="min-width: 936px;">
        <caption id="caption">Lista de usuarios</caption>
        <thead id="listaTitulos">
            <tr class="table-success">
                <th scope="col"></th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Telefono</th>
                <th scope="col">DNI</th>
                <th scope="col"></th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="listaItems">
            <?php
            foreach($usersInfo as $userInfo){ ?>
            <tr <?php echo $userInfo['fecha_baja'] == null ? '' : 'class="table-secondary"'; ?>>
                <th scope="row" class="align-middle" style="user-select: none;"><p style="padding: 5px 2px 5px 2px;" class="bg-dark text-white h6 text-center rounded-circle m-0"><?php echo $userInfo['nombre'][0] . $userInfo['apellido'][0] ?></p></th>
                <td class="align-middle"><?php echo $userInfo['nombre'] . " " . $userInfo['apellido'] ?></td>
                <td class="align-middle"><?php echo $userInfo['email'] ?></td>
                <td class="align-middle"><?php echo $userInfo['telefono'] ?></td>
                <td class="align-middle"><?php echo $userInfo['DNI'] ?></td>
                <td class="text-white" style="user-select: none; --bs-text-opacity: .0;">Column content</td>
                <td class="align-middle">
                    <button type="button" onclick="userFunc(<?php echo $userInfo['fecha_baja'] == null ? 1 : 0; ?>, <?php echo $userInfo['id'];?>)" class="borber border-0 bg-success bg-opacity-25 text-dark m-0 p-2 rounded"><?php echo $userInfo['fecha_baja'] == null ? 'Bloquear' : 'Desbloquear'; ?></button>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>