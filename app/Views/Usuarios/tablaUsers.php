<!-- Mensaje de alerta -->
<?php
    if(session()->getFlashdata('alertaExitosa')){
        echo
        '<p class="alert text-center alert-success mt-4 col-lg-8 col-md-8 col-sm-8 mx-auto w-50 h4" role="alert">
            <svg width="28" height="28" fill="#198754" class="bi bi-check-circle" viewBox="0 0 18 18">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
            '.session()->getFlashdata('alertaExitosa').'
        </p>';
    }
?>
<!-- Seccion de la tabla de usuarios -->
<section class="container mt-5 mb-5">
    <div class="col-10 col-xs-12 col-sm-12 mx-auto mt-3 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 18 18">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4">
        <!-- Botón de mostrar a los usuarios eliminados -->
        <div class="ms-3">
            <a class="btn marron" type="button" href="<?=base_url(route_to('usuarios_eliminados'))?>">
                <svg width="28" height="28" fill="currentColor" class="bi bi-eye" viewBox="0 0 18 18">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
                Mostrar Usuarios Eliminados
            </a>
        </div>
        <hr class="mb-4">
        <!--Búsqueda y filtro-->
        <div class="container-fluid">
            <form action="<?= base_url(route_to('buscarUsuarios')) ?>" class="d-flex" method="post">
                <div class="input-group justify-content-start">
                    <input type="text" class="form-control col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6" placeholder="Buscar usuario" name="term" id="term"><br>
                    <button class="btn btn-dark col-xxl-1 col-xl-2 col-lg-2 col-md-3 col-sm-3" type="submit">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        Buscar
                    </button>
                    <a href="<?= base_url(route_to('usuarios')) ?>" class="btn marron col-xxl-1 col-xl-2 col-lg-2 col-md-3 col-sm-3">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                        </svg>
                        Reiniciar
                    </a>
                    <span class="col-xxl-7 col-xl-5 col-lg-4 col-md-6 col-sm-6"></span>
                </div>
            </form>
        </div>
        <br><hr class="mb-4"><br>
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4 mb-3">
                <!-- Cabecera tabla usuarios -->
                <thead class="table-dark text-center h4">
                    <tr class="marron">
                        <th>Nombre y Apellido</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($usuarios): ?>
                        <?php foreach ($usuarios as $usuario): ?>
                            <?php if ($usuario['us_Baja'] === null) : ?>
                            <tr>
                                <td class="h5 text-justify"><?= $usuario['us_Name'] . ' ' . $usuario['us_Apellido'] ?></td>
                                <td class="h5 text-justify"><?= $usuario['us_Email'] ?></td>
                                <td class="h5 text-center"><?= $usuario['us_User'] ?></td>
                                <td class="h5 text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="<?= base_url('administrador/usuarios/borrar/' . $usuario['id']) ?>" class="btn btn-danger" type="button">
                                            <svg width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 20 20">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            Borrar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center h4">No se encontraron Usuarios</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <hr class="mb-4">
    </div>
</section>