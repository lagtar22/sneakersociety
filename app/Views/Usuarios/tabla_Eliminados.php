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
<!-- Seccion de la tabla de usuarios eliminados-->
<section class="container mb-5 mt-5">
    <div class="col-10 col-xs-12 col-sm-12 mx-auto mt-3 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 18 18">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4">
        <?php if(isset($usuario)): ?>
        <!-- Botón para regresar a la pagina principal -->
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4">
                <thead class="marron">
                    <tr class="table-dark text-center h3">
                        <th>Nombre y Apellido</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Recorre los registros -->
                    <?php foreach($usuario as $user): ?>
                    <tr>
                        <!-- Muestra el nombre, apellido, correo electrónico y nombre de usuario -->
                        <td class="h5 text-justify"> <?=$user['us_Name'];?> <?=$user['us_Apellido'];?> </td>
                        <td class="h5 text-justify"> <?=$user['us_Email'];?> </td>
                        <td class="h5 text-center"> <?=$user['us_User'];?> </td>
                        <td class="h5 text-center">
                            <!-- Centra el botón de borrar en la columna asignada -->
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary" type="button" href="<?=base_url('administrador/usuarios/alta/'. $user["id"])?>">
                                    <svg width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                        <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    Dar de alta
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <hr class="mb-4">
        <div class="ms-3">
            <a class="btn btn-dark mb-4" type="button" href="<?=base_url(route_to('usuarios'))?>">
                <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Regresar
            </a>
        </div>
        <?php else: ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 texto mt-6 mb-6">
                <p class="text-center h3 mb-3 h4">
                    No se encuentran usuarios eliminados actualmente
                </p>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-dark" type="button" href="<?=base_url(route_to("usuarios"))?>">
                        <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Regresar
                    </a>
                </div>
            </div>
        </div>
        <?php endif;?>
        <hr class="mb-4">
    </div>
</section>